<?php

namespace App\Http\Controllers;

use App\Model\urineexamination;
use Illuminate\Http\Request;
use App\Model\semenexamination;
use App\Model\bloodexamination;
use App\Model\ot;
use App\Model\opd;
use DB;
use DataTables;

class UrineexaminationController extends Controller
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
        return view('testreport.urinexamination.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $urine=urineexamination::create($request->all());
        $urine->save();
         return redirect (route('urine-create'))->with('message','data save sussefully');
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
        $data=urineexamination::where('id','=',$id)->first();
        $content=\View::make('testreport.urinexamination.view',compact('data'));
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
           $urine=urineexamination::where('id',$id)->first();
        return view('testreport.urinexamination.edit',compact('urine'));
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
          $urine=urineexamination::where('id',$id)->first();
          $urine->update($request->all());
          return redirect (route('urine-create'))->with('message','update  sussefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\semenexamination  $semenexamination
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       urineexamination::where('id',$id)->delete();
          return response()->json([
           'success' => 'Record deleted successfully!'
          ]);    
      }
          public function datatable()
    {
        return view('testreport.urinexamination.urinfilter');
    }
public function sendurinedata()
    {
           $data=urineexamination::all();
           $stool= urineexamination::select('urineexaminations.id','opds.regDate','urineexaminations.referredBy','opds.regNum','opds.patientName','urineexaminations.date','urineexaminations.investigationAdvised','opds.age')
            ->join('opds', 'urineexaminations.patientId', '=','opds.regNum')
            ->get();
            return DataTables::of($stool)->addColumn('action', function($data){

              return sprintf(
                '<div class="  btn-group"><button data-url="%s" data-id="%s" class="%s btn btn-sm btn-square btn-danger">%s</button>
                <button  data-id="%s" class="%s btn btn-sm btn-square btn-info">%s</button>
                 <a href="%s">%s</a></div>',
                route('urine.delete',$data['id']),$data['id'],"deleteRecord",'<i class=" fa fa-trash"></i>',
              $data['id'],"viewRecord",'<i class=" fa fa-eye"></i>',
                route('urine.edit',['id'=>$data['id']]),'<i class="btn btn-sm btn-danger fa fa-edit editRecord"></i>'
                );
              
            })   

        ->make('true');
    }

}
