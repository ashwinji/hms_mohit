<?php

namespace App\Http\Controllers;

use App\Model\generalblood;
use Illuminate\Http\Request;
use App\Model\ot;
use App\Model\opd;
use DB;
use DataTables;

class GeneralbloodController extends Controller
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
         return view('testreport.generalblood.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $ecg=generalblood::create($request->all());
        $ecg->save();
         return redirect (route('generalblood-create'))->with('message','data save sussefully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\generalblood  $generalblood
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id=$request->id;
        $data=generalblood::where('id','=',$id)->first();
        $content=\View::make('testreport.generalblood.view',compact('data'));
        $a=$content->render();
      return response()->json([
        'status'=>true,
        'html'=>$a,
      ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\generalblood  $generalblood
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $generalblood=generalblood::where('id',$id)->first();
        return view('testreport.generalblood.edit',compact('generalblood'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\generalblood  $generalblood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $generalblood=generalblood::where('id',$id)->first();
          $generalblood->update($request->all());
          return redirect (route('generalblood-create'))->with('message','update  sussefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\generalblood  $generalblood
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        generalblood::where('id',$id)->delete();
          return response()->json([
           'success' => 'Record deleted successfully!'
          ]);
    }
       public function datatable()
    {
        return view('testreport.generalblood.generalbloodfilter');
    }
  public function sendgeneralblooddata()
    {
           $data=generalblood::all();
           $ecg= generalblood::select('generalbloods.id','opds.regDate','generalbloods.referredBy','opds.regNum','opds.patientName','generalbloods.date','opds.age')
            ->join('opds', 'generalbloods.patientId', '=','opds.regNum')
            ->get();
            return DataTables::of($ecg)->addColumn('action', function($data){

              return sprintf(
                '<div class="  btn-group"><button data-url="%s" data-id="%s" class="%s btn btn-sm btn-square btn-danger">%s</button>
                <button  data-id="%s" class="%s btn btn-sm btn-square btn-info">%s</button>
                 <a href="%s">%s</a>',
                route('generalblood.delete',$data['id']),$data['id'],"deleteRecord",'<i class=" fa fa-trash"></i>',
                $data['id'],"viewRecord",'<i class=" fa fa-eye"></i>',
                route('generalblood.edit',['id'=>$data['id']]),'<i class="btn btn-sm btn-warning fa fa-edit editRecord"></i>'
                );
              
            })   

        ->make('true');
    }
}
