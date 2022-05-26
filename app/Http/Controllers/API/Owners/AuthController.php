<?php

namespace App\Http\Controllers\API\Owners;

use App\Http\Controllers\Controller;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use App\Http\Resources\Owner as OwnerResource;
use App\Http\Resources\OwnerRevResource;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use GeneralTrait;

    public function login(Request $request)
    {

        try {
            // Validation
            $rules = [
                'email' => 'required|email|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/' ,
                "password" => "required"
            ];
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return $this->returnValidationError('E222',$validator);
            }
            //login
            $credentials = $request->only(['email', 'password']);
            $token = Auth::guard('owner-api')->attempt($credentials);
            if (!$token)
                return $this->returnError('E001', 'Credentials Not Correct !');
            $owner = Auth::guard('owner-api')->user();
            $owner->token = $token;
            $myowner = new OwnerResource($owner);
            return $this->returnData('Data', $myowner,'logged in successfully(As Store Owner)');

        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }

    }

    public function logout(Request $request)
    {
            try {
                JWTAuth::invalidate(); //logout
            }
            catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $ex){
                return $this->returnError($ex->getCode(), $ex->getMessage());
            }
            return $this->returnSuccessMessage('Owner Logged out successfully');


    }

    public function getAuthInfo()
    {

        try {
            $owner = Auth::guard('owner-api')->user();
            $myowner = new OwnerRevResource($owner);
            return $this->returnData('Data', $myowner,'Owner Info send successfully');
        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }

    }
}
