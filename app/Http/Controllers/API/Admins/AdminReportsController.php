<?php

namespace App\Http\Controllers\API\Admins;

use App\Http\Controllers\Controller;
use App\Http\Resources\Report as ReportResource;
use App\Models\Report;
use App\Http\Resources\UserWithoutToken as UserResource;
use App\Http\Resources\UserWithID;
use App\Http\Resources\UserWithCounter;
use App\Models\Admin;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminReportsController extends Controller
{

    use GeneralTrait;

    public function getReports()
    {

        $reports = ReportResource::collection(Report::all());
        if (count($reports) > 0)
        {
            return $this->returnData('Data', $reports , 'All Reports Sent Successfully');
        }else{
            return $this->returnError('E90002' , 'No Reports Founded In Database');
        }
    }

    public function getReport($id)
    {
        $report = Report::find($id);
        if (is_null($report)) {
            return $this->returnError('E90003' , 'Report #'.$id.' Not Founded In Database');
        }else{
            $result = new ReportResource($report);
            return $this->returnData('Data', $result , 'Report Sent Successfully');
        }
    }


    public function addReport(Request $request)
    {
        try {
            $validator = Validator::make($request->all() ,[
                'userID' => 'required',
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


            $user = User::find((int)$request->userID);
            if (is_null($user))
            {
                return $this->returnError('E404', 'User #'.$request->userID. ' Not Founded');
            }

            $finder = 0;
            if (!is_null($request->serialNumber)) {
                $finder = Report::where('serialNumber',$request->serialNumber)->count();
            }

            if ($finder  == 0){

                $now = Carbon::now();
                $destinationPath = public_path().'/images/devices/'.$now->year.'/'.'0'.$now->month.'/';
                $devicePhoto = $request->file('devicePicture');
                $name = $devicePhoto->getClientOriginalName();
                $deviceNewPhoto = Carbon::now()->format('His').$name;
                $devicePhoto->move($destinationPath,$deviceNewPhoto);
                $request['devicePicture'] = '/images/devices/'.$now->year.'/'.'0'.$now->month.'/'.$deviceNewPhoto;

                $user->report()->create($request->all());
                return $this->returnSuccessMessage('report created Successfully -> attached to: (User #'.$user->id.' '.$user->firstName.' '.$user->lastName.')');
            }else{
                return $this->returnError('E102', 'Serial Is reported once before');
            }
        }
        catch (\Exception $ex){
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
        catch (Throwable $e){
            return $this->returnError($e->getCode(), $e->getMessage());
        }
    }

    public function updateReport(Request $request, $id)
    {
        $report = Report::find($id);
        $input = $request->all();

        if (empty($report))
        {
            return $this->returnError('E555', 'No Report Has #ID '.$id);
        }
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
            if ($finder == 0)
            {
                $reportImage = public_path().$report->devicePicture;
                if(File::exists($reportImage)) {
                    File::delete($reportImage);
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
                return $this->returnError('E102', 'Serial Is reported once before');
            }
    }

    public function deleteReport($id)
    {
        $report = Report::find($id);
        if (empty($report))
        {
            return $this->returnError('E555', 'No Report Has #ID'.$id);
        }

        $reportImage = public_path().$report->devicePicture;
        if(File::exists($reportImage)) {
            File::delete($reportImage);
        }
        $report->delete();
        return $this->returnSuccessMessage('Report Deleted Successfully');
    }

}
