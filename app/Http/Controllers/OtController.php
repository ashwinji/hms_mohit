<?php
namespace App\Http\Controllers;
use App\Model\ot;
use App\Model\opd;
use App\Model\ipd;
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
        return view('ot.create');
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
                'ipdRegNum'=>'required'
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
        
        $ot=ot::where('id',$id)->first();
       // dd($ot);
        return view('ot.edit',compact('ot'));
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
        return DataTables::of($ots)->addColumn('action', function($data){

        return sprintf('<button class="deleteotRecord" id="del"  data-id="%s">%s</button > 
                        <button class="viewRecord" id="view" data-id="%s">%s</button >
             <a href="%s">%s</a>',
             $data['id'],'<i class="btn btn-danger fa fa-trash"></i>',
             $data['id'],'<i class="btn btn-danger fa fa-eye "></i>',
             route('ot.edit',['id'=>$data['id']]),'<i class="btn btn-danger fa fa-edit"></i>');
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
