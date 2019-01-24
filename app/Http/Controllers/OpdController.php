<?php

namespace App\Http\Controllers;
use App\Model\opd;
use App\Model\ipd;
use App\Model\ot;
use App\Model\doctorlist;
use App\Model\medicine;
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
        return view('opd.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->all());
        $valid=$this->validate($request,[
          'regNum'=>'required',
          'patientName'=>'required',
        ]);
        // dd($valid);
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
        $content=\View::make('opd.opdtreatment',compact('data'));
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
        $medicinelist=medicine::all()->pluck('name','id');
         $data=opd::where('id','=',$id)->first();
         $content=\View::make('opd.opdaddtreatment',compact('data','docterlist','medicinelist'));
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
           $opd=opd::where('id',$id)->first();
        return view('opd.edit',compact('opd'));
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
        return DataTables::of($opds)->addColumn('action', function($data){

       return sprintf('<button class="deleteopdRecord" id="del" data-id="%s">%s</button > 
                        <button class="viewRecord" id="view" data-id="%s">%s</button >
                        <button class="addRecord" id="" data-id="%s">%s</button >
             <a href="%s">%s</a>',
             $data['id'],'<i class="btn btn-danger fa fa-trash"></i>',
             $data['id'],'<i class="btn btn-danger fa fa-eye "></i>',
             $data['id'],'<i class="btn btn-danger fa fa-plus "></i>',
             route('opd.edit',['id'=>$data['id']]),'<i class="btn btn-danger fa fa-edit"></i>');
              
            })  
                 
        
            ->make(true);
    }
}
