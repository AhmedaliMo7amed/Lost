<?php

namespace App\Http\Controllers\API\Admins;

use App\Http\Controllers\Controller;
use App\Http\Resources\OwnerRevResource;
use App\Http\Resources\OwnerWithID;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Http\Resources\OwnerWithCounter;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminOwnersController extends Controller
{

    use GeneralTrait;

    public function getOwners()
    {

        $owners = OwnerRevResource::collection(Owner::all());
        if (count($owners) > 0)
        {
            return $this->returnData('Data', $owners , 'All Owners Sent Successfully');
        }else{
            return $this->returnError('E90002' , 'No Owners Founded In Database');
        }
    }

    public function ownersList()
    {

        $owners = OwnerWithID::collection(Owner::all());
        if (count($owners) > 0)
        {
            return $this->returnData('Data', $owners , 'All Owners Sent Successfully');
        }else{
            return $this->returnError('E90002' , 'No Owners Founded In Database');
        }
    }

    public function getOwner($id)
    {
        $owner = Owner::find($id);
        if (is_null($owner)) {
            return $this->returnError('E90003' , 'Owner #'.$id.' Not Founded In Database');
        }else{
            $result = new OwnerRevResource($owner);
            return $this->returnData('Data', $result , 'Owner Sent Successfully');
        }
    }

    public function addOwner(Request $request)
    {
        try {
            $validator =Validator::make($request->all() ,[
                // owner Validation
                'firstName' => 'required|regex:/^[\pL\s\-]+$/u' ,
                'lastName' => 'required|regex:/^[\pL\s\-]+$/u' ,
                'email' => 'required|email|unique:owners,email|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/' ,
                'mobile' => 'required|regex:/^01[0125][0-9]{8}$/',
                'password' => 'required|min:6' ,
                'confirmPassword' => 'required|same:password' ,
                'avatar'=>'nullable|image:jpeg,jpg,png,gif|max:10000',

                // store Validation
                'storeName' => 'required|string' ,
                'government'=> 'required|string|max:30',
                'city'=> 'required|string|max:30',
                'street'=> 'required|string|max:30',
                'storeMobile_1'=> 'required|regex:/^01[0125][0-9]{8}$/',
                'storeMobile_2' => 'nullable|regex:/^01[0125][0-9]{8}$/' ,
                'facebookLink' => 'nullable|url|regex:/http(?:s):\/\/(?:www\.)facebook\.com\/.+/i',
                'whatsapp' => 'nullable|regex:/^01[0125][0-9]{8}$/'
            ]);

            if ($validator->fails()) {
                return $this->returnValidationError('E222',$validator);
            }
            $RegData = $request->only([
                'firstName',
                'lastName',
                'email',
                'mobile',
                'password' ,
                'avatar',
            ]);
            $StoreData = $request->only([
                'storeName',
                'government',
                'city',
                'street',
                'storeMobile_1',
                'storeMobile_2',
                'facebookLink' ,
                'whatsapp'
            ]);
            // Hashing Owner Password
            $RegData['password'] = Hash::make($RegData['password']);
            // Saving User Picture in the public/images/avatars path (if founded)
            if ($request->hasFile('avatar'))
            {
                $now = Carbon::now();
                $destinationPath = public_path().'/images/avatars/owners/'.$now->year.'/'.'0'.$now->month.'/';
                $ownerPhoto = $request->file('avatar');
                $name = $ownerPhoto->getClientOriginalName();
                $ownerNewPhoto =Carbon::now()->format('His').$name;
                $ownerPhoto->move($destinationPath,$ownerNewPhoto);
                $RegData['avatar'] = '/images/avatars/owners/'.$now->year.'/'.'0'.$now->month.'/'.$ownerNewPhoto;
            }else{
                $RegData['avatar'] = '/assets/defult-user-avatar.jpg';
            }
            // Create Owner Account
            $RegData['fullInfo'] = true;
            $owner = Owner::create($RegData);
            $owner->store()->create($StoreData);

            return $this->returnSuccessMessage('Owner Created Successfully','S111');
        }
        catch (\Exception $ex){
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }
        catch (Throwable $e){
            return $this->returnError($e->getCode(), $e->getMessage());
        }

    }


    public function updateOwner($id , Request $request)
    {
        $owner = Owner::find($id);
        if (!is_null($owner))
        {
            try {
                $validator =Validator::make($request->all() ,[
                    // owner Validation
                    'firstName' => 'required|regex:/^[\pL\s\-]+$/u' ,
                    'lastName' => 'required|regex:/^[\pL\s\-]+$/u' ,
                    'email' => 'required|email|unique:owners,email,'.$owner->id.'|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',
                    'mobile' => 'required|regex:/^01[0125][0-9]{8}$/',
                    'password' => 'required|min:6' ,
                    'confirmPassword' => 'required|same:password' ,
                    'avatar'=>'nullable|image:jpeg,jpg,png,gif|max:10000',

                    // store Validation
                    'storeName' => 'required|string' ,
                    'government'=> 'required|string|max:30',
                    'city'=> 'required|string|max:30',
                    'street'=> 'required|string|max:30',
                    'storeMobile_1'=> 'required|regex:/^01[0125][0-9]{8}$/',
                    'storeMobile_2' => 'nullable|regex:/^01[0125][0-9]{8}$/' ,
                    'facebookLink' => 'nullable|url|regex:/http(?:s):\/\/(?:www\.)facebook\.com\/.+/i',
                    'whatsapp' => 'nullable|regex:/^01[0125][0-9]{8}$/'

                ]);

                if ($validator->fails()) {
                    return $this->returnValidationError('E222',$validator);
                }

                $RegData = $request->only([
                    'firstName',
                    'lastName',
                    'email',
                    'mobile',
                    'password' ,
                    'avatar',
                ]);
                $StoreData = $request->only([
                    'storeName',
                    'government',
                    'city',
                    'street',
                    'storeMobile_1',
                    'storeMobile_2',
                    'facebookLink' ,
                    'whatsapp'
                ]);
                // Hashing Owner Password
                $RegData['password'] = Hash::make($RegData['password']);

                // Saving User Picture in the public/images/avatars path (if founded)
                $oldimage = public_path().$owner->avatar;
                if($owner->avatar != '/assets/defult-user-avatar.jpg')
                {
                    if(File::exists($oldimage)) {
                        File::delete($oldimage);
                    }
                }
                if ($request->hasFile('avatar'))
                {
                    $now = Carbon::now();
                    $destinationPath = public_path().'/images/avatars/owners/'.$now->year.'/'.'0'.$now->month.'/';
                    $ownerPhoto = $request->file('avatar');
                    $name = $ownerPhoto->getClientOriginalName();
                    $ownerNewPhoto =Carbon::now()->format('His').$name;
                    $ownerPhoto->move($destinationPath,$ownerNewPhoto);
                    $RegData['avatar'] = '/images/avatars/owners/'.$now->year.'/'.'0'.$now->month.'/'.$ownerNewPhoto;
                }else{
                    $RegData['avatar'] = '/assets/defult-user-avatar.jpg';
                }

                $owner->update($RegData);
                $owner->store()->update($StoreData);
                return $this->returnSuccessMessage('Owner Updated Successfully','S111');
            }

            catch (\Exception $ex){
                return $this->returnError($ex->getCode(), $ex->getMessage());
            }

            catch (Throwable $e){
                return $this->returnError($e->getCode(), $e->getMessage());
            }
        }else{
            return $this->returnError('E555', 'Owner #'.$id.' Not Founded , Please Try again');
        }
    }

    public function deleteOwner($id)
    {

        $owner = Owner::find($id);
        if (!is_null($owner))
        {
            $oldimage = public_path().$owner->avatar;
            if($owner->avatar != '/assets/defult-user-avatar.jpg')
            {
                if(File::exists($oldimage)) {
                    File::delete($oldimage);
                }
            }

            $owner->delete();
            return $this->returnSuccessMessage('Owner Deleted Successfully');
        }else{
            return $this->returnError('E555', 'Owner #'.$id.' Not Founded');
        }
    }

    public function ownersReviewsCount()
    {
        $owners = Owner::withCount('review')->orderBy('review_count','desc')->limit(8)->get();
        $filtered = $owners->filter(function ($value, $key) {
            return $value->review_count != 0 ;
        });
        $result = OwnerWithCounter::collection($filtered);
        return $this->returnData('Data',$result , 'Owner Reviews Counter Done');

    }


}
