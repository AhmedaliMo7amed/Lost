<?php

namespace App\Http\Controllers\API\Owners;

use App\Http\Controllers\Controller;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Validator;
use App\Models\Owner;
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


    public function updatePassword(RequestHelper $request)
    {
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
        try {
            $email = DB::table('password_resets')->select('email')->where('token', $request->pinCode)->pluck('email');
            if (count($email) > 0 )
            {
                $owner = Owner::whereEmail($email)->first();
                $owner->update([
                    'password'=>bcrypt($request->password)
                ]);
                $this->getPinCode($request)->delete();
                return $this->returnSuccessMessage('Owner Password Changed Successfully');
            }else
            {
                return $this->returnError('E001', 'PIN Code Not Attached to any email ! check PIN Code');
            }
        }catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
    }

    private function getPinCode($request){
        return DB::table('password_resets')->where([
            'token' => $request->pinCode
        ]);
    }
}
