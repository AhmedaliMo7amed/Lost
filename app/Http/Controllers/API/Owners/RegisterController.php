<?php

namespace App\Http\Controllers\API\Owners;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use App\Models\StoreInfo;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;
use Auth;


class RegisterController extends Controller
{
    use GeneralTrait;

    public function register(Request $request)
    {

        $validator =Validator::make($request->all() ,[
            // owner Validation
            'firstName' => 'required|regex:/^[\pL\s\-]+$/u' ,
            'lastName' => 'required|regex:/^[\pL\s\-]+$/u' ,
            'email' => 'required|email|unique:owners,email|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/' ,
            'mobile' => 'required|regex:/^01[0125][0-9]{8}$/',
            'password' => 'required|min:6' ,
            'confirmPassword' => 'required|same:password' ,
            'avatar'=>'nullable|image:jpeg,jpg,png,gif|max:10000',

            // store Validation
            'storeName' => 'required|string' ,
            'government'=> 'required|string|max:15',
            'city'=> 'required|string|max:15',
            'street'=> 'required|string|max:30',
            'storeMobile_1'=> 'required|regex:/^01[0125][0-9]{8}$/',
            'storeMobile_2' => 'nullable|regex:/^01[0125][0-9]{8}$/' ,
            'facebookLink' => 'nullable|url|regex:/http(?:s):\/\/(?:www\.)facebook\.com\/.+/i',
            'whatsapp' => 'nullable|regex:/^01[0125][0-9]{8}$/'
        ]);

        if ($validator->fails()) {
            return $this->returnValidationError('E222',$validator);
        }
        $RegData = $request->only([
            'firstName',
            'lastName',
            'email',
            'mobile',
            'password' ,
            'avatar',
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
        // Hashing Owner Password
        $RegData['password'] = Hash::make($RegData['password']);
        // Saving User Picture in the public/images/avatars path (if founded)
        if($request->avatar)
        {
            $now = Carbon::now();
            $owner_path= 'public/images/avatars/owners/'.$now->year.'/'.'0'.$now->month.'/';
            $ownerPhoto = $request->avatar;
            $ownerNewPhoto =Carbon::now()->format('His').$ownerPhoto->getClientOriginalName();
            $ownerPhoto->storeAs($owner_path,$ownerNewPhoto);
            $RegData['avatar'] = 'storage/images/avatars/owners/'.$now->year.'/'.'0'.$now->month.'/'.$ownerNewPhoto;
        }
        // Create Owner Account
        $RegData['fullInfo'] = true;
        $owner = Owner::create($RegData);

        // generate token and get owner id for the auth owner
        $token = Auth::guard('owner-api')->attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ]);

        $owner->store()->create($StoreData);
        return $this->returnData('Token',$token,'Owner & Store Info Registerd Successfully');
    }

    public function completeSteps(Request $request)
    {
        $authOwner = Auth::guard('owner-api')->user();
        $selection = Owner::find($authOwner->id);

        if ($selection['fullInfo'] == false)
        {
            $validator =Validator::make($request->all() ,[

                // owner Validation
                'firstName' => 'required|regex:/^[\pL\s\-]+$/u' ,
                'lastName' => 'required|regex:/^[\pL\s\-]+$/u' ,
                'email' => 'required|email|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/' ,
                'mobile' => 'required|regex:/^01[0125][0-9]{8}$/',
                'password' => 'required|min:6' ,
                'confirmPassword' => 'required|same:password' ,
                'avatar'=>'nullable|image:jpeg,jpg,png,gif|max:10000',

                // store Validation
                'storeName' => 'required|string' ,
                'government'=> 'required|string|max:15',
                'city'=> 'required|string|max:15',
                'street'=> 'required|string|max:30',
                'storeMobile_1'=> 'required|regex:/^01[0125][0-9]{8}$/',
                'storeMobile_2' => 'nullable|regex:/^01[0125][0-9]{8}$/' ,
                'facebookLink' => 'nullable|url|regex:/http(?:s):\/\/(?:www\.)facebook\.com\/.+/i',
                'whatsapp' => 'nullable|regex:/^01[0125][0-9]{8}$/'
            ]);
            $RegData = $request->only([
                'firstName' ,
                'lastName' ,
                'email',
                'mobile',
                'password',
                'confirmPassword',
                'avatar' ,
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

            // Hashing Owner Password
            $RegData['password'] = Hash::make($RegData['password']);
            $RegData['fullInfo'] = true;
            $selection->update($RegData);

            // generate token and get owner id for the auth owner
            $token = Auth::guard('owner-api')->attempt([
                'email'=>$authOwner->email,
                'password'=>$request->password
            ]);
            $selection->store()->create($StoreData);
            return $this->returnData('Token',$token,'Owner & Store Info Completed Successfully');
        }else{
            return $this->returnSuccessMessage('Nothing to Complete');
        }
    }
}
