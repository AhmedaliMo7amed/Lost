<?php

namespace App\Http\Controllers\API\Users;

use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\User;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;
use Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class RegisterController extends Controller
{
    use GeneralTrait;

    public function register(Request $request)
    {

        $validator =Validator::make($request->all() ,[

            // User Validation
            'firstName' => 'required|alpha' ,
            'lastName' => 'required|alpha' ,
            'email' => 'required|email|unique:users,email|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/' ,
            'national_id' => 'required|regex:/^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$/',
            'password' => 'required|min:6' ,
            'confirmPassword' => 'required|same:password' ,
            'avatar'=>'sometimes|nullable|image:jpeg,jpg,png,gif|required|max:10000',

            // Contact Info Validation
            'mobile_1'=> 'required|regex:/^01[0125][0-9]{8}$/',
            'mobile_2'=> 'sometimes|nullable|regex:/^01[0125][0-9]{8}$/',
            'government'=> 'required|nullable|string|max:15',
            'city'=> 'required|nullable|string|max:15',
            'street'=> 'required|nullable|string|max:30',
            'facebookLink' => 'sometimes|nullable|url|regex:/http(?:s):\/\/(?:www\.)facebook\.com\/.+/i',
            'whatsapp' => 'sometimes|nullable|regex:/^01[0125][0-9]{8}$/',

            // First Device Validation
            'serialNumber'=>'sometimes|nullable|regex:/^\d{15,17}$/',
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
            'devicePicture'=>'required|mimes:jpeg,jpg,png,gif|max:10000',
            'additional_info'=>'sometimes|nullable|string|max:100',
        ]);
        $RegData = $request->only([
            'firstName',
            'lastName',
            'email',
            'national_id',
            'password' ,
            'confirmPassword',
            'avatar'
        ]);
        $ContactData = $request->only([
            'mobile_1',
            'mobile_2',
            'government',
            'city',
            'street',
            'facebookLink' ,
            'whatsapp'
        ]);
        $ReportData = $request->only([
            'serialNumber',
            'type',
            'brand',
            'model',
            'color',
            'RAM',
            'ROM',
            'frontCrach_top',
            'frontCrach_center',
            'frontCrach_bottom',
            'backCrach_top',
            'backCrach_center',
            'backCrach_bottom',
            'devicePicture',
            'additional_info',
        ]);

        if ($validator->fails()) {
            return $this->returnValidationError('E222',$validator);
        } else {
            try {

                $serial = Report::where('serialNumber',$ReportData['serialNumber'])->first();

                if (is_null($serial))
                {
                    // Saving Device Picture in the images/devices path
                    if ($request->hasFile('devicePicture'))
                    {
                        $now = Carbon::now();
                        $device_path= 'public/images/devices/'.$now->year.'/'.'0'.$now->month.'/';
                        $devicePhoto = $request->file('devicePicture');
                        $deviceNewPhoto = Carbon::now()->format('His').$devicePhoto->getClientOriginalName();
                        $devicePhoto->storeAs($device_path,$deviceNewPhoto);
                        $ReportData['devicePicture'] = 'storage/images/devices/'.$now->year.'/'.'0'.$now->month.'/'.$deviceNewPhoto;
                    }else{
                        return $this->returnError('E444','Device picture must be included');
                    }

                    // Saving User Picture in the public/images/avatars path (if founded)
                    if($request->avatar)
                    {
                        $now = Carbon::now();
                        $path= 'public/images/avatars/users/'.$now->year.'/'.'0'.$now->month.'/';
                        $userPhoto = $request->avatar;
                        $userNewPhoto =Carbon::now()->format('His').$userPhoto->getClientOriginalName();
                        $userPhoto->storeAs($path,$userNewPhoto);
                        $RegData['avatar'] = 'storage/images/avatars/users/'.$now->year.'/'.'0'.$now->month.'/'.$userNewPhoto;
                    }

                    $RegData['fullInfo'] = true;
                    // Hashing User Password
                    $RegData['password'] = Hash::make($RegData['password']);
                    // Create User
                    $user = User::create($RegData);

                    // generate token and get user id for the auth user
                    $token = Auth::guard('user-api')->attempt([
                        'email'=>$request->email,
                        'password'=>$request->password
                    ]);

                    // Create Contact Informations for the registerd User
                    $user->contact()->create($ContactData);
                    // Create first Report for the registerd User
                    $user->report()->create($ReportData);
                    return $this->returnData('Token',$token,'User & Info & Report Registerd Successfully');
                }else{
                    return $this->returnError('E444','Serial Number Is Reported Before');
                }
            }catch (\Throwable $e){
                return $this->returnError($e->getCode(), $e->getMessage());
            }
            catch (\Exception $ex){
                return $this->returnError($ex->getCode(), $ex->getMessage());
            }

        }
    }

    public function completeSteps(Request $request)
    {
        $authUser = Auth::guard('user-api')->user();
        $selection = User::find($authUser->id);

        if ($authUser['fullInfo'] == false)
        {
            $validator =Validator::make($request->all() ,[

                // User Validation
                'firstName' => 'sometimes|alpha' ,
                'lastName' => 'sometimes|alpha' ,
                'national_id' => 'required|regex:/^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$/',
                'password' => 'required|min:6' ,
                'confirmPassword' => 'required|same:password' ,

                // Contact Info Validation
                'mobile_1'=> 'required|regex:/^01[0125][0-9]{8}$/',
                'mobile_2'=> 'sometimes|nullable|regex:/^01[0125][0-9]{8}$/',
                'government'=> 'required|nullable|string|max:15',
                'city'=> 'required|nullable|string|max:15',
                'street'=> 'required|nullable|string|max:30',
                'facebookLink' => 'sometimes|url|regex:/http(?:s):\/\/(?:www\.)facebook\.com\/.+/i',
                'whatsapp' => 'sometimes|regex:/^01[0125][0-9]{8}$/',

                // First Device Validation
                'serialNumber'=>'sometimes|nullable|regex:/^\d{15,17}$/',
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
                'devicePicture'=>'required|mimes:jpeg,jpg,png,gif|max:10000',
                'additional_info'=>'sometimes|nullable|string|max:100',
            ]);
            $RegData = $request->only([
                'firstName',
                'lastName',
                'national_id',
                'password' ,
            ]);
            $ContactData = $request->only([
                'mobile_1',
                'mobile_2',
                'government',
                'city',
                'street',
                'facebookLink' ,
                'whatsapp'
            ]);
            $ReportData = $request->only([
                'serialNumber',
                'type',
                'brand',
                'model',
                'color',
                'RAM',
                'ROM',
                'frontCrach_top',
                'frontCrach_center',
                'frontCrach_bottom',
                'backCrach_top',
                'backCrach_center',
                'backCrach_bottom',
                'devicePicture',
                'additional_info',
            ]);
            if ($validator->fails()) {
                return $this->returnValidationError('E222',$validator);
            }else{
                try {
                    $serial = Report::where('serialNumber',$ReportData['serialNumber'])->first();

                    if (is_null($serial))
                    {
                        if ($request->hasFile('devicePicture'))
                        {
                            $now = Carbon::now();
                            $device_path= 'public/images/devices/'.$now->year.'/'.'0'.$now->month.'/';
                            $devicePhoto = $request->file('devicePicture');
                            $deviceNewPhoto = Carbon::now()->format('His').$devicePhoto->getClientOriginalName();
                            $devicePhoto->storeAs($device_path,$deviceNewPhoto);
                            $ReportData['devicePicture'] = 'storage/images/devices/'.$now->year.'/'.'0'.$now->month.'/'.$deviceNewPhoto;

                        }else{
                            return $this->returnError('E444','Device Picture Must Be Included');
                        }
                        // Saving User Picture in the public/images/avatars path (if founded)
                        if($request->avatar)
                        {
                            $now = Carbon::now();
                            $path= 'public/images/avatars/users/'.$now->year.'/'.'0'.$now->month.'/';
                            $userPhoto = $request->avatar;
                            $userNewPhoto =Carbon::now()->format('His').$userPhoto->getClientOriginalName();
                            $userPhoto->storeAs($path,$userNewPhoto);
                            $RegData['avatar'] = 'storage/images/avatars/users/'.$now->year.'/'.'0'.$now->month.'/'.$userNewPhoto;
                        }

                        // Hashing User Password
                        $RegData['password'] = Hash::make($RegData['password']);
                        // Create User
                        $RegData['fullInfo'] = true;

                        $selection->update($RegData);
                        // generate token and get user id for the auth user
                        $token = Auth::guard('user-api')->attempt([
                            'email'=>$authUser->email,
                            'password'=>$request->password
                        ]);
                        // Create Contact Informations for the registerd User
                        $selection->contact()->create($ContactData);

                        // Create first Report for the registerd User
                        $selection->report()->create($ReportData);

                        return $this->returnData('Token',$token,'User & Info & Report Completed Successfully');
                    }
                }catch (\Exception $ex){
                    return $this->returnError($ex->getCode(), $ex->getMessage());
                }catch (\Throwable $e){
                    return $this->returnError($e->getCode(), $e->getMessage());
                }
            }
        }else{
            return $this->returnSuccessMessage('Nothing to Complete');
        }
    }
}
