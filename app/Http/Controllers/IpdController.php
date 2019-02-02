<?php

namespace App\Http\Controllers;
use App\Model\ipd;
use App\Model\ot;
use App\Model\opd;
use Illuminate\Http\Request;
use DB;
use DataTables;
class IpdController extends Controller
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
        return view('ipd.create');
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
           
          'patientId'=>'required'
        
        ]);
        $ipd=ipd::create($request->all());
        $ipd->save();
        return redirect (route('ipd-create'))->with('message','data save sussefully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ipd  $ipd
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id=$request->id;
        $opd=opd::all();
        $data=ipd::where('id','=',$id)->first();
        $content=\View::make('ipd.view',compact('data','opd'));
        $a=$content->render();
      return response()->json([
        'status'=>true,
        'html'=>$a,
      ]);
    }
    public function discharge(Request $request)
    {
        $id=$request->id;
        $opd=opd::all();
        $data=ipd::where('id','=',$id)->first();
        $content=\View::make('ipd.discharge',compact('data','opd'));
        $a=$content->render();
      return response()->json([
        'status'=>true,
        'html'=>$a,
      ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ipd  $ipd
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $ipd=ipd::where('id',$id)->first();
         return view('ipd.edit',compact('ipd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ipd  $ipd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //dd($request->all());
         $ipd=ipd::where('id',$id)->first();
         $ipd->update($request->all());
         
    return redirect(route('ipd-create'))->with('message','upadte  sussefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ipd  $ipd
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          ipd::where('id',$id)->delete();
          return response()->json([
           'success' => 'Record deleted successfully!'
          ]);
    }
        public function datatable()
    {
          return view('ipd.ipdfilter');
    }
    public function getIpd(Request $request)
    {
        
        $data=ipd::all();
        $ipds = ipd::select('ipds.id','ipds.ipdRegNum','ipds.ipdRegDate','ipds.wardName','ipds.bedNum','ipds.consultant','opds.RegNum','opds.patientName')
            ->join('opds', 'ipds.patientId', '=', 'opds.regNum')
            ->get();
              return DataTables::of($ipds)->addColumn('action', function($data){

              return sprintf('<div class=" btn-group"><button data-url="%s" data-id="%s" class="%s btn btn-sm btn-square btn-danger">%s</button>
                <button  data-id="%s" class="%s btn btn-sm btn-square btn-info">%s</button>
                <button  data-id="%s" class="%s btn btn-sm btn-square btn-success">%s</button>
                 <a href="%s">%s</a>
                  <button  data-id="%s" class="%s btn btn-sm btn-square btn-success">%s</button>',
                route('ipd.delete',$data['id']),$data['id'],"deleteRecord",'<i class=" fa fa-trash"></i>',
                $data['id'],"viewRecord",'<i class=" fa fa-eye"></i>',
                 $data['id'],"addRecord",'<i class=" fa fa-plus"></i>',
                route('ipd.edit',['id'=>$data['id']]),'<i class="btn btn-sm btn-warning fa fa-edit  editRecord"></i>',
                $data['id'],"discharge",'<i class=" fa fa-clock-o"></i>'
                                                 );
              
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
