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
    public function show(physiotherpy $physiotherpy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\physiotherpy  $physiotherpy
     * @return \Illuminate\Http\Response
     */
    public function edit(physiotherpy $physiotherpy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\physiotherpy  $physiotherpy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, physiotherpy $physiotherpy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\physiotherpy  $physiotherpy
     * @return \Illuminate\Http\Response
     */
    public function destroy(physiotherpy $physiotherpy)
    {
        //
    }
    public function getphysco(Request $request)
    {
         $data=physiotherpy::all();
         $physiotherpy=physiotherpy::select('physiotherpies.id','physiotherpies.referredBy','physiotherpies.phyadate','opds.RegNum','opds.patientName')
            ->join('opds', 'physiotherpies.patientId', '=', 'opds.regNum')
            ->get();
              return DataTables::of( $physiotherpy)->addColumn('action', function($data){

              return sprintf('<button class="deleteipdrecord" data-id="%s">%s</button>
                <button class="viewipdrecord" data-id="%s">%s</button>
                <button class="addrecord" data-id="%s">%s</button>
                <button class="editipdrecord" data-id="%s">%s</button>',
                $data['id'],'<i class="btn btn-danger fa fa-trash"></i>',
                $data['id'],'<i class="btn btn-danger fa fa-eye"></i>',
                $data['id'],'<i class="btn btn-danger fa fa-plus"></i>',
                $data['id'],'<i class="btn btn-danger fa fa-edit"></i>');
              
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
