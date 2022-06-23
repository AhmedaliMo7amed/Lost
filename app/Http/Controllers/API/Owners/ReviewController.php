<?php

namespace App\Http\Controllers\API\Owners;

use App\Http\Controllers\Controller;
use App\Http\Resources\Review as ReviewResource;
use App\Http\Resources\getReviews as getReviews;
use App\Models\Owner;
use App\Models\Report;
use App\Models\Review;
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
            return $this->returnData('Data',$newReviews,'All Reviews of current Owner Sended');
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

            if(empty(Report::find($id)))
            {
                return $this->returnError('E202', 'Report With #ID'.$id.' Not Founded');
            }
            $validator = Validator::make($input,[
                'theifName'=> 'required|string',
                'theifNatID' =>'required|regex:/^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$/',
                'theifMobile' => 'nullable|regex:/^01[0125][0-9]{8}$/' ,
                'theifPicture' => 'nullable|image:jpeg,jpg,png,gif|max:10000',
                'additional_info' => 'nullable|string|max:100',
            ]);

            if ($validator->fails()) {
                return $this->returnValidationError('E001',$validator);
            }

            $check = Review::get()->where('owner_id',$owner->id)->where('report_id',$id)->count();

            if ($check == 0)
            {
                if ($request->hasFile('theifPicture'))
                {
                    $now = Carbon::now();
                    $destinationPath = public_path().'/images/thieves/'.$now->year.'/'.'0'.$now->month.'/';
                    $theifPhoto = $request->file('theifPicture');
                    $name = $theifPhoto->getClientOriginalName();
                    $theifNewPhoto =Carbon::now()->format('His').$name;
                    $theifPhoto->move($destinationPath,$theifNewPhoto);
                    $input['theifPicture'] = '/images/thieves/'.$now->year.'/'.'0'.$now->month.'/'.$theifNewPhoto;
                }else {
                    $input['theifPicture'] = '/assets/defult-theif-avatar.png';
                }

                $input['report_id'] = $id ;
                $update = Report::find($id);
                $status['status'] = 1;
                $owner->review()->create($input);
                $update->update($status);

                return $this->returnSuccessMessage('Review submitted Successfully');
            }
            else{
                return $this->returnSuccessMessage('You have already reviewed this device!');
            }
        }catch (\Exception $e)
        {
            return $this->returnError($e->getCode(), $e->getMessage());
        }
    }
    public function update($id , Request $request)
    {
        $authOwner = Auth::guard('owner-api')->user();
        $review = Review::find($id);
        $input = $request->all();

        if (empty($review))
        {
            return $this->returnError('E555', 'No review Has #ID'.$id);
        }

        if ($review['owner_id'] == $authOwner->id)
        {
            $validator =Validator::make($request->all() ,[
                'theifName'=> 'required|string',
                'theifNatID' =>'required|regex:/^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$/',
                'theifMobile' => 'nullable|regex:/^01[0125][0-9]{8}$/' ,
                'theifPicture' => 'nullable|image:jpeg,jpg,png,gif|max:10000',
                'additional_info' => 'nullable|string|max:100',
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
                    $destinationPath = public_path().'/images/thieves/'.$now->year.'/'.'0'.$now->month.'/';
                    $theifPhoto = $request->file('theifPicture');
                    $name = $theifPhoto->getClientOriginalName();
                    $theifNewPhoto =Carbon::now()->format('His').$name;
                    $theifPhoto->move($destinationPath,$theifNewPhoto);
                    $input['theifPicture'] = '/images/thieves/'.$now->year.'/'.'0'.$now->month.'/'.$theifNewPhoto;
                }else {
                    $input['theifPicture'] = '/assets/defult-theif-avatar.png';
                }


                $review->update($input);
                return $this->returnSuccessMessage('Review Updated Successfully');
            }
        }else{
            return $this->returnError('E555', 'Authorization : You Cant Edit This review');
        }
    }

    public function destroy($id)
    {
        $authOwner = Auth::guard('owner-api')->user();
        $review = Review::find($id);
        $report = Report::find($review->report_id);

        if (!is_null($review))
        {
            if ($review['owner_id'] == $authOwner->id)
            {
                $review->delete();
                $report['status'] = 0;
                $report->update();
                return $this->returnSuccessMessage('Review Deleted Successfully');
            }else{
                return $this->returnError('E555', 'Authorization : You Cant Delete This review');
            }
        }else{
            return $this->returnError('E555', 'No Review Has #ID'.$id);
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

            return $this->returnData('Data',$result,'Review #ID'.$id.'Sended Successfully');

        } else{
            return $this->returnError('E555', 'No Review Has #ID'.$id);
        }
    }

}
