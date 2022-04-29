<?php

namespace App\Traits;

trait GeneralTrait
{
    // to return error message
    public function returnError($errNum, $msg)
    {
        return response()->json([
            'status' => false,
            'data' => NULL,
            'errNum' => $errNum,
            'msg' => $msg,
        ]);
    }

    // to return Success message
    public function returnSuccessMessage($msg = "", $errNum = "S777")
    {
        return response()->json([
            'status' => true,
            'errNum' => $errNum,
            'msg' => $msg
        ]);
    }

    // to return data
    public function returnData($key, $value, $msg = "")
    {
        return response()->json([
            'status' => true,
            'errNum' => "S777",
            'msg' => $msg,
            $key => $value
        ]);
    }

    // to return error of the validation
    public function returnValidationError($code = "E001", $validator)
    {
        return $this->returnError($code, $validator->errors()->first());
    }


    public function returnCodeAccordingToInput($validator)
    {
        $inputs = array_keys($validator->errors()->toArray());
        $code = $this->getErrorCode($inputs[0]);
        return $code;
    }

    public function getErrorCode($input)
    {
        if ($input == "name")
            return 'E0011';

        else if ($input == "password")
            return 'E002';
        else
            return "";
    }
}
