<?php

namespace App\Http\Controllers;
use App\Model\xray;
use Illuminate\Http\Request;
use App\Model\opd;
use App\Model\ipd;
use App\Model\ot;
use DB;
use DataTables;

class XrayController extends Controller
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
        return view('testreport.xray.xraycreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $xray=xray::create($request->all());
        $xray->save();
         return redirect (route('xray-create'))->with('message','data save sussefully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\semenexamination  $semenexamination
     * @return \Illuminate\Http\Response
     */
   public function show(Request $request)
    {
        $id=$request->id;
        $data=xray::where('id','=',$id)->first();
        $content=\View::make('testreport.xray.xrayview',compact('data'));
        $a=$content->render();
      return response()->json([
        'status'=>true,
        'html'=>$a,
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\semenexamination  $semenexamination
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $xray=xray::where('id',$id)->first();
        return view('testreport.xray.xrayedit',compact('xray'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\semenexamination  $semenexamination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
          $xray=xray::where('id',$id)->first();
          $xray->update($request->all());
          return redirect (route('xray-create'))->with('message','update  sussefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\semenexamination  $semenexamination
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       xray::where('id',$id)->delete();
          return response()->json([
           'success' => 'Record deleted successfully!'
          ]);    
      }
          public function datatable()
    {
        return view('testreport.xray.xrayfilter');
    }
public function sendxraydata()
    {
           
           $stool= xray::select('xrays.id','opds.regDate','xrays.referredBy','opds.regNum','opds.patientName','xrays.date','xrays.investigationAdvised','opds.age')
            ->join('opds', 'xrays.patientId', '=','opds.regNum')
            ->get();
            return DataTables::of($stool)->addColumn('action', function($data){
              return sprintf(
                '<div class="  btn-group"><button data-url="%s" data-id="%s" class="%s btn btn-sm btn-square btn-danger">%s</button>
                <button  data-id="%s" class="%s btn btn-sm btn-square btn-info">%s</button>
                 <a href="%s">%s</a></div>',
                route('xray.delete',$data['id']),$data['id'],"deleteRecord",'<i class=" fa fa-trash"></i>',
              $data['id'],"viewRecord",'<i class=" fa fa-eye"></i>',
                route('xray.edit',['id'=>$data['id']]),'<i class="btn btn-sm btn-success fa fa-edit editRecord"></i>'
                );
              
            })   

        ->make('true');
    }

}
