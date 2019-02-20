<?php

namespace App\Http\Controllers;
use App\Model\opd;
use App\Model\ipd;
use App\Model\ot;
use App\Model\doctorlist;
use App\Model\department;
use App\Model\medicine;
use App\Model\potency;
use App\Model\investigation;
use App\Model\yoga;
use App\Model\bloodexamination;
use App\Model\physiotherpy;
use App\Model\xray;
use App\Model\stoolexamination;
use App\Model\serumofwidal;
use App\Model\semenexamination;
use App\Model\generalblood;
use App\Model\ecgexamination;
use App\Model\urineexamination;
use App\Model\opdtreatments;
use App\Model\ipdtreatments;
use Illuminate\Http\Request;
use DataTables;


class OpdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docterlist=doctorlist::all()->pluck('name','id');
         $medicine=medicine::all()->pluck('name','id');
         $department=department::all()->pluck('name','id');
        return view('opd.create',compact('docterlist','medicine','department'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $this->validate($request,[
          'regNum'=>'required|unique:opds,regNum|min:5|',
          'patientName'=>'required',
          'regDate'=>'required',
          'patientTitle'=>'required',
          'address'=>'required',
          'Age'=>'required',
          'gender'=>'required',
          'Consultant'=>'required',
          'otherConsultant'=>'required',
          'department'=>'required',
        ]);
       
        $opd=new opd;
        $opd->patientTitle=$request->patientTitle;
        $opd->patientName=$request->patientName;
        $opd->regNum=$request->regNum;
        $opd->id=$request->regNum;
        $opd->regDate=$request->regDate;
        $opd->regAmount=$request->regAmount;
        $opd->address=$request->address;
        $opd->age=$request->Age	;
        $opd->gender=$request->gender	;
        $opd->contactNum=$request->contactNum;
        $opd->consultant=$request->Consultant;
        $opd->otherConsultant=$request->otherConsultant;
        $opd->department=$request->department;
        $opd->patientType=$request->patientType;
        $opd->patientTypeIpd=$request->patientTypeIpd;
        $opd->dltStatus	=$request->dltStatuse	;
        $opd->save();
        return redirect(route('opd-create'))->with('message','data save sussefully');

        }

    /**
     * Display the specified resource.
     *
     * @param  \App\opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request )
    {
        $id=$request->id;
      
        $data=opd::where('id','=',$id)->first();
        $content=\View::make('opd.view',compact('data'));
        $a=$content->render();
      return response()->json([
        'status'=>true,
        'html'=>$a,
      ]);
    }
    public function addtreatment(Request $request)
    {
        $id=$request->id;
        $docterlist=doctorlist::all()->pluck('name','id');
        $medicine=medicine::all()->pluck('name','id');
        $potency=potency::all()->pluck('name','id');
        $potency=potency::all()->pluck('name','id');
        $investigation=investigation::all()->pluck('name','id');
         $data=opd::where('id','=',$id)->first();
         $content=\View::make('opd.opdaddtreatment',compact('data','docterlist','medicine','investigation','potency'));
         $b=$content->render();
         return response()->json([
           'status'=>true,
           'html'=>$b,
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docterlist=doctorlist::all()->pluck('name','id');
         $medicine=medicine::all()->pluck('name','id');
         $department=department::all()->pluck('name','id');
           $opd=opd::where('id',$id)->first();
        return view('opd.edit',compact('opd','docterlist','medicine','department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $opd=opd::find($id);
        $opd->patientTitle=$request->patientTitle;
        $opd->patientName=$request->patientName;
        $opd->regNum=$request->regNum;
        $opd->id=$request->regNum;
        $opd->regDate=$request->regDate;
        $opd->regAmount=$request->regAmount;
        $opd->address=$request->address;
        $opd->age=$request->Age ;
        $opd->gender=$request->gender   ;
        $opd->contactNum=$request->contactNum;
        $opd->consultant=$request->Consultant;
        $opd->otherConsultant=$request->otherConsultant;
        $opd->department=$request->department;
        $opd->patientType=$request->patientType;
        $opd->patientTypeIpd=$request->patientTypeIpd;
        $opd->dltStatus =$request->dltStatuse;
        $opd->save();
        return redirect(route('opd-create'))->with('message','record update sussesfuly');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
         opd::where('id',$id)->delete();
            return response()->json([
           'success' => 'Record deleted successfully!'
     ]);
    }

    public function datatable()
    {
        return view('opd.opdfilter');
    }

    public function getOpd()
    {
        $data=opd::all();
        $opds = opd::select('id','patientName','regNum','regDate','address','gender','consultant');
        return DataTables::of($opds)
        ->editColumn('consultant',function($data){
            return $data->doctorName->name;
        })
       // when you want search relatioship data then apply it where you edit column you can filterColumn
       ->filterColumn('consultant', function($q, $keyword) {
                    $q->whereHas('doctorName',function($q) use ($keyword) {
                        $q->where('name','LIKE',["%{$keyword}%"]);
                    });
                })
        ->addColumn('action', function($data){

       return sprintf('<div class=" btn-group"><button data-url="%s" data-id="%s" class="%s btn btn-sm btn-square btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">%s</button>
                     <button  data-id="%s" class="%s btn btn-sm btn-square btn-info" data-toggle="tooltip" data-placement="top" title="view">%s</button>
                     <button  data-id="%s" class="%s btn btn-sm btn-square btn-info" data-toggle="tooltip" data-placement="top" title="add treatment">%s</button>
             <a href="%s" data-toggle="tooltip" data-placement="top" title="edit">%s</a>',
            route('opd.delete',$data['id']),$data['id'],"deleteopdRecord",'<i class=" fa fa-trash"></i>',
             $data['id'],"viewRecord",'<i class=" fa fa-eye"></i>',
             $data['id'],"addRecord",'<i class=" fa fa-plus"></i>',
             route('opd.edit',['id'=>$data['id']]),'<i class="btn  btn-sm btn-teal fa fa-pencil editotRecord"></i>');
              
            })  
                 
        
            ->make(true);
    }
 public function filterSearch(Request $request)
     {
        //Log::info('fitersearch='.print_r($request->all(),true));
       $input = $request->all();
       if(empty($input['gender'])){

        $data = opd::whereBetween('regDate', [$input['fromDate'],[$input['toDate'] ]])
        ->select('id','patientName','regNum','regDate','address','gender','consultant')->get();

        // where order is serial number//
         return DataTables::of($data)
         ->addColumn('order',function($data){
            static $i=1;
            return $i++;
         })
         ->addColumn('action', function($data){

       return sprintf('<div class=" btn-group"><button data-url="%s" data-id="%s" class="%s btn btn-sm btn-square btn-danger">%s</button>
                       <button  data-id="%s" class="%s btn btn-sm btn-square btn-info">%s</button>
                     <button  data-id="%s" class="%s btn btn-sm btn-square btn-info">%s</button>
             <a href="%s">%s</a>',
            route('opd.delete',$data['id']),$data['id'],"deleteopdRecord",'<i class=" fa fa-trash"></i>',
             $data['id'],"viewRecord",'<i class=" fa fa-eye"></i>',
             $data['id'],"addRecord",'<i class=" fa fa-plus"></i>',
             route('opd.edit',['id'=>$data['id']]),'<i class="btn  btn-sm btn-teal fa fa-pencil editotRecord"></i>');
              
            })  
                 
        
            ->make(true);
        }
                 //datewise filtering 
            $data = opd::whereBetween('regDate', [$input['fromDate'],[$input['toDate'] ]])->where('gender',$input['gender'])
        ->select('id','patientName','regNum','regDate','address','gender','consultant')->get();

        // where order is serial number//
         return DataTables::of($data)
         ->addColumn('order',function($data){
            static $i=1;
            return $i++;
         })
         ->addColumn('action', function($data){

       return sprintf('<div class=" btn-group"><button data-url="%s" data-id="%s" class="%s btn btn-sm btn-square btn-danger">%s</button>
                       <button  data-id="%s" class="%s btn btn-sm btn-square btn-info">%s</button>
                     <button  data-id="%s" class="%s btn btn-sm btn-square btn-info">%s</button>
             <a href="%s">%s</a>',
            route('opd.delete',$data['id']),$data['id'],"deleteopdRecord",'<i class=" fa fa-trash"></i>',
             $data['id'],"viewRecord",'<i class=" fa fa-eye"></i>',
             $data['id'],"addRecord",'<i class=" fa fa-plus"></i>',
             route('opd.edit',['id'=>$data['id']]),'<i class="btn  btn-sm btn-teal fa fa-pencil editotRecord"></i>');
              
            })  
                 
        
            ->make(true);

    }


    public function dashboard()
    {

        $opddata=opd::all()->count();
        $ipddata=ipd::all()->count();
        $otdata=ot::all()->count();
        $yogadata=yoga::all()->count();
        $blooddata=bloodexamination::all()->count();
        $physiodata=physiotherpy::all()->count();
        $ecgdata=ecgexamination::all()->count();
        $generalblooddata=generalblood::all()->count();
        $serumdata =serumofwidal::all()->count();
        $semendata=semenexamination::all()->count();
        $stooldata=stoolexamination::all()->count();
        $urinedata=urineexamination::all()->count();
        $xraydata=xray::all()->count();
        $opdtreatment=opdtreatments::all()->count();
        $ipdtreatment=ipdtreatments::all()->count();

        return view('dashboard.dashboard',compact('opddata','ipddata','otdata','physiodata','blooddata','yogadata','xraydata','urinedata','stooldata','semendata','serumdata','generalblooddata','ecgdata','ipdtreatment','opdtreatment'));
    }

}
