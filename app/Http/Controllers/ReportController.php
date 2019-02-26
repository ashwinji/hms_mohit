<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Opd;
use App\Model\ipd;
use App\Model\xray;
use App\Model\department;
use App\Model\wardname;
use App\Model\ecgexamination;
use App\Model\urineexamination;
use App\Model\stoolexamination;
use App\Model\serumofwidal;
use App\Model\semenexamination;
use App\Model\bloodexamination;
use App\Model\generalblood;
use App\Model\physiotherpy;
use App\Model\yoga;
use App\Model\opdTreatments;
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
            ->select('regDate',DB::raw('MONTHNAME(regDate) as month'),DB::raw('YEAR(regDate) as year'), DB::raw('count(*) as count'))
            ->groupBy(DB::raw("MONTH(regDate)"))
            ->get();
            return DataTables::of($opdreportsData)->
            addColumn('sn',function($opdreportsData){
            static $i=1;
            return $i++;
            })->addColumn('remark',function($opdreportsData){
            return '';
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
            return '';
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

      public function opdtreatmentFilter()
      {    
      return DataTables::of(opdtreatments::select('opdtreatments.id','opds.patientName','opds.regNum','opds.consultant','opds.gender','opds.regDate','opds.address','opds.age','opdtreatments.treatmentDate'))
      ->join('opds', 'opdtreatments.patientId', '=','opds.regNum')
      ->get()
      ->addColumn('action', function($data){

      return '<a href="javascript:void(0);" class="btn btn-sm btn-info fa fa-eye opdlistview" id="'.$data->id.'"></a>';

      })->editColumn('consultant',function($data)
      {

      return $data->doctorName->name;

      })->make(true);

      }


      // date filter
      public function opdTreatmentdatefilter(Request $request)
      {

            $ageFrom = $request->get('fromDate');        
            $ageTo = $request->get('toDate');        

            $data = (opd::whereBetween('regDate',[$ageFrom, $ageTo])
            ->select('opdtreatments.id','opds.patientName','opds.regNum','opds.consultant','opds.gender','opds.regDate','opds.address','opds.age','opdtreatments.treatmentDate'))
             ->join('opdtreatments', 'opdtreatments.patientId', '=','opds.regNum')
             ->get();
            return DataTables::of($data)->addColumn('action', function($data){
            return '<a href="javascript:void(0);" class="btn btn-sm btn-info fa fa-eye opdlistview" id="'.$data->id.'"></a>';

            })->editColumn('consultant',function($data){

            return $data->doctorName->name;
            })

            ->make(true);
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
     public function ipdMonthfilter(Request $request)
      {

            $fromMonth = date("m", strtotime($request->fromDate));
            $toMonth = date("m", strtotime($request->toDate));
            $ipdmonthData = ipd::whereRaw("MONTH(ipdRegDate) BETWEEN '".$fromMonth."' AND '".$toMonth."' ")
            ->select('ipdRegDate',DB::raw('MONTHNAME(ipdRegDate) as month'),DB::raw('YEAR(ipdRegDate) as year'), DB::raw('count(*) as count'))
            ->groupBy(DB::raw("MONTH(ipdRegDate)"))
            ->get();
            return DataTables::of($ipdmonthData)->
            addColumn('sn',function($ipdmonthData)
            {
            static $i=1;
            return $i++;
            })->addColumn('remark',function($ipdmonthData){
            return ' ';
            })->addColumn('total',function($ipdmonthData)
            {
            static $sum=0;
            $sum+=$ipdmonthData->count;
            return $sum;
            })
            ->make(true);

      }

       public function xrayReport()
      {
          return view('report.XrayReport.reportxray');
      }
     public function xrayFilter(Request $request) 
      {
            $fromMonth = date("m", strtotime($request->fromDate));
            $toMonth = date("m", strtotime($request->toDate));
            $xray =xray::whereRaw("MONTH(date) BETWEEN '".$fromMonth."' AND '".$toMonth."' ")
            ->select('date',DB::raw('MONTHNAME(date) as month'),DB::raw('YEAR(date) as year'), DB::raw('count(*) as count'))
            ->groupBy(DB::raw("MONTH(date)"))
            ->get();
            return DataTables::of($xray)->
            addColumn('sn',function($xray)
            {
            static $i=1;
            return $i++;
            })->addColumn('remark',function($xray){
            return '';
            })->addColumn('total',function($xray)
            {
            static $sum=0;
            $sum+=$xray->count;
            return $sum;
            })
            ->make(true);
      }
      public function ecgReport()
      {
        return view('report.EcgReport.reportecg');
      }
       public function ecgFilter(Request $request) 
      {
            $fromMonth = date("m", strtotime($request->fromDate));
            $toMonth = date("m", strtotime($request->toDate));
            $ecgData = ecgexamination::whereRaw("MONTH(date) BETWEEN '".$fromMonth."' AND '".$toMonth."' ")
            ->select('date',DB::raw('MONTHNAME(date) as month'),DB::raw('YEAR(date) as year'), DB::raw('count(*) as count'))
            ->groupBy(DB::raw("MONTH(date)"))
            ->get();
            return DataTables::of($ecgData)->
            addColumn('sn',function($ecgData)
            {
            static $i=1;
            return $i++;
            })->addColumn('remark',function($ecgData)
            {
            return '';
            })->addColumn('total',function($ecgData)
            {
            static $sum=0;
            $sum+=$ecgData->count;
            return $sum;
            })
            ->make(true);

      }

      public function urineReport()
      {
      return view('report.UrineExaminationReport.reporturineexamination');
      }

      public function urineFilter(Request $request) 
      {
            $fromMonth = date("m", strtotime($request->fromDate));
            $toMonth = date("m", strtotime($request->toDate));
            $urineData =urineexamination::whereRaw("MONTH(date) BETWEEN '".$fromMonth."' AND '".$toMonth."' ")
            ->select('date',DB::raw('MONTHNAME(date) as month'),DB::raw('YEAR(date) as year'), DB::raw('count(*) as count'))
            ->groupBy(DB::raw("MONTH(date)"))
            ->get();
            return DataTables::of($urineData)->
            addColumn('sn',function($urineData)
            {
            static $i=1;
            return $i++;
            })->addColumn('remark',function($urineData)
            {
            return '';
            })->addColumn('total',function($urineData)
            {
            static $sum=0;
            $sum+=$urineData->count;
            return $sum;
            })
            ->make(true);

      }
             public function yogaReport()
      {
                 return view('report.YogaReport.reportyoga');
      }

      public function yogaFilter(Request $request) 
      {

            $fromMonth = date("m", strtotime($request->fromDate));
            $toMonth = date("m", strtotime($request->toDate));
            $yogaData =yoga::whereRaw("MONTH(yogadate) BETWEEN '".$fromMonth."' AND '".$toMonth."' ")
            ->select('yogadate',DB::raw('MONTHNAME(yogadate) as month'),DB::raw('YEAR(yogadate) as year'), DB::raw('count(*) as count'))
            ->groupBy(DB::raw("MONTH(yogadate)"))
            ->get();
            return DataTables::of($yogaData)->
            addColumn('sn',function($yogaData){
            static $i=1;
            return $i++;
            })->addColumn('remark',function($yogaData){
            return ' ';
            })->addColumn('total',function($yogaData){
            static $sum=0;
            $sum+=$yogaData->count;
            return $sum;
            })
            ->make(true);

      }
       public function stoolReport()
      {
      return view('report.StoolExaminationReport.reportstoolexamination');
      }

      public function stoolFilter(Request $request) 
      {

            $fromMonth = date("m", strtotime($request->fromDate));
            $toMonth = date("m", strtotime($request->toDate));
            $stoolData = stoolexamination::whereRaw("MONTH(date) BETWEEN '".$fromMonth."' AND '".$toMonth."' ")
            ->select('date',DB::raw('MONTHNAME(date) as month'),DB::raw('YEAR(date) as year'), DB::raw('count(*) as count'))
            ->groupBy(DB::raw("MONTH(date)"))
            ->get();
            return DataTables::of($stoolData)->
            addColumn('sn',function($stoolData)
            {
            static $i=1;
            return $i++;
            })->addColumn('remark',function($stoolData)
            {
            return ' ';
            })->addColumn('total',function($stoolData)
            {
            static $sum=0;
            $sum+=$stoolData->count;
            return $sum;
            })
            ->make(true);

      }
       public function serunReport()
      {
      return view('report.SerumofwidalReport.reportserumofwidal');
      }

      public function serunFilter(Request $request) 
      {

            $fromMonth = date("m", strtotime($request->fromDate));
            $toMonth = date("m", strtotime($request->toDate));
            $serunData =serumofwidal::whereRaw("MONTH(date) BETWEEN '".$fromMonth."' AND '".$toMonth."' ")
            ->select('date',DB::raw('MONTHNAME(date) as month'),DB::raw('YEAR(date) as year'), DB::raw('count(*) as count'))
            ->groupBy(DB::raw("MONTH(date)"))
            ->get();
            return DataTables::of($serunData)->
            addColumn('sn',function($serunData){
            static $i=1;
            return $i++;
            })->addColumn('remark',function($serunData){
            return '';
            })->addColumn('total',function($serunData){
            static $sum=0;
            $sum+=$serunData->count;
            return $sum;
            })
            ->make(true);

      }


      public function bloodReport()
      {
      return view('report.BloodExaminationReport.reportBloodExamination');
      }

      public function bloodFilter(Request $request) 
      {

            $fromMonth = date("m", strtotime($request->fromDate));
            $toMonth = date("m", strtotime($request->toDate));
            $bloodData =bloodexamination::whereRaw("MONTH(date) BETWEEN '".$fromMonth."' AND '".$toMonth."' ")
            ->select('date',DB::raw('MONTHNAME(date) as month'),DB::raw('YEAR(date) as year'), DB::raw('count(*) as count'))
            ->groupBy(DB::raw("MONTH(date)"))
            ->get();
            return DataTables::of($bloodData)->
            addColumn('sn',function($bloodData){
            static $i=1;
            return $i++;
            })->addColumn('remark',function($bloodData){
            return '';
            })->addColumn('total',function($bloodData){
            static $sum=0;
            $sum+=$bloodData->count;
            return $sum;
            })
            ->make(true);

      }

      public function generalbloodReport()
      {
      return view('report.GeneralbloodReport.reportgeneralblood');
      }

      public function generalbloodFilter(Request $request) 
      {

            $fromMonth = date("m", strtotime($request->fromDate));
            $toMonth = date("m", strtotime($request->toDate));
            $generalData = generalblood::whereRaw("MONTH(date) BETWEEN '".$fromMonth."' AND '".$toMonth."' ")
            ->select('date',DB::raw('MONTHNAME(date) as month'),DB::raw('YEAR(date) as year'), DB::raw('count(*) as count'))
            ->groupBy(DB::raw("MONTH(date)"))
            ->get();
            return DataTables::of($generalData)->
            addColumn('sn',function($generalData){
            static $i=1;
            return $i++;
            })->addColumn('remark',function($generalData){
            return '';
            })->addColumn('total',function($generalData){
            static $sum=0;
            $sum+=$generalData->count;
            return $sum;
            })
            ->make(true);

      }


      public function semenReport()
      {
      return view('report.SemenExaminationReport.reportsemenexamination');
      }

      public function semenFilter(Request $request) 
      {

            $fromMonth = date("m", strtotime($request->fromDate));
            $toMonth = date("m", strtotime($request->toDate));
            $semenData =semenexamination::whereRaw("MONTH(date) BETWEEN '".$fromMonth."' AND '".$toMonth."' ")
            ->select('date',DB::raw('MONTHNAME(date) as month'),DB::raw('YEAR(date) as year'), DB::raw('count(*) as count'))
            ->groupBy(DB::raw("MONTH(date)"))
            ->get();
            return DataTables::of($semenData)->
            addColumn('sn',function($semenData){
            static $i=1;
            return $i++;
            })->addColumn('remark',function($semenData){
            return '';
            })->addColumn('total',function($semenData){
            static $sum=0;
            $sum+=$semenData->count;
            return $sum;
            })
            ->make(true);

      }
        public function physiotherpyReport()
      {
      return view('report.PhysiotherpyReport.reportphysiotherpy');
      }

      public function physiotherpyFilter(Request $request) 
      {

            $fromMonth = date("m", strtotime($request->fromDate));
            $toMonth = date("m", strtotime($request->toDate));
            $phyData = physiotherpy::whereRaw("MONTH(phyadate) BETWEEN '".$fromMonth."' AND '".$toMonth."' ")
            ->select('phyadate',DB::raw('MONTHNAME(phyadate) as month'),DB::raw('YEAR(phyadate) as year'), DB::raw('count(*) as count'))
            ->groupBy(DB::raw("MONTH(phyadate)"))
            ->get();
            return DataTables::of($phyData)->
            addColumn('sn',function($phyData){
            static $i=1;
            return $i++;
            })->addColumn('remark',function($phyData){
            return ' ';
            })->addColumn('total',function($phyData){
            static $sum=0;
            $sum+=$phyData->count;
            return $sum;
            })
            ->make(true);

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
