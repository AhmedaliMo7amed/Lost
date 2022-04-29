<?php

namespace App\Http\Controllers\API\Admins;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use App\Http\Resources\Admin as AdminResource;
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
                "username" => "required",
                "password" => "required"
            ];
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            }

            //login
            $credentials = $request->only(['username', 'password']);
            $token = Auth::guard('admin-api')->attempt($credentials);
            if (!$token)
                return $this->returnError('E001', 'Credentials Not Correct !');

            $admin = Auth::guard('admin-api')->user();
            $admin->token = $token;
            $myadmin = new AdminResource($admin);
            return $this->returnData('Data', $myadmin,'logged in successfully(As Adminstrator)');

        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }

    }

    public function logout(Request $request)
    {
        try {
            JWTAuth::invalidate(); //logout
        }
        catch (\exception $ex){
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
        return $this->returnSuccessMessage('Admin Logged out successfully');

    }

}
