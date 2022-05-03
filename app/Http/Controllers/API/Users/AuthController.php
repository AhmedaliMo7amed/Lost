<?php

namespace App\Http\Controllers\API\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Resources\User as UserResource;
use Validator;
use Auth;

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
            $credentials = $request->only([
                'email',
                'password'
            ]);
            $token = Auth::guard('user-api')->attempt($credentials);
            if (!$token)
            {
                return $this->returnError('E001', 'Credentials Not Correct !');
            }
            $user = Auth::guard('user-api')->user();
            $user->token = $token;
            $myuser = new UserResource($user);
            return $this->returnData('Data', $myuser,'logged in successfully ( As User )');

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
        return $this->returnSuccessMessage('User Logged out successfully');
    }

}
