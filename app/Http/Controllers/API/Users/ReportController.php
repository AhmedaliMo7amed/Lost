<?php

namespace App\Http\Controllers\API\Users;

use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\Review;
use App\Models\User;
use App\Http\Resources\getReviews ;
use App\Http\Resources\reportReview;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Report as ReportResource;
use mysql_xdevapi\Exception;

class ReportController extends Controller
{
    use GeneralTrait;

    // get all reports
    public function index()
    {

        $authUser = Auth::guard('user-api')->user()->id;
        $reports = Report::with('user')->where('user_id',$authUser)->get();

        if (!is_null($reports))
        {
            $result = ReportResource::collection($reports);
            return $this->returnData('Data',$result,'User Reports Sent');
        }else{
            return $this->returnSuccessMessage('No Reports Founded');
        }
    }


    // store new report (without need to registration)
    public function store(Request $request)
    {
        try {
            $user = User::find(Auth::guard('user-api')->user()->id);
            $input = $request->all();

            $validator = Validator::make($input,[
                'serialNumber'=>'nullable|regex:/^\d{15,17}$/',
                'type'=>'required|alpha',
                'brand'=>'required|alpha',
                'model'=>'required',
                'color'=>'required',
                'RAM'=>'required|numeric',
                'ROM'=>'required|numeric',
                'frontCrach_top'=>'nullable|boolean',
                'frontCrach_center'=>'nullable|boolean',
                'frontCrach_bottom'=>'nullable|boolean',
                'backCrach_top'=>'nullable|boolean',
                'backCrach_center'=>'nullable|boolean',
                'backCrach_bottom'=>'nullable|boolean',
                'devicePicture'=>'required|mimes:jpeg,jpg,png,gif|max:10000',
                'additional_info'=>'nullable|string|max:100',
            ]);
            if ($validator->fails()) {
                return $this->returnError('E147', $validator->errors()->first());
            }

            $finder = 0;
            if (!is_null($request->serialNumber)) {
                $finder = Report::where('serialNumber',$request->serialNumber)->count();
            }

            if ($finder == 0){

                $now = Carbon::now();
                $destinationPath = public_path().'/images/devices/'.$now->year.'/'.'0'.$now->month.'/';
                $devicePhoto = $request->file('devicePicture');
                $name = $devicePhoto->getClientOriginalName();
                $deviceNewPhoto = Carbon::now()->format('His').$name;
                $devicePhoto->move($destinationPath,$deviceNewPhoto);
                $input['devicePicture'] = '/images/devices/'.$now->year.'/'.'0'.$now->month.'/'.$deviceNewPhoto;

                $user->report()->create($input);
                return $this->returnSuccessMessage('report submitted Successfully');
            }else{
                return $this->returnError('E102', 'Serial Is reported once before');
            }

        }catch (Exception $e)
        {
            return $this->returnError($e->getCode(), $e->getMessage());
        }

    }

    public function update(Request $request, $id)
    {

        $authUser = Auth::guard('user-api')->user();
        $report = Report::find($id);
        $input = $request->all();

        if (empty($report))
        {
            return $this->returnError('E555', 'No Report Has #ID'.$id);
        }

        if ($report['user_id'] == $authUser->id)
        {
            $validator =Validator::make($request->all() ,[

                //Device Validation
                'serialNumber'=>'nullable|regex:/^\d{15,17}$/',
                'type'=>'required|alpha',
                'brand'=>'required|alpha',
                'model'=>'required',
                'color'=>'required',
                'RAM'=>'required|numeric',
                'ROM'=>'required|numeric',
                'frontCrach_top'=>'nullable|boolean',
                'frontCrach_center'=>'nullable|boolean',
                'frontCrach_bottom'=>'nullable|boolean',
                'backCrach_top'=>'nullable|boolean',
                'backCrach_center'=>'nullable|boolean',
                'backCrach_bottom'=>'nullable|boolean',
                'devicePicture'=>'required|mimes:jpeg,jpg,png,gif|max:10000',
                'additional_info'=>'nullable|string|max:100',
            ]);
            if ($validator->fails()) {
                return $this->returnValidationError('E222',$validator);
            }

            $finder = 0;

            if (!is_null($request->serialNumber)) {
                if ($request->serialNumber != $report->serialNumber)
                {
                    $finder = Report::where('serialNumber',$request->serialNumber)->count();
                }
            }

            if ($finder == 0){
                $oldimage = $report->devicePicture;
                if(File::exists($oldimage)) {
                    File::delete($oldimage);
                }
                $now = Carbon::now();
                $destinationPath = public_path().'/images/devices/'.$now->year.'/'.'0'.$now->month.'/';
                $devicePhoto = $request->file('devicePicture');
                $name = $devicePhoto->getClientOriginalName();
                $deviceNewPhoto = Carbon::now()->format('His').$name;
                $devicePhoto->move($destinationPath,$deviceNewPhoto);
                $input['devicePicture'] = '/images/devices/'.$now->year.'/'.'0'.$now->month.'/'.$deviceNewPhoto;

                $report->update($input);
                return $this->returnSuccessMessage('Report Updated Successfully');
            }else{
                return $this->returnError('E102', 'Serial Reported Before .. Try Again!');
            }


        }else{
            return $this->returnError('E555', 'Authorization : You Cant Edit This Report');
        }

    }

    public function show($id)
    {

        $authUser = Auth::guard('user-api')->user();
        $report = Report::find($id);

        if (!is_null($report))
        {
            $result = new ReportResource($report);
            return $this->returnData('Data',$result);
        }else{
            return $this->returnError('E555', 'No Report Has #ID'.$id);
        }
    }

    public function destroy($id)
    {

        $authUser = Auth::guard('user-api')->user();
        $report = Report::find($id);

        if (empty($report))
        {
            return $this->returnError('E555', 'No Report Has #ID'.$id);
        }

        if ($report['user_id'] == $authUser->id)
        {
            $report->delete();
            return $this->returnSuccessMessage('Report Deleted Successfully');
        }else{
            return $this->returnError('E555', 'Authorization : You Cant Delete This Report');
        }

    }

    // all reviews for you reports (must be auth)
    public function allReviews()
    {

        $reviews = Review::with('storeOwner','report')
            ->whereHas('report', function($query) {
                $query->where('user_id', '=', Auth::guard('user-api')->user()->id);
            })->get();

        if (count($reviews))
        {
            $result = getReviews::collection($reviews);
            return $this->returnData('Data', $result);
        }else{
            return $this->returnError('E404','No Reviews for this user');
        }

    }

    // review for you report (must be auth)
    public function reportReview($id)
    {

        $access = Report::find($id);
        $authUser = Auth::guard('user-api')->user();
        if (empty($access))
        {
            return $this->returnError('E555', 'No Report Has #ID'.$id);
        }
        if (!is_null($access) && $access->user_id == $authUser->id)
        {
            $review = Review::with('storeOwner')->where('report_id',$id)->get();

            if (count($review) > 0)
            {
                $result = reportReview::collection($review);
                return $this->returnData('Data', $result );
            }else{
                return $this->returnError('E404','Sorry, it is still not reviewed');
            }
        }else{
            return $this->returnError('E555', 'Authorization : You Cant view This');
        }

    }

}
