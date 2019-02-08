<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use App\Model\ecgexamination;
use Illuminate\Http\Request;
use App\Model\bloodexamination;
use App\Model\ot;
use App\Model\opd;
use App\Mode\doctorlist;
use DB;
use DataTables;


class EcgexaminationController extends Controller
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
        return view('testreport.ecg.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ecg=ecgexamination::create($request->all());
        $ecg->save();
         return redirect (route('ecg-create'))->with('message','data save sussefully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ecgexamination  $ecgexamination
     * @return \Illuminate\Http\Response
     */
public function show(Request $request)
    {
        $id=$request->id;
        $data=ecgexamination::where('id','=',$id)->first();
        $content=\View::make('testreport.ecg.view',compact('data'));
        $a=$content->render();
      return response()->json([
        'status'=>true,
        'html'=>$a,
      ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ecgexamination  $ecgexamination
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ecg=ecgexamination::where('id',$id)->first();
        return view('testreport.ecg.edit',compact('ecg'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ecgexamination  $ecgexamination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
          $ecg=ecgexamination::where('id',$id)->first();
          $ecg->update($request->all());
          return redirect (route('ecg-create'))->with('message','update  sussefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ecgexamination  $ecgexamination
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         ecgexamination::where('id',$id)->delete();
          return response()->json([
           'success' => 'Record deleted successfully!'
          ]);
    }
   public function datatable()
    {
        return view('testreport.ecg.ecgfilter');
    }
  public function sendecgdata()
    {
           $data=ecgexamination::all();
           $ecg= ecgexamination::select('ecgexaminations.id','opds.regDate','ecgexaminations.referredBy','opds.regNum','opds.patientName','ecgexaminations.date','opds.age')
            ->join('opds', 'ecgexaminations.patientId', '=','opds.regNum')
            ->get();
            return DataTables::of($ecg)->addColumn('action', function($data){

              return sprintf(
                '<div class="  btn-group"><button data-url="%s" data-id="%s" class="%s btn btn-sm btn-square btn-danger">%s</button>
                <button  data-id="%s" class="%s btn btn-sm btn-square btn-info">%s</button>
                 <a href="%s">%s</a></div>s',
                route('ecg.delete',$data['id']),$data['id'],"deleteRecord",'<i class=" fa fa-trash"></i>',
              $data['id'],"viewRecord",'<i class=" fa fa-eye"></i>',
                route('ecg.edit',['id'=>$data['id']]),'<i class="btn btn-sm btn-danger fa fa-edit editRecord"></i>'
                );
              
            })   

        ->make('true');
    }
}
