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
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
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
            $validator =Validator::make($request->all() ,[
                'firstName' => 'required|regex:/^[\pL\s\-]+$/u' ,
                'lastName' => 'required|regex:/^[\pL\s\-]+$/u' ,
                'email' => 'required|email|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/' ,
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

    public function updateAvatar(Request $request)
    {
        try {
            $validator =Validator::make($request->all() ,[
                'avatar'=>'nullable|mimes:jpeg,jpg,png,gif|required|max:10000',
            ]);

            if ($validator->fails()) {
                return $this->returnValidationError('E222',$validator);
            }

            if($request->hasFile('avatar'))
            {
                $oldimage = auth()->user()->avatar;
                if(File::exists($oldimage)) {
                    File::delete($oldimage);
                }
                $now = Carbon::now();
                $destinationPath = public_path().'/images/avatars/users/'.$now->year.'/'.'0'.$now->month.'/';
                $userPhoto = $request->file('avatar');
                $name = $userPhoto->getClientOriginalName();
                $userNewPhoto =Carbon::now()->format('His').$name;
                $userPhoto->move($destinationPath,$userNewPhoto);
                $newimage = 'images/avatars/users/'.$now->year.'/'.'0'.$now->month.'/'.$userNewPhoto;

                User::find(auth()->user()->id)->update([
                    'avatar'=> $newimage,
                ]);
                return $this->returnSuccessMessage('Avatar Changed Successfuly','S111');
            }else{
                $basicimage= 'assets/defult-user-avatar.jpg';
                User::find(auth()->user()->id)->update([
                    'avatar'=> $basicimage,
                ]);
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
