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

            if ($request->type)
            {
                $reportQuery->where('type' ,$request->type );
            }
            if ($request->brand && $request->brand != 'null' && $request->brand != 'NULL')
            {
                $reportQuery->where('brand' ,$request->brand );
            }
            if ($request->model && $request->model != 'null' && $request->model != 'NULL')
            {
                $reportQuery->where('model' ,$request->model);
            }
            if ($request->color && $request->color != 'null' && $request->color != 'NULL')
            {
                $reportQuery->where('color' ,$request->color);
            }
            if ($request->RAM && $request->RAM != 'null' && $request->RAM != 'NULL')
            {
                $reportQuery->where('RAM' ,$request->RAM);
            }
            if ($request->ROM && $request->ROM != 'null' && $request->ROM != 'NULL')
            {
                $reportQuery->where('ROM' ,$request->ROM);
            }
            if ($request->orderBy && $request->orderBy != 'null' && $request->orderBy != 'NULL')
            {
                $reportQuery->orderBy('created_at' , $request->orderBy);
            }
            if ($request->frontCrach_top && $request->frontCrach_top != 'null' && $request->frontCrach_top != 'NULL')
            {
                $reportQuery->where('frontCrach_top' , $request->frontCrach_top );
            }
            if ($request->frontCrach_center && $request->frontCrach_center != 'null' && $request->frontCrach_center != 'NULL')
            {
                $reportQuery->where('frontCrach_center' , $request->frontCrach_center );
            }
            if ($request->frontCrach_bottom && $request->frontCrach_bottom != 'null' && $request->frontCrach_bottom != 'NULL')
            {
                $reportQuery->where('frontCrach_bottom' , $request->frontCrach_bottom );
            }
            if ($request->backCrach_top && $request->backCrach_top != 'null' && $request->backCrach_top != 'NULL')
            {
                $reportQuery->where('backCrach_top' , $request->backCrach_top );
            }
            if ($request->backCrach_center && $request->backCrach_center != 'null' && $request->backCrach_center != 'NULL')
            {
                $reportQuery->where('backCrach_center' , $request->backCrach_center );
            }
            if ($request->backCrach_bottom && $request->backCrach_bottom != 'null' && $request->backCrach_bottom != 'NULL')
            {
                $reportQuery->where('backCrach_bottom' , $request->backCrach_bottom );
            }
            $reports = $reportQuery->get();
            if (count($reports))
            {
                $result = ReportResource::collection($reports);
                return $this->returnData('Data',$result , 'Filters applied');
            }else{
                return $this->returnError('404' , 'No report founded with these filters');
            }

        }
    }
}
