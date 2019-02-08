<?php

namespace App\Http\Controllers;

use App\Model\semenexamination;
use Illuminate\Http\Request;
use App\Model\bloodexamination;
use App\Model\ot;
use App\Model\opd;
use DB;
use DataTables;

class SemenexaminationController extends Controller
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
        return view('testreport.semen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $semen=semenexamination::create($request->all());
        $semen->save();
         return redirect (route('semen-create'))->with('message','data save sussefully');
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
        $data=semenexamination::where('id','=',$id)->first();
        $content=\View::make('testreport.semen.view',compact('data'));
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
           $semen=semenexamination::where('id',$id)->first();
        return view('testreport.semen.edit',compact('semen'));
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
          $semen=semenexamination::where('id',$id)->first();
          $semen->update($request->all());
          return redirect (route('semen-create'))->with('message','update  sussefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\semenexamination  $semenexamination
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         semenexamination::where('id',$id)->delete();
          return response()->json([
           'success' => 'Record deleted successfully!'
          ]);    
      }
          public function datatable()
    {
        return view('testreport.semen.semenfilter');
    }
public function sendsemendata()
    {
           $data=semenexamination::all();
           $ecg= semenexamination::select('semenexaminations.id','opds.regDate','semenexaminations.referredBy','opds.regNum','opds.patientName','semenexaminations.date','semenexaminations.investigationAdvised','opds.age')
            ->join('opds', 'semenexaminations.patientId', '=','opds.regNum')
            ->get();
            return DataTables::of($ecg)->addColumn('action', function($data){

              return sprintf(
                '<div class="  btn-group"><button data-url="%s" data-id="%s" class="%s btn btn-sm btn-square btn-danger">%s</button>
                <button  data-id="%s" class="%s btn btn-sm btn-square btn-info">%s</button>
                 <a href="%s">%s</a></div>',
                route('semen.delete',$data['id']),$data['id'],"deleteRecord",'<i class=" fa fa-trash"></i>',
              $data['id'],"viewRecord",'<i class=" fa fa-eye"></i>',
                route('semen.edit',['id'=>$data['id']]),'<i class="btn btn-sm btn-danger fa fa-edit editRecord"></i>'
                );
              
            })   

        ->make('true');
    }




}
