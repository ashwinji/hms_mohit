<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Opd;
use App\Model\ipd;
use App\Model\xray;
use App\Model\department;
use App\Model\wardname;
use App\User;
use Carbon\Carbon;
use DataTables;
use DB;
class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function opdDate()
    {
        $data=department::all()->pluck('name','id');
      return view('report.OpddateWise.reportopdDate',compact('data'));
    }

     public function opddatefilter(Request $request)
      {
          

     if(empty($request->department))
      {
            $From = $request->get('fromDate');        
            $To = $request->get('toDate'); 

            $data = opd::select(DB::raw("SUM(IF(gender='Male Adult',1,0)) as maleAdult,SUM(IF(gender='Female Adult',1,0)) as femaleAdult,SUM(IF(gender='Male Child',1,0)) as maleChild,SUM(IF(gender='Female Child',1,0)) as femaleChild,regDate"))
            ->whereBetween('regDate', array($From,$To))
            ->orderby('regDate')
            ->groupBy('regDate')
            ->get();
           
            return DataTables::of($data)           
                  ->addColumn('subTotal',function($data){
                   return $data->maleAdult + $data->femaleAdult + $data->maleChild + $data->femaleChild;
                  })
                  ->addColumn('sn',function($data){
                  static $i=1;
                  return $i++;
            })
            ->make(true);

      }
      else
      {

            $From = $request->get('fromDate');        
            $To = $request->get('toDate');        
            $department = $request->get('department');        

            $data = opd::select(DB::raw("SUM(IF(gender='Male Adult',1,0)) as maleAdult,SUM(IF(gender='Female Adult',1,0)) as femaleAdult,SUM(IF(gender='Male Child',1,0)) as maleChild,SUM(IF(gender='Female Child',1,0)) as femaleChild,regDate"))
            ->whereBetween('regDate', array($From,$To))
            ->where('department',$department)
            ->orderby('regDate')
            ->groupBy('regDate')
            ->get();
           
            return DataTables::of($data)           
                  ->addColumn('subTotal',function($data){
                   return $data->maleAdult + $data->femaleAdult + $data->maleChild + $data->femaleChild;
                  })
                  ->addColumn('sn',function($data){
                  static $i=1;
                  return $i++;
            })
            ->make(true);

     }
 }

    public function opdMonth()
    {
        $data=department::all()->pluck('name','id');
      return view('report.OpdMonthWise.reportodpMonth',compact('data'));
    }
      public function opdMonthfilter(Request $request)
      {

      if(empty($request->department))
      {

            $From = date("m/Y", strtotime($request->fromDate));
            $To = date("m/Y", strtotime($request->toDate));

            $data = opd::select(DB::raw("SUM(IF(gender='Male Adult',1,0)) as male,SUM(IF(gender='Female Adult',1,0)) as female,SUM(IF(gender='Male Child',1,0)) as mchild,SUM(IF(gender='Female Child',1,0)) as fchild,regDate"),DB::raw("DATE_FORMAT(regDate,'%M %Y') as month"))
            ->whereRaw("MONTH(regDate) BETWEEN '".$From."' AND '".$To."' ")
            ->orderBy(DB::raw("MONTH(regDate)"))
            ->groupBy(DB::raw("DATE_FORMAT(regDate,'%M %Y')"))
            ->get();
           
            return DataTables::of($data)           
                  ->addColumn('subTotal',function($data){
                   return $data->male + $data->female + $data->mchild + $data->fchild;
                  })
                  ->addColumn('sn',function($data){
                  static $i=1;
                  return $i++;
            })
            ->make(true);

      }
      else
      {

            $From = date("m/Y", strtotime($request->fromDate));
            $To = date("m/Y", strtotime($request->toDate));
            $department = $request->get('department');
            $data = Opd::select(DB::raw("SUM(IF(gender='Male Adult',1,0)) as male,SUM(IF(gender='Female Adult',1,0)) as female,SUM(IF(gender='Male Child',1,0)) as mchild,SUM(IF(gender='Female Child',1,0)) as fchild,regDate"),DB::raw("DATE_FORMAT(regDate,'%M %Y') as month"))
            ->whereRaw("MONTH(regDate) BETWEEN '".$From."' AND '".$To."' ")
            ->where('department',$department)
            ->orderBy(DB::raw("MONTH(regDate)"))
            ->groupBy(DB::raw("MONTH(regDate)"))
            ->get();
           
            return DataTables::of($data)           
                  ->addColumn('subTotal',function($data){
                   return $data->male + $data->female + $data->mchild + $data->fchild;
                  })
                  ->addColumn('sn',function($data){
                  static $i=1;
                  return $i++;
            })
            ->make(true);

      }
      }
      public function opd()
    {
        $data=department::all()->pluck('name','id');
      return view('report.OpdReport.reportopd',compact('data'));
    }

      public function Opdfilter(Request $request)
      {
      if(empty($request->department))
      {
      
            $fromMonth = date("m", strtotime($request->fromDate));
            $toMonth = date("m", strtotime($request->toDate));
            $opdreportsData =opd::whereRaw("MONTH(regDate) BETWEEN '".$fromMonth."' AND '".$toMonth."' ")
                           //->whereRaw('MONTH(regDate) = ?',[$nmonth])
            ->select('regDate',DB::raw('MONTHNAME(regDate) as month'),DB::raw('YEAR(regDate) as year'), DB::raw('count(*) as count'))

            ->groupBy(DB::raw("MONTH(regDate)"))
            ->get();

            return DataTables::of($opdreportsData)->

            addColumn('sn',function($opdreportsData){
            static $i=1;
            return $i++;
            })->addColumn('remark',function($opdreportsData){
            return '--- ---';
            })->addColumn('total',function($opdreportsData){
            static $sum=0;
            $sum+=$opdreportsData->count;
            return $sum;
            })
            ->make(true);

      }
      else
      {

            $fromMonth = date("m", strtotime($request->fromDate));
            $toMonth = date("m", strtotime($request->toDate));
            $department = $request->get('department');

            $opdreportsData =opd::whereRaw("MONTH(regDate) BETWEEN '".$fromMonth."' AND '".$toMonth."' ")
            ->whereRaw('(department) = ?',[$department])
            ->select('regDate',DB::raw('MONTHNAME(regDate) as month'),DB::raw('YEAR(regDate) as year'), DB::raw('count(*) as count'))

            ->groupBy(DB::raw("MONTH(regDate)"))
            ->get();

            return DataTables::of($opdreportsData)->

            addColumn('sn',function($opdreportsData){
            static $i=1;
            return $i++;
            })->addColumn('remark',function($opdreportsData){
            return '--- ---';
            })->addColumn('total',function($opdreportsData){
            static $sum=0;
            $sum+=$opdreportsData->count;
            return $sum;
            })
            ->make(true);

      }
      }
     public function opdTreatment()
    {
    
      return view('report.OpdTreatmentlist.reportopdtreatement');
    }

     public function ipdDate()
    {
        $data=wardname::all()->pluck('name','id');
      return view('report.IpddateWise.reportipddatewise',compact('data'));
    }

    public function IpddateFilter(Request $request)
      {
      if(empty($request->wardName))
      {
            $fromDate = $request->get('fromDate');        
            $toDate = $request->get('toDate'); 

            $ipdData =ipd::whereRaw("(ipdRegDate) BETWEEN '".$fromDate."' AND '".$toDate."' ")
            ->select('ipdRegDate',DB::raw('count(*) as count'))
            ->groupBy(DB::raw("(ipdRegDate)"))
            ->get(); 

            return DataTables::of($ipdData)->

            addColumn('sn',function($ipdData){
            static $i=1;
            return $i++;
            })
            ->addColumn('total',function($ipdData){
            static $sum=0;
            $sum+=$ipdData->count;
            return $sum;
            })
            ->make(true);

      }
      else
      {

            $fromDate = $request->get('fromDate');        
            $toDate = $request->get('toDate');        
            $ward = $request->get('wardName');

            $ipdData =ipd::whereRaw("(ipdRegDate) BETWEEN '".$fromDate."' AND '".$toDate."' ")
            ->select('ipdRegDate',DB::raw('count(*) as count'))
            ->where('wardName',$ward)
            ->groupBy(DB::raw("(ipdRegDate)"))
            ->get(); 

            return DataTables::of($ipdData)->

            addColumn('sn',function($ipdData){
            static $i=1;
            return $i++;
            })
            ->addColumn('total',function($ipdData){
            static $sum=0;
            $sum+=$ipdData->count;
            return $sum;
            })
            ->make(true);

      }

      }
    public function ipdMonth()
    {
        $data=department::all()->pluck('name','id');
      return view('report.IpdMonthWise.reportipdmonthwise',compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
