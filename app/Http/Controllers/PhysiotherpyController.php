<?php

namespace App\Http\Controllers;
use App\Model\opd;
use App\Model\ipd;
use App\Model\ot;
use App\Model\physiotherpy;
use DataTables;
use DB;
use Illuminate\Http\Request;

class PhysiotherpyController extends Controller
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
        return view('physiotherpy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request,[


        ]);

        $physiotherpy=physiotherpy::create($request->all());
        $physiotherpy->save();
        return redirect (route('physiotherpy-create'))->with('message','data save sussefully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\physiotherpy  $physiotherpy
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id=$request->id;
        $data=physiotherpy::where('id','=',$id)->first();
        $content=\View::make('physiotherpy.view',compact('data'));
        $a=$content->render();
      return response()->json([
        'status'=>true,
        'html'=>$a,
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\physiotherpy  $physiotherpy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $physiotherpy=physiotherpy::where('id',$id)->first();
        return view('physiotherpy.edit',compact('physiotherpy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\physiotherpy  $physiotherpy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $physiotherpy=physiotherpy::where('id',$id)->first();
         $physiotherpy->update($request->all());
         
    return redirect(route('physiotherpy-create'))->with('message','upadte  sussefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\physiotherpy  $physiotherpy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
          physiotherpy::find($id)->delete($id);
         return response()->json([
           'success' => 'Record deleted successfully!'
     ]);
    }
    public function getphysco(Request $request)
    {
         $data=physiotherpy::all();
         $physiotherpy=physiotherpy::select('physiotherpies.id','physiotherpies.referredBy','physiotherpies.phyadate','opds.regNum','opds.patientName','opds.regDate')
            ->join('opds', 'physiotherpies.patientId', '=', 'opds.regNum')
            ->get();
              return DataTables::of( $physiotherpy)->addColumn('action', function($data){

              return sprintf('<button class="deletephyscoRecord" data-id="%s">%s</button>
                <button class="viewrecord" data-id="%s">%s</button>
               <a href="%s">%s</a>',
                $data['id'],'<i class="btn btn-danger fa fa-trash"></i>',
                $data['id'],'<i class="btn btn-danger fa fa-eye"></i>',
                 route('physiotherpy.edit',['id'=>$data['id']]),'<i class="btn btn-danger fa fa-edit editrecord"></i>');
              
            })        
            ->make(true);
    }
    public function datatable()
    {
        return view('physiotherpy.physcofilter');
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
