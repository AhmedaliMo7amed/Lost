<?php

namespace App\Http\Controllers\API\Admins;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserWithoutToken as UserResource;
use App\Http\Resources\UserWithID;
use App\Http\Resources\UserWithCounter;
use App\Models\Admin;
use App\Models\Owner;
use App\Models\Report;
use App\Models\Review;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Counters;

class AdminController extends Controller
{

    use GeneralTrait;

    public function counters()
    {

        $users = User::all()->count();
        $owners = Owner::all()->count();
        $reports = Report::all()->count();
        $reviews = Review::all()->count();

        $data = [
            'users' => $users,
            'owners' => $owners,
            'reports' => $reports,
            'reviews'=> $reviews,
        ];

        return $this->returnData('Data',$data,'All Counters Sended Successfully');

    }


}
