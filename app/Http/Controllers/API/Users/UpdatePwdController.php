<?php

namespace App\Http\Controllers\API\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RequestHelper;


class UpdatePwdController extends Controller
{
    use GeneralTrait;

    public function confirmToken(Request $request)
    {
        $pinChecker = DB::table('password_resets')->where([
            'token' => $request->pinCode
        ]);
        if ($pinChecker->count()>0)
        {
            return $this->returnSuccessMessage('PIN Code is Valid','S777');
        }else {
            return $this->returnError('E404','PIN Code Not Found');
        }
    }

    public function updatePassword(RequestHelper $request){
        $validator =Validator::make($request->all() ,[
            'password' => 'required|min:6' ,
            'confirmPassword' => 'required|same:password' ,
            'pinCode' => 'required' ,
        ]);

        if ($validator->fails()) {
            return $this->returnValidationError('E222',$validator);
        }else {
             return  $this->changePassword($request) ;
        }
    }

    private function changePassword($request) {
        $email = DB::table('password_resets')->select('email')->where('token', $request->pinCode)->pluck('email');
        $user = User::whereEmail($email)->first();
        $user->update([
            'password'=>bcrypt($request->password)
        ]);
        $this->getPinCode($request)->delete();
        return $this->returnSuccessMessage('User Password Changed Successfully');
    }

    private function getPinCode($request){
        return DB::table('password_resets')->where([
            'token' => $request->pinCode
        ]);
    }

}
