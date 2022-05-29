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

            return $this->returnData('Data',$result,'All Reports Sended');
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
            return $this->returnData('Data',$result,'Report Sended Successfully');
        }else{
            return $this->returnError('E404','report Not found');
        }
    }

    public function serialSerach(Request $request)
    {
        $seracher = Report::where('serialNumber' , $request->serial)->first();
        if (!is_null($seracher)) {
            $result =  new ReportResource($seracher);
            return $this->returnData('Data',$result , 'Report Founded By Serial Number');
        }else{
            return $this->returnError('404' , 'No report founded');
        }
    }

    public function list(Request $request)
    {
        $cheker = Report::get();
        if (!is_null($cheker)) {
            $reportQuery = Report::with('user');
            if ($request->has('type') && $request->type != null)
            {
                $reportQuery->where('type' ,$request->type );
            }
            if ($request->has('brand') && $request->brand != null)
            {
                $reportQuery->where('brand' ,$request->brand);
            }
            if ($request->has('model') && $request->model != null)
            {
                $reportQuery->where('model' ,$request->model);
            }
            if ($request->has('color') && $request->color != null)
            {
                $reportQuery->where('color' ,$request->color);
            }
            if ($request->has('RAM') && $request->RAM != null)
            {
                $reportQuery->where('RAM' ,$request->RAM);
            }
            if ($request->has('ROM') && $request->ROM != null);
            {
                $reportQuery->where('ROM' ,$request->ROM);
            }
            if ($request->has('orderBy') && $request->orderBy != null)
            {
                $reportQuery->orderBy('created_at' , $request->orderBy);
            }
            if ($request->has('frontCrach_top') && $request->frontCrach_top != null)
            {
                $reportQuery->where('frontCrach_top' , $request->frontCrach_top );
            }
            if ($request->has('frontCrach_center') && $request->frontCrach_center != null)
            {
                $reportQuery->where('frontCrach_center' , $request->frontCrach_center);
            }
            if ($request->has('frontCrach_bottom') && $request->frontCrach_bottom != null)
            {
                $reportQuery->where('frontCrach_bottom' , $request->frontCrach_bottom );
            }
            if ($request->has('backCrach_top') && $request->backCrach_top != null)
            {
                $reportQuery->where('backCrach_top' , $request->backCrach_top );
            }
            if ($request->has('backCrach_center') && $request->backCrach_center != null)
            {
                $reportQuery->where('backCrach_center' , $request->backCrach_center);
            }
            if ($request->has('backCrach_bottom') && $request->backCrach_bottom != null)
            {
                $reportQuery->where('backCrach_bottom' , $request->backCrach_bottom );
            }
            $reports = $reportQuery->get();
            if (count($reports))
            {
                $result = ReportResource::collection($reports);
                return $this->returnData('Data',$result , 'Filters applied');
            }else{
                return $this->returnError('404' , 'no report founded');
            }

        }
    }
}
