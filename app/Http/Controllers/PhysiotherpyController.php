<?php

namespace App\Http\Controllers;
use App\Model\opd;
use App\Model\ipd;
use App\Model\ot;
use App\Model\physiotherpy;
use App\Model\doctorlist;
use App\Model\disease;
use App\Model\pshycodisease;
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
         $disease=pshycodisease::all()->pluck('name','id');
        return view('physiotherpy.create',compact('disease'));
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
        $disease=disease::all()->pluck('name','id');
        $physiotherpy=physiotherpy::where('id',$id)->first();
        return view('physiotherpy.edit',compact('physiotherpy','disease'));
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

              return sprintf('<div class="btn-sm btn-group"><button data-url="%s" data-id="%s" class="%s btn btn-square btn-danger" data-toggle="tooltip" data-placement="top" title="delete">%s</button>
             <button  data-id="%s" class="%s btn btn-square btn-info" data-toggle="tooltip" data-placement="top" title="view">%s</button>
               <a href="%s" data-toggle="tooltip" data-placement="top" title="edit">%s</a></div>',
                route('physco.delete',$data['id']),$data['id'],"deleteRecord",'<i class=" fa fa-trash"></i>',
                $data['id'],"viewRecord",'<i class=" fa fa-eye"></i>',
                 route('physiotherpy.edit',['id'=>$data['id']]),'<i class="btn btn-success fa fa-edit editrecord"></i>');
              
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
