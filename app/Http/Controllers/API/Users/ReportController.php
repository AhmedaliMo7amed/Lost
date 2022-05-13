<?php

namespace App\Http\Controllers\API\Users;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
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
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Report as ReportResource;
use App\Http\Resources\Contact as ContactResource;
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
                'serialNumber'=>'sometimes|regex:/^\d{15,17}$/',
                'type'=>'required|alpha',
                'brand'=>'required|alpha',
                'model'=>'required',
                'color'=>'required',
                'RAM'=>'required|numeric',
                'ROM'=>'required|numeric',
                'frontCrach_top'=>'sometimes|nullable|boolean',
                'frontCrach_center'=>'sometimes|nullable|boolean',
                'frontCrach_bottom'=>'sometimes|nullable|boolean',
                'backCrach_top'=>'sometimes|nullable|boolean',
                'backCrach_center'=>'sometimes|nullable|boolean',
                'backCrach_bottom'=>'sometimes|nullable|boolean',
                'devicePicture'=>'required|mimes:jpeg,jpg,png,gif|required|max:10000',
                'additional_info'=>'sometimes|nullable|string|max:100',
            ]);
            if ($validator->fails()) {
                return $this->returnError('E147', $validator->errors()->first());
            }

            $checker = $input['serialNumber'];
            $finder = Report::where('serialNumber',$checker)->count();

            if ($finder < 1){

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
            }else{
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
            return $this->returnData('data',$result);
        }else{
            return $this->returnError('E404','report Not found');
        }
    }

    public function destroy($id)
    {

        $authUser = Auth::guard('user-api')->user();
        $report = Report::find($id);
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
            return $this->returnData('reviews', $result);
        }else{
            return $this->returnError('E404','No Reviews for this user');
        }

    }

    // review for you report (must be auth)
    public function reportReview($id)
    {

        $access = Report::find($id);
        $authUser = Auth::guard('user-api')->user();
        if (is_null($access))
        {
            return $this->returnError('E555', 'Report not founded');
        }
        if (!is_null($access) && $access->user_id == $authUser->id)
        {
            $review = Review::with('storeOwner')->where('report_id',$id)->first();

            if (!is_null($review))
            {
                $result = new reportReview($review);
                return $this->returnData('review', $result );
            }else{
                return $this->returnError('E404','Sorry, it is still not reviewed');
            }
        }else{
            return $this->returnError('E555', 'Authorization : You Cant view This');
        }

    }

}
