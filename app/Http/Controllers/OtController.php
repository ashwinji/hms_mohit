<?php
namespace App\Http\Controllers;
use App\Model\ot;
use App\Model\opd;
use App\Model\ipd;
use App\Model\medicine;
use App\Model\doctorlist;
use App\Model\department;
use Illuminate\Http\Request;
use DB;
use DataTables;
class OtController extends Controller
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
        $doctorlist=doctorlist::all()->pluck('name','id');
        $medicine=medicine::all()->pluck('name','id');
        $department=department::all()->pluck('name','id');
        return view('ot.create',compact('doctorlist','medicine','department'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
                'opdNum'=>'required',
             
        ]);
        $ot=new ot;
        $ot->patientId=$request->opdNum;
        $ot->opdDate=$request->opdDate;
        $ot->ipdRegNum=$request->ipdRegNum;
        $ot->ipdRegDate=$request->ipdDate;
        $ot->otDate=$request->otDate;
        $ot->dignosis=$request->diagnosis;
        $ot->otProcessure=$request->otProcessure;
        $ot->consultant=$request->consultant;
        $ot->otherConsultant=$request->otherConsultant;
        $ot->adviceTreatment=$request->adviceTreatment;
        $ot->medicine1=$request->medicine1;
        $ot->medicine2=$request->medicine2;
        $ot->medicine3=$request->medicine3;
        $ot->remark=$request->Remark;
        $ot->save();
        return redirect(route('ot-create'))->with('message','data save sussefully');
          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ot  $ot
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request )
    {
        
        $id=$request->id;
        $data=ot::where('id','=',$id)->first();
        $content=\View::make('ot.ottreatment',compact('data'));
        $a=$content->render();
      return response()->json([
        'status'=>true,
        'html'=>$a,
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ot  $ot
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctorlist=doctorlist::all();
        $medicine=medicine::all();
        $department=department::all();
        
        $ot=ot::where('id',$id)->first();
        return view('ot.edit',compact('ot','department','medicine','doctorlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ot  $ot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // dd($request->all());
        $ot=ot::find($id);
        $ot->patientId=$request->opdNum;
        $ot->opdDate=$request->opdDate;
        $ot->ipdRegNum=$request->ipdRegNum;
        $ot->ipdRegDate=$request->ipdDate;
        $ot->otDate=$request->otDate;
        $ot->dignosis=$request->diagnosis;
        $ot->otProcessure=$request->otProcessure;
        $ot->consultant=$request->consultant;
        $ot->otherConsultant=$request->otherConsultant;
        $ot->adviceTreatment=$request->adviceTreatment;
        $ot->medicine1=$request->medicine1;
        $ot->medicine2=$request->medicine2;
        $ot->medicine3=$request->medicine3;
        $ot->remark=$request->Remark;
        $ot->save();
        return redirect(route('ot-create'))->with('message','data update sussefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ot  $ot
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         ot::find($id)->delete($id);
         return response()->json([
           'success' => 'Record deleted successfully!'
     ]);
    }
    
    public function datatable()
    {
        return view('ot.otfilter');

    }

    public function getOt()
    {
        $data=ot::all();
        $ots = ot::select('ots.id','ots.consultant','ots.otDate','opds.regNum','opds.patientName','ots.opdDate')
            ->join('opds', 'ots.patientId', '=','opds.regNum')
            ->get();
        return DataTables::of($ots)->addColumn('order',function($data){
            static $i=1;
            return $i++;
         })->editColumn('consultant',function($data){

             return $data->doctorName->name;
         })
        ->addColumn('action', function($data){
            return sprintf('<div class="  btn-group"><button data-url="%s" data-id="%s" class="%s btn btn-sm  btn-square btn-danger">%s</button>
                <button  data-id="%s" class="%s btn btn-sm  btn-square btn-info">%s</button>
                <a href="%s">%s</a></div>',
                route('ot.delete',$data['id']),$data['id'],"deleteotRecord",'<i class=" fa fa-trash"></i>',
                $data['id'],"viewRecord",'<i class=" fa fa-eye"></i>',
                route('ot.edit',['id'=>$data['id']]),'<i class="btn btn-sm  btn-success fa fa-edit editotRecord"></i>');
        })       
        ->make(true);
    }

    public function fetch(Request $request)
    {
       if($request->get('query')){

          $query = $request->get('query');
          $data = DB::table('opds')
            ->where('regNum', 'LIKE', '%'.$query.'%')
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
          $data = DB::table('opds')
            ->where('regNum',$query)
            ->first();

            return response()->json($data);
         
     }
    }
    
}
