<?php

namespace App\Http\Controllers\API\Owners;

use App\Http\Controllers\Controller;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Models\Owner;
use App\Mail\SendMail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;

class ResetPwdReqController extends Controller
{
    use GeneralTrait;


    // check email validation the passing it to th next function
    public function reqForgotPassword(Request $request)
    {
        if(!$this->validEmail($request->email)) {
            return $this->returnError('E404','Owner Email not found');
        } else {
            $this->sendEmail($request->email);
            return $this->returnSuccessMessage('Owner Password reset PIN Code has been sent to '. $request->email , 'S111');
        }
    }

    public function validEmail($email) {
        return Owner::where('email', $email)->first();
    }

    public function sendEmail($email){
        $token = $this->createToken($email);
        //$url = 'http://127.0.0.1:8000/api/store-owner/update-password?requestID=';
        Mail::to($email)->send(new SendMail(/*$url,*/$token));
    }

    // Create Token Function
    public function createToken($email){
        // if already have token in password_resets table
        $isToken = DB::table('password_resets')->where('email', $email)->first();
        if($isToken) {
            return $isToken->token;
        }
        $token = substr(str_shuffle("0123456789"), 0, 9);
        $this->saveToken($token, $email);
        return $token;
    }

    // Insert and save token Temporarily in password_resets table
    public function saveToken($token, $email){
        DB::table('password_resets')->insert([
            'email' => $email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
    }

}
