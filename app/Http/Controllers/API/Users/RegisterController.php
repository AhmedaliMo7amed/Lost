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
use App\Http\Resources\User as UserResource;


class RegisterController extends Controller
{
    use GeneralTrait;

    public function register(Request $request)
    {
        $validator =Validator::make($request->all() ,[

            // User Validation
            'firstName' => 'required|regex:/^[\pL\s\-]+$/u' ,
            'lastName' => 'required|regex:/^[\pL\s\-]+$/u' ,
            'email' => 'required|email|unique:users,email|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/' ,
            'national_id' => 'required|regex:/^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$/',
            'password' => 'required|min:6' ,
            'confirmPassword' => 'required|same:password' ,
            'avatar'=>'nullable|image:jpeg,jpg,png,gif|max:10000',

            // Contact Info Validation
            'mobile_1'=> 'required|regex:/^01[0125][0-9]{8}$/',
            'mobile_2'=> 'nullable|regex:/^01[0125][0-9]{8}$/',
            'government'=> 'required|string|max:30',
            'city'=> 'required|string|max:30',
            'street'=> 'required|string|max:30',
            'facebookLink' => 'nullable|url|regex:/http(?:s):\/\/(?:www\.)facebook\.com\/.+/i',
            'whatsapp' => 'nullable|regex:/^01[0125][0-9]{8}$/',

            // // First Device Validation
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
        }
        try {
                $serial = null;
                if(!empty($request->serialNumber)){
                    $serial = Report::where('serialNumber',$ReportData['serialNumber'])->first();
                }

                if (is_null($serial))
                {
                        $now = Carbon::now();
                        $destinationPath = public_path().'/images/devices/'.$now->year.'/'.'0'.$now->month.'/';
                        $devicePhoto = $request->file('devicePicture');
                        $name = $devicePhoto->getClientOriginalName();
                        $deviceNewPhoto = Carbon::now()->format('His').$name;
                        $devicePhoto->move($destinationPath,$deviceNewPhoto);
                        $ReportData['devicePicture'] = '/images/devices/'.$now->year.'/'.'0'.$now->month.'/'.$deviceNewPhoto;

                    // Saving User Picture in the public/images/avatars path (if founded)
                        if ($request->hasFile('avatar'))
                        {
                            $now = Carbon::now();
                            $destinationPath = public_path().'/images/avatars/users/'.$now->year.'/'.'0'.$now->month.'/';
                            $userPhoto = $request->file('avatar');
                            $name = $userPhoto->getClientOriginalName();
                            $userNewPhoto =Carbon::now()->format('His').$name;
                            $userPhoto->move($destinationPath,$userNewPhoto);
                            $RegData['avatar'] = '/images/avatars/users/'.$now->year.'/'.'0'.$now->month.'/'.$userNewPhoto;
                        }else{
                            $RegData['avatar'] = '/assets/defult-user-avatar.jpg';
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

                    $user->token = $token;
                    $result = new UserResource($user);
                    return $this->returnData('Data',$result,'User & Info & Report Registerd Successfully');
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

    public function completeSteps(Request $request)
    {
        $authUser = Auth::guard('user-api')->user();
        $selection = User::find($authUser->id);

        if ($selection['fullInfo'] == false)
        {
            $validator =Validator::make($request->all() ,[

                // User Validation
                'firstName' => 'required|regex:/^[\pL\s\-]+$/u' ,
                'lastName' => 'required|regex:/^[\pL\s\-]+$/u' ,
                'email' => 'required|email|unique:users,email,'.$selection->id.'|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',
                'national_id' => 'required|regex:/^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$/',
                'password' => 'required|min:6' ,
                'confirmPassword' => 'required|same:password' ,
                'avatar'=>'nullable|image:jpeg,jpg,png,gif|max:10000',

                // Contact Info Validation
                'mobile_1'=> 'required|regex:/^01[0125][0-9]{8}$/',
                'mobile_2'=> 'nullable|regex:/^01[0125][0-9]{8}$/',
                'government'=> 'required|string|max:30',
                'city'=> 'required|string|max:30',
                'street'=> 'required|string|max:30',
                'facebookLink' => 'nullable|url|regex:/http(?:s):\/\/(?:www\.)facebook\.com\/.+/i',
                'whatsapp' => 'nullable|regex:/^01[0125][0-9]{8}$/',

                // // First Device Validation
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
            $RegData = $request->only([
                'firstName' ,
                'lastName'  ,
                'email',
                'national_id',
                'password',
                'confirmPassword' ,
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
                }

                try {
                    $serial = null;
                    if(!empty($request->serialNumber)){
                        $serial = Report::where('serialNumber',$ReportData['serialNumber'])->first();
                    }

                    if (is_null($serial))
                    {
                        $now = Carbon::now();
                        $destinationPath = public_path().'/images/devices/'.$now->year.'/'.'0'.$now->month.'/';
                        $devicePhoto = $request->file('devicePicture');
                        $name = $devicePhoto->getClientOriginalName();
                        $deviceNewPhoto = Carbon::now()->format('His').$name;
                        $devicePhoto->move($destinationPath,$deviceNewPhoto);
                        $ReportData['devicePicture'] = '/images/devices/'.$now->year.'/'.'0'.$now->month.'/'.$deviceNewPhoto;

                        // Saving User Picture in the public/images/avatars path (if founded)
                        if($request->hasFile('avatar'))
                        {
                            $now = Carbon::now();
                            $destinationPath = public_path().'/images/avatars/users/'.$now->year.'/'.'0'.$now->month.'/';
                            $userPhoto = $request->file('avatar');
                            $name = $userPhoto->getClientOriginalName();
                            $userNewPhoto =Carbon::now()->format('His').$name;
                            $userPhoto->move($destinationPath,$userNewPhoto);
                            $RegData['avatar'] = '/images/avatars/users/'.$now->year.'/'.'0'.$now->month.'/'.$userNewPhoto;
                        }else{
                            $RegData['avatar'] = '/assets/defult-user-avatar.jpg';
                        }

                        // Hashing User Password
                        $RegData['password'] = Hash::make($RegData['password']);
                        // Create User
                        $RegData['fullInfo'] = true;

                        $selection->update($RegData);
                        // generate token and get user id for the auth user

                        $token = Auth::guard('user-api')->attempt([
                            'email' =>$authUser->email,
                            'password' =>$request->password
                        ]);

                        // Create Contact Informations for the registerd User
                        $selection->contact()->create($ContactData);
                        // Create first Report for the registerd User
                        $selection->report()->create($ReportData);

                        $selection->token = $token;
                        $result = new UserResource($selection);
                        return $this->returnData('Data',$result,'User & Info & Report Completed Successfully');
                    }else{
                        return $this->returnError('E888', 'Serial Reported Before ! try again');
                    }
                }catch (\Exception $ex){
                    return $this->returnError($ex->getCode(), $ex->getMessage());
                }catch (\Throwable $e){
                    return $this->returnError($e->getCode(), $e->getMessage());
                }

        }else{
            return $this->returnSuccessMessage('Nothing to Complete');
        }
    }
}
