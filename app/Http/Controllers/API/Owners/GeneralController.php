<?php

namespace App\Http\Controllers\API\Owners;

use App\Http\Controllers\Controller;
use App\Http\Resources\Report as ReportResource;
use App\Models\Report;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{
    use GeneralTrait;

    public function index()
    {
        $report = Report::all();
        if (!is_null($report))
        {
            $result = ReportResource::collection($report);

            return $this->returnData('data',$result);
        }else{
            return $this->returnError('E404','No Reports Founded');
        }
    }

    public function show($id)
    {
        $report = Report::find($id);
        if (!is_null($report))
        {
            $result = new ReportResource($report);
            return $this->returnData('data',$result);
        }else{
            return $this->returnError('E404','report Not found');
        }
    }

    public function serialSerach(Request $request)
    {
        $seracher = Report::where('serialNumber' , $request->serial)->first();
        if (!is_null($seracher)) {
            $result =  new ReportResource($seracher);
            return $this->returnData('data',$result , 'Report Founded By Serial Number');
        }else{
            return $this->returnError('404' , 'no report founded');
        }
    }

    public function list(Request $request)
    {
        $cheker = Report::get();
        if (!is_null($cheker)) {
            $reportQuery = Report::with('user');

            if ($request->type)
            {
                $reportQuery->where('type' ,$request->type );
            }
            if ($request->brand)
            {
                $reportQuery->where('brand' ,$request->brand );
            }
            if ($request->model)
            {
                $reportQuery->where('brand' ,$request->model);
            }
            if ($request->color)
            {
                $reportQuery->where('color' ,$request->color);
            }
            if ($request->orderBy)
            {
                $reportQuery->orderBy('created_at' , $request->orderBy);
            }
            if ($request->frontCrach_top)
            {
                $reportQuery->where('frontCrach_top' , $request->frontCrach_top );
            }
            if ($request->frontCrach_center)
            {

                $reportQuery->where('frontCrach_center' , $request->frontCrach_center );
            }
            if ($request->frontCrach_bottom)
            {
                $reportQuery->where('frontCrach_bottom' , $request->frontCrach_bottom );
            }
            if ($request->backCrach_top)
            {
                $reportQuery->where('backCrach_top' , $request->backCrach_top );
            }
            if ($request->backCrach_center)
            {

                $reportQuery->where('backCrach_center' , $request->backCrach_center );
            }
            if ($request->backCrach_bottom)
            {
                $reportQuery->where('backCrach_bottom' , $request->backCrach_bottom );
            }

            $reports = $reportQuery->get();
            if (count($reports))
            {
                $result = ReportResource::collection($reports);
                return $this->returnData('data',$result , 'filters applied');
            }else{
                return $this->returnError('404' , 'no report founded');
            }


        }
    }
}
