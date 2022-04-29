<?php

namespace App\Rules;

use App\Traits\GeneralTrait;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use function auth;

class MatchOldPassword implements Rule
{
    use GeneralTrait;

    public function __construct()
    {
        //
    }


    public function passes($attribute, $value)
    {
        return Hash::check($value, auth()->user()->password);
    }

    public function message()
    {
        return $this->returnError('404' , 'Password Not Correct !');
    }
}
