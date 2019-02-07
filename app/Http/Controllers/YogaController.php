<?php

namespace App\Http\Controllers;

use App\Model\yoga;
use Illuminate\Http\Request;
use App\Model\ot;
use App\Model\opd;
use App\Model\ipd;
use App\Model\disease;
use DB;
use DataTables;

class YogaController extends Controller
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
        $disease=disease::all()->pluck('name','id');
        return view('yoga.create',compact('disease'));
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
                
        ]);
             $yoga=new yoga;
             $yoga->patientId=$request->opdNum;
             $yoga->referredBy=$request->refferedby;
             $yoga->age=$request->age;
             $yoga->investigationAdvised=$request->advicedTherapy;
             $yoga->yogadate=$request->yogadate;
             $yoga->disease=$request->diagnosis;
             $yoga->exersise=$request->exersize;
             $yoga->other=$request->other;
             $yoga->remark=$request->Remark;
             $yoga->save();
             return redirect(route('yoga.create'))->with('message','data save sussessfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\yoga  $yoga
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id=$request->id;
        $data=yoga::where('id','=',$id)->first();
        $content=\View::make('yoga.view',compact('data'));
        $a=$content->render();
      return response()->json([
        'status'=>true,
        'html'=>$a,
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\yoga  $yoga
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $disease=disease::all()->pluck('name','id');
        $yoga=yoga::where('id',$id)->first();
        return view('yoga.edit',compact('yoga','disease'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\yoga  $yoga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
             $yoga=yoga::find($id);
             $yoga->patientId=$request->opdNum;
             $yoga->referredBy=$request->refferedby;
             $yoga->age=$request->age;
             $yoga->investigationAdvised=$request->advicedTherapy;
             $yoga->yogadate=$request->yogadate;
             $yoga->disease=$request->diagnosis;
             $yoga->exersise=$request->exersize;
             $yoga->other=$request->other;
             $yoga->remark=$request->Remark;
             $yoga->save();
             return redirect(route('yoga.create'))->with('message','data update sussessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\yoga  $yoga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             
        yoga::find($id)->delete($id);
         return response()->json([
           'success' => 'Record deleted successfully!'
     ]);
    }
    
        public function datatable()
    {
        return view('yoga.yogafilter');

    }

    public function getYoga()
    {
        $data=yoga::all();
        $yogas = yoga::select('yogas.id','yogas.referredBy','yogas.yogadate','opds.regNum','opds.patientName','opds.regDate')
            ->join('opds', 'yogas.patientId', '=','opds.regNum')
            ->get();
        return DataTables::of($yogas)
        ->editColumn('referredBy',function($data){
            return $data->doctorName->name;})
        ->addColumn('action', function($data){
      
         return sprintf('<div class="btn-sm btn-group"><button data-url="%s" data-id="%s" class="%s btn btn-square btn-danger">%s</button>
             <button  data-id="%s" class="%s btn btn-square btn-info">%s</button>
               <a href="%s">%s</a></div>',
               route('yoga.delete',$data['id']),$data['id'],"deleteRecord",'<i class=" fa fa-trash"></i>',
                $data['id'],"viewRecord",'<i class=" fa fa-eye"></i>',
                 route('yoga.edit',['id'=>$data['id']]),'<i class="btn btn-danger fa fa-edit editYoga"></i>');
              
            })
            ->make(true);
    }

    public function fetch(Request $request)
    {
       if($request->get('query')){

          $query = $request->get('query');
          $data = opd::where('regNum', 'LIKE', '%'.$query.'%')
            ->get();
          $output = '<ul class="dropdown-menu form-control" style="display:block; position:relative">';
          foreach($data as $row)
          {
           $output .= '
           <li><a href="#">'.$row->regNum.'</a></li>
           ';
          }
          $output .= '</ul>';
          echo $output;
     }
    }

    public function fetchSearch(Request $request)
    {
       if($request->get('query')){

          $query = $request->get('query');
          $data = opd::where('regNum',$query)
            ->first();

            return response()->json([

                'data1'=>$data,
                'doctor'=>$data->doctorName->name,
                'status'=>true,
            ]);
         
     }
    }
}
