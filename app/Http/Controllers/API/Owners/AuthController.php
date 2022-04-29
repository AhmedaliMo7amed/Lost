<?php

namespace App\Http\Controllers\API\Owners;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use App\Http\Resources\Owner as OwnerResource;
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
                "email" => "required",
                "password" => "required"
            ];
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            }

            //login
            $credentials = $request->only(['email', 'password']);
            $token = Auth::guard('owner-api')->attempt($credentials);
            if (!$token)
                return $this->returnError('E001', 'Credentials Not Correct !');
//            $owner->api_token = $token;
//            $result = new OwnerResource($owner);
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

}
