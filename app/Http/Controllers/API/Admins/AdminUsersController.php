<?php

namespace App\Http\Controllers\API\Admins;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserWithoutToken as UserResource;
use App\Http\Resources\UserWithID;
use App\Http\Resources\UserWithCounter;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminUsersController extends Controller
{


    use GeneralTrait;

    public function getUsers()
    {

        $users = UserResource::collection(User::all());
        if (count($users) > 0)
        {
            return $this->returnData('Data', $users , 'All Users Sent Successfully');
        }else{
            return $this->returnError('E90002' , 'No Users Founded In Database');
        }
    }

    public function usersList()
    {

        $users = UserWithID::collection(User::all());
        if (count($users) > 0)
        {
            return $this->returnData('Data', $users , 'All Users Sent Successfully');
        }else{
            return $this->returnError('E90002' , 'No Users Founded In Database');
        }
    }

    public function getUser($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return $this->returnError('E90003' , 'User #'.$id.' Not Founded In Database');
        }else{
            $result = new UserResource($user);
            return $this->returnData('Data', $result , 'User Sent Successfully');
        }
    }

    public function addUser(Request $request)
    {
        try {
            $validator =Validator::make($request->all() ,[
                // User Validation
                'firstName' => 'required|alpha' ,
                'lastName' => 'required|alpha' ,
                'email' => 'required|email|unique:users,email|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',
                'national_id' => 'required|regex:/^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$/',
                'password' => 'required|min:6' ,
                'confirmPassword' => 'required|same:password' ,
                'avatar'=>'nullable|image:jpeg,jpg,png,gif|max:10000',

                // Contact Info Validation
                'mobile_1'=> 'required|regex:/^01[0125][0-9]{8}$/',
                'mobile_2'=> 'nullable|regex:/^01[0125][0-9]{8}$/',
                'government'=> 'required|string|max:30',
                'city'=> 'required|string|max:30',
                'street'=> 'required|string|max:30',
                'facebookLink' => 'nullable|url|regex:/http(?:s):\/\/(?:www\.)facebook\.com\/.+/i',
                'whatsapp' => 'nullable|regex:/^01[0125][0-9]{8}$/',

            ]);

            $RegData = $request->only([
                'firstName',
                'lastName',
                'email',
                'national_id',
                'password' ,
                'confirmPassword',
                'avatar'
            ]);
            $ContactData = $request->only([
                'mobile_1',
                'mobile_2',
                'government',
                'city',
                'street',
                'facebookLink' ,
                'whatsapp'
            ]);

            if ($validator->fails()) {
                return $this->returnValidationError('E222',$validator);
            }

            // Saving User Picture in the public/images/avatars path (if founded)
            if ($request->hasFile('avatar'))
            {
                $now = Carbon::now();
                $destinationPath = public_path().'/images/avatars/users/'.$now->year.'/'.'0'.$now->month.'/';
                $userPhoto = $request->file('avatar');
                $name = $userPhoto->getClientOriginalName();
                $userNewPhoto =Carbon::now()->format('His').$name;
                $userPhoto->move($destinationPath,$userNewPhoto);
                $RegData['avatar'] = '/images/avatars/users/'.$now->year.'/'.'0'.$now->month.'/'.$userNewPhoto;
            }else{
                $RegData['avatar'] = '/assets/defult-user-avatar.jpg';
            }
            $RegData['password'] = Hash::make($RegData['password']);
            $RegData['fullInfo'] = true;

            $user = User::create($RegData);
            $user->contact()->create($ContactData);
            return $this->returnSuccessMessage('User Created Successfully','S111');
        }

        catch (\Exception $ex){
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }

        catch (Throwable $e){
            return $this->returnError($e->getCode(), $e->getMessage());
        }

    }


    public function updateUser($id , Request $request)
    {
        $user = User::find($id);
        if (!is_null($user))
        {
            try {
                $validator =Validator::make($request->all() ,[
                    // User Validation
                    'firstName' => 'required|alpha' ,
                    'lastName' => 'required|alpha' ,
                    'email' => 'required|email|unique:users,email,'.$user->id.'|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',
                    'national_id' => 'required|regex:/^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$/',
                    'password' => 'required|min:6' ,
                    'confirmPassword' => 'required|same:password' ,
                    'avatar'=>'nullable|image:jpeg,jpg,png,gif|max:10000',

                    // Contact Info Validation
                    'mobile_1'=> 'required|regex:/^01[0125][0-9]{8}$/',
                    'mobile_2'=> 'nullable|regex:/^01[0125][0-9]{8}$/',
                    'government'=> 'required|string|max:30',
                    'city'=> 'required|string|max:30',
                    'street'=> 'required|string|max:30',
                    'facebookLink' => 'nullable|url|regex:/http(?:s):\/\/(?:www\.)facebook\.com\/.+/i',
                    'whatsapp' => 'nullable|regex:/^01[0125][0-9]{8}$/',

                ]);

                $RegData = $request->only([
                    'firstName',
                    'lastName',
                    'email',
                    'national_id',
                    'password' ,
                    'confirmPassword',
                    'avatar'
                ]);
                $ContactData = $request->only([
                    'mobile_1',
                    'mobile_2',
                    'government',
                    'city',
                    'street',
                    'facebookLink' ,
                    'whatsapp'
                ]);

                if ($validator->fails()) {
                    return $this->returnValidationError('E222',$validator);
                }

                // Saving User Picture in the public/images/avatars path (if founded)
                if ($request->hasFile('avatar'))
                {
                    $oldimage = public_path().$user->avatar;
                    if($user->avatar != '/assets/defult-user-avatar.jpg')
                    {
                        if(File::exists($oldimage)) {
                            File::delete($oldimage);
                        }
                    }
                    $now = Carbon::now();
                    $destinationPath = public_path().'/images/avatars/users/'.$now->year.'/'.'0'.$now->month.'/';
                    $userPhoto = $request->file('avatar');
                    $name = $userPhoto->getClientOriginalName();
                    $userNewPhoto =Carbon::now()->format('His').$name;
                    $userPhoto->move($destinationPath,$userNewPhoto);
                    $RegData['avatar'] = '/images/avatars/users/'.$now->year.'/'.'0'.$now->month.'/'.$userNewPhoto;
                }else{
                    $RegData['avatar'] = '/assets/defult-user-avatar.jpg';
                }
                $RegData['password'] = Hash::make($RegData['password']);

                $user->update($RegData);
                $user->contact()->update($ContactData);
                return $this->returnSuccessMessage('User Updated Successfully','S111');
            }

            catch (\Exception $ex){
                return $this->returnError($ex->getCode(), $ex->getMessage());
            }

            catch (Throwable $e){
                return $this->returnError($e->getCode(), $e->getMessage());
            }
        }else{
            return $this->returnError('E555', 'User #'.$id.' Not Founded , Please Try again');
        }
    }

    public function deleteUser($id)
    {

        $user = User::find($id);
        if (!is_null($user))
        {
            $oldimage = public_path().$user->avatar;
            if($user->avatar != '/assets/defult-user-avatar.jpg')
            {
                if(File::exists($oldimage)) {
                    File::delete($oldimage);
                }
            }

            $user->delete();
            return $this->returnSuccessMessage('User Deleted Successfully');
        }else{
            return $this->returnError('E555', 'User #'.$id.' Not Founded , Please Try again');
        }
    }

    public function usersReportsCount()
    {
        $users = User::withCount('report')->orderBy('report_count','desc')->limit(8)->get();
        $filtered = $users->filter(function ($value, $key) {
            return $value->report_count != 0 ;
        });
        $result = UserWithCounter::collection($filtered);
        return $this->returnData('Data',$result , 'User Reports Counter Done');

    }

}
