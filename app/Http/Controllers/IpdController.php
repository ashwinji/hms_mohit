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
    public function show(ipd $ipd)
    {
        //
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

              return sprintf('<button class="deleteipdrecord" data-id="%s">%s</button>
                <button class="viewipdrecord" data-id="%s">%s</button>
                <button class="addrecord" data-id="%s">%s</button>
                 <a href="%s">%s</a>
                 <button class="discharge" data-id="%s">%s</button>',
                $data['id'],'<i class="btn btn-danger fa fa-trash"></i>',
                $data['id'],'<i class="btn btn-danger fa fa-eye"></i>',
                $data['id'],'<i class="btn btn-danger fa fa-plus"></i>',
                route('ipd.edit',['id'=>$data['id']]),'<i class="btn btn-danger fa fa-edit  editRecord"></i>',
                $data['id'],'<i class="btn btn-danger fa fa-clock-o "></i>'
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
