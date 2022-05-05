<?php

namespace App\Http\Controllers\API\Owners;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\OwnerProvider;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Validator;

class OwnerProfileController extends Controller
{
    use GeneralTrait;

    public function __construct()
    {
        $this->middleware('checkOwnerToken:owner-api');
    }

    public function changePassword(Request $request)
    {
        try {
            $validator =Validator::make($request->all() ,[
                'current_password' => ['required'],
                'new_password' => ['required'],
                'new_confirm_password' => ['same:new_password'],
            ]);

            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            }

            $cheker = Hash::check($request->current_password, Auth::guard('owner-api')->user()->password);
            if ($cheker == true)
            {
                $owner = Owner::find(Auth::guard('owner-api')->user())->first()->update(['password'=> Hash::make($request->new_password)]);
                return $this->returnSuccessMessage('password Changed Successfuly','S111');

            }else{
                return $this->returnError('E000', 'Current Password not true!');
            }
        }

        catch (\Exception $ex){
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }

        catch (Throwable $ex){
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }

    }

    public function updatePersonalInfo(Request $request)
    {
        try {
            $validator =Validator::make($request->all() ,[
                'firstName' => 'required|regex:/^[\pL\s\-]+$/u' ,
                'lastName' => 'required|regex:/^[\pL\s\-]+$/u' ,
                'email' => 'required|email|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/' ,
                'mobile' => 'required|regex:/^01[0125][0-9]{8}$/',
            ]);

            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            }
            Owner::find(Auth::guard('owner-api')->user()->id)->update([
                'firstName'=> $request['firstName'],
                'lastName'=> $request['lastName'],
                'email'=> $request['email'],
                'mobile'=> $request['mobile']
            ]);
            return $this->returnSuccessMessage('Personal Info Changed Successfuly','S111');
        }

        catch (\Exception $ex){
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }

        catch (Throwable $e){
            return $this->returnError($e->getCode(), $e->getMessage());
        }

    }

    public function updateAvatar(Request $request)
    {
        try {
            $validator =Validator::make($request->all() ,[
                'avatar'=>'sometimes|image:jpeg,jpg,png,gif|required|max:10000',
            ]);

            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            }
            if($request->avatar)
            {
                $oldimage = Auth::guard('owner-api')->user()->avatar;
                if(File::exists($oldimage)) {
                    File::delete($oldimage);
                }
                $now = Carbon::now();
                $owner_path= 'public/images/avatars/owners/'.$now->year.'/'.'0'.$now->month.'/';
                $ownerPhoto = $request->avatar;
                $ownerNewPhoto =Carbon::now()->format('His').$ownerPhoto->getClientOriginalName();
                $ownerPhoto->storeAs($owner_path,$ownerNewPhoto);
                $newimage = 'storage/images/avatars/owners/'.$now->year.'/'.'0'.$now->month.'/'.$ownerNewPhoto;
                Owner::find(Auth::guard('owner-api')->user()->id)->update([
                    'avatar'=> $newimage,
                ]);
                return $this->returnSuccessMessage('Avatar Changed Successfuly','S111');
            }else{
                $basicimage= 'storage/assets/defult-user-avatar.png';
                Owner::find(Auth::guard('owner-api')->user()->id)->update([
                    'avatar'=> $basicimage,
                ]);
            }

        } catch (\Exception $ex){
            return $this->returnError($ex->getCode(), $ex->getMessage());
        } catch (Throwable $e){
            return $this->returnError($e->getCode(), $e->getMessage());
        }

    }
}
