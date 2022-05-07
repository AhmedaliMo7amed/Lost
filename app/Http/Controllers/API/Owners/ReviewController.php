<?php

namespace App\Http\Controllers\API\Owners;

use App\Http\Controllers\Controller;
use App\Http\Resources\Contact as ContactResource;
use App\Http\Resources\Report as ReportResource;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Owner as OwnerResource;
use App\Http\Resources\Review as ReviewResource;
use App\Http\Resources\getReviews as getReviews;
use App\Models\Owner;
use App\Models\Report;
use App\Models\Review;
use App\Models\User;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    use GeneralTrait;

    public function index()
    {
        $authOwner = Auth::guard('owner-api')->user();
        $reviews = Review::with('storeOwner','report')->where('owner_id',$authOwner->id)->get();

        if (count($reviews))
        {
            $newReviews = getReviews::collection($reviews);
            return $this->returnData('reviews',$newReviews,'All Reviews of current Owner Sended');
        }
        else{
            return $this->returnError('E404','Owner dont have any Review');
        }
    }

    public function store($id , Request $request)
    {
        try{
            $owner = Owner::find(Auth::guard('owner-api')->user()->id);
            $input = $request->all();

            $validator = Validator::make($input,[
                'theifName'=> 'required|string|nullable',
                'theifNatID' =>'required|regex:/^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$/',
                'theifMobile' => 'sometimes|nullable|regex:/^01[0125][0-9]{8}$/' ,
                'theifPicture' => 'sometimes|nullable|image:jpeg,jpg,png,gif|max:10000',
                'additional_info' => 'sometimes|nullable|string|max:100',
            ]);

            if ($validator->fails()) {
                return $this->returnValidationError('E001',$validator);
            }

            $check = Review::get()->where('owner_id',$owner->id)->where('report_id',$id)->count();

            if ($check == 0)
            {
                if (!empty($request->theifPicture))
                {
                    $now = Carbon::now();
                    $theif_path= 'public/images/thieves/'.$now->year.'/'.'0'.$now->month.'/';
                    $theifPhoto = $request->theifPicture;
                    $theifNewPhoto = Carbon::now()->format('His').$theifPhoto->getClientOriginalName();
                    $theifPhoto->storeAs($theif_path,$theifNewPhoto);
                    $input['theifPicture'] = 'storage/images/thieves/'.$now->year.'/'.'0'.$now->month.'/'.$theifNewPhoto;
                }

                $input['report_id'] = $id ;
                $update = Report::find($id);
                $status['status'] = 1;
                $owner->review()->create($input);
                $update->update($status);

                return $this->returnSuccessMessage('review submitted Successfully');
            }
            else{
                return $this->returnSuccessMessage('you have already reviewed this device!');
            }
        }catch (\Exception $e)
        {
            return $this->returnError('E000','Something went wrong !');
        }
    }
    public function update($id , Request $request)
    {
        $authOwner = Auth::guard('owner-api')->user();
        $review = Review::find($id);
        $input = $request->all();

        if ($review['owner_id'] == $authOwner->id)
        {
            $validator =Validator::make($request->all() ,[

                'theifName'=> 'required|string|nullable',
                'theifNatID' =>'required|regex:/^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$/',
                'theifMobile' => 'sometimes|nullable|regex:/^01[0125][0-9]{8}$/' ,
                'theifPicture' => 'sometimes|nullable|image:jpeg,jpg,png,gif|max:10000',
                'additional_info' => 'sometimes|nullable|string|max:100',
            ]);
            if ($validator->fails()) {
                return $this->returnValidationError('E222',$validator);
            }else{
                if ($request->has('theifPicture'))
                {
                    $oldimage = $review->theifPicture;
                    if(File::exists($oldimage)) {
                        File::delete($oldimage);
                    }
                    $now = Carbon::now();
                    $theif_path= 'public/images/thieves/'.$now->year.'/'.'0'.$now->month.'/';
                    $theifPhoto = $request->theifPicture;
                    $theifNewPhoto = Carbon::now()->format('His').$theifPhoto->getClientOriginalName();
                    $theifPhoto->storeAs($theif_path,$theifNewPhoto);
                    $input['theifPicture'] = 'storage/images/thieves/'.$now->year.'/'.'0'.$now->month.'/'.$theifNewPhoto;
                }
                $review->update($input);
                return $this->returnSuccessMessage('review Updated Successfully');
            }
        }else{
            return $this->returnError('E555', 'Authorization : You Cant Edit This review');
        }
    }

    public function destroy($id)
    {
        $authOwner = Auth::guard('owner-api')->user();
        $review = Review::find($id);
        if (!is_null($review))
        {
            if ($review['owner_id'] == $authOwner->id)
            {
                $review->delete();
                return $this->returnSuccessMessage('review Deleted Successfully');
            }else{
                return $this->returnError('E555', 'Authorization : You Cant Delete This review');
            }
        }else{
            return $this->returnError('E555', 'Review Not Founded , Check ID');
        }

    }

    public function show($id)
    {
        $authOwner = Auth::guard('owner-api')->user();
        $review = Review::find($id);

        if (!is_null($review))
        {
            $Myreview = Review::find($id)->with('storeOwner','report')->first();

            $result = new ReviewResource($Myreview);

            return $this->returnData('Review',$result);

        } else{
            return $this->returnError('E404','Review Not found');
        }
    }

}
