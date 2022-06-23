<?php

namespace App\Http\Controllers\API\Users;

use App\Http\Controllers\Controller;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Validator;

class UserProfileController extends Controller
{
    use GeneralTrait;
    public function __construct()
    {
        $this->middleware('checkUserToken:user-api');
    }

    public function changePassword(Request $request)
    {
        try {
            $validator =Validator::make($request->all() ,[
                'current_password' => ['required', new MatchOldPassword],
                'new_password' => 'required|min:6',
                'new_confirm_password' => 'same:new_password',
            ]);

            if ($validator->fails()) {
                return $this->returnValidationError('E222',$validator);
            }

            User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
            return $this->returnSuccessMessage('password Changed Successfuly','S111');
        }
        catch (\Exception $ex){
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
        catch (Throwable $e){
            return $this->returnError($e->getCode(), $e->getMessage());
        }

    }

    public function updatePersonalInfo(Request $request)
    {
        try {
            $user = User::find(Auth::guard('user-api')->user()->id);
            $validator =Validator::make($request->all() ,[
                'firstName' => 'required|regex:/^[\pL\s\-]+$/u' ,
                'lastName' => 'required|regex:/^[\pL\s\-]+$/u' ,
                'email' => 'required|email|unique:users,email,'.$user->id.'|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',
                'national_id' => 'required|regex:/^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$/',
            ]);

            if ($validator->fails()) {
                return $this->returnValidationError('E222',$validator);
            }

            User::find(Auth::guard('user-api')->user()->id)->update([
                'firstName'=> $request['firstName'],
                'lastName'=> $request['lastName'],
                'email'=> $request['email'],
                'national_id'=> $request['national_id']
            ]);
            return $this->returnSuccessMessage('Personal Info Changed Successfuly','S111');
        }

        catch (\Exception $ex){
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }

        catch (\Throwable $e){
            return $this->returnError($e->getCode(), $e->getMessage());
        }

    }

    public function updateContactInfo(Request $request)
    {
        try {
            $validator =Validator::make($request->all() ,[
                // Contact Info Validation
                'mobile_1'=> 'required|regex:/^01[0125][0-9]{8}$/',
                'mobile_2'=> 'nullable|regex:/^01[0125][0-9]{8}$/',
                'government'=> 'required|string|max:15',
                'city'=> 'required|string|max:15',
                'street'=> 'required|string|max:30',
                'facebookLink' => 'nullable|url|regex:/http(?:s):\/\/(?:www\.)facebook\.com\/.+/i',
                'whatsapp' => 'nullable|regex:/^01[0125][0-9]{8}$/',
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

            if ($validator->fails()) {
                return $this->returnValidationError('E222',$validator);
            }

            $user = User::find(Auth::guard('user-api')->user()->id);
            $user->contact()->update($ContactData);

            return $this->returnSuccessMessage('Contact Info Changed Successfuly','S111');
        }

        catch (\Exception $ex){
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }

        catch (\Throwable $e){
            return $this->returnError($e->getCode(), $e->getMessage());
        }

    }

    public function updateAvatar(Request $request)
    {
        try {
            $validator =Validator::make($request->all() ,[
                'avatar'=>'nullable|mimes:jpeg,jpg,png,gif|max:10000',
            ]);

            if ($validator->fails()) {
                return $this->returnValidationError('E222',$validator);
            }

            $oldimage = public_path().auth()->user()->avatar;
            if(auth()->user()->avatar != '/assets/defult-user-avatar.jpg')
            {
                if(File::exists($oldimage)) {
                    File::delete($oldimage);
                }
            }
            if($request->hasFile('avatar'))
            {
                $now = Carbon::now();
                $destinationPath = public_path().'/images/avatars/users/'.$now->year.'/'.'0'.$now->month.'/';
                $userPhoto = $request->file('avatar');
                $name = $userPhoto->getClientOriginalName();
                $userNewPhoto =Carbon::now()->format('His').$name;
                $userPhoto->move($destinationPath,$userNewPhoto);
                $newimage = '/images/avatars/users/'.$now->year.'/'.'0'.$now->month.'/'.$userNewPhoto;

                User::find(auth()->user()->id)->update([
                    'avatar'=> $newimage,
                ]);
                return $this->returnSuccessMessage('Avatar Changed Successfuly','S111');
            }else{
                $basicimage= '/assets/defult-user-avatar.jpg';
                User::find(auth()->user()->id)->update([
                    'avatar'=> $basicimage,
                ]);
                return $this->returnSuccessMessage('Avatar Reseted Successfuly','S111');
            }

        }

        catch (\Exception $ex){
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }

        catch (Throwable $e){
            return $this->returnError($e->getCode(), $e->getMessage());
        }

    }
}
