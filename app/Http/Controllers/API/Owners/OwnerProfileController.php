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
                return $this->returnValidationError('E222',$validator);
            }

            $cheker = Hash::check($request->current_password, Auth::guard('owner-api')->user()->password);
            if ($cheker == true)
            {
                $owner = Owner::find(Auth::guard('owner-api')
                         ->user())->first()->update(['password'=> Hash::make($request->new_password)]);
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
            $owner = Owner::find(Auth::guard('owner-api')->user()->id);
            $validator =Validator::make($request->all() ,[
                'firstName' => 'required|regex:/^[\pL\s\-]+$/u' ,
                'lastName' => 'required|regex:/^[\pL\s\-]+$/u' ,
                'email' => 'required|email|unique:owners,email,'.$owner->id.'|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',
                'mobile' => 'required|regex:/^01[0125][0-9]{8}$/',
            ]);

            if ($validator->fails()) {
                return $this->returnValidationError('E222',$validator);
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

    public function updateStoreInfo(Request $request)
    {
        try {
            $owner = Owner::find(Auth::guard('owner-api')->user()->id);
            $validator =Validator::make($request->all() ,[
                // store Validation
                'storeName' => 'required|string' ,
                'government'=> 'required|string|max:30',
                'city'=> 'required|string|max:30',
                'street'=> 'required|string|max:30',
                'storeMobile_1'=> 'required|regex:/^01[0125][0-9]{8}$/',
                'storeMobile_2' => 'nullable|regex:/^01[0125][0-9]{8}$/' ,
                'facebookLink' => 'nullable|url|regex:/http(?:s):\/\/(?:www\.)facebook\.com\/.+/i',
                'whatsapp' => 'nullable|regex:/^01[0125][0-9]{8}$/'
            ]);

            $StoreData = $request->only([
                'storeName',
                'government',
                'city',
                'street',
                'storeMobile_1',
                'storeMobile_2',
                'facebookLink' ,
                'whatsapp'
            ]);
            if ($validator->fails()) {
                return $this->returnValidationError('E222',$validator);
            }
            $owner->store()->update($StoreData);

            return $this->returnSuccessMessage('Store Info Changed Successfuly','S111');
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
                'avatar'=>'nullable|mimes:jpeg,jpg,png,gif|max:10000',
            ]);

            if ($validator->fails()) {
                return $this->returnValidationError('E222',$validator);
            }

            $oldimage = public_path().Auth::guard('owner-api')->user()->avatar;
            if(Auth::guard('owner-api')->user()->avatar != '/assets/defult-user-avatar.jpg')
            {
                if(File::exists($oldimage)) {
                    File::delete($oldimage);
                }
            }

            if($request->avatar)
            {
                $now = Carbon::now();
                $destinationPath = public_path().'/images/avatars/owners/'.$now->year.'/'.'0'.$now->month.'/';
                $ownerPhoto = $request->file('avatar');
                $name = $ownerPhoto->getClientOriginalName();
                $ownerNewPhoto =Carbon::now()->format('His').$name;
                $ownerPhoto->move($destinationPath,$ownerNewPhoto);
                $newimage = '/images/avatars/owners/'.$now->year.'/'.'0'.$now->month.'/'.$ownerNewPhoto;
                Owner::find(Auth::guard('owner-api')->user()->id)->update([
                    'avatar'=> $newimage,
                ]);
                return $this->returnSuccessMessage('Avatar Changed Successfuly','S111');
            }else{
                $basicimage= '/assets/defult-user-avatar.jpg';
                Owner::find(Auth::guard('owner-api')->user()->id)->update([
                    'avatar'=> $basicimage,
                ]);
                return $this->returnSuccessMessage('Avatar Reseted Successfuly','S111');
            }

        } catch (\Exception $ex){
            return $this->returnError($ex->getCode(), $ex->getMessage());
        } catch (Throwable $e){
            return $this->returnError($e->getCode(), $e->getMessage());
        }

    }
}
