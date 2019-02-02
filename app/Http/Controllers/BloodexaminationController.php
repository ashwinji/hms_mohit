<?php

namespace App\Http\Controllers;

use App\Model\bloodexamination;
use Illuminate\Http\Request;
use App\Model\ot;
use App\Model\opd;
use DB;
use DataTables;

class BloodexaminationController extends Controller
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
        return view('testreport.bloodexamination.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

        ]);

         $bloodexamination=bloodexamination::create($request->all());
         $bloodexamination->save();
        return redirect (route('blood-create'))->with('message','data save sussefully');

              
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bloodexamination  $bloodexamination
     * @return \Illuminate\Http\Response
     */
  public function show(Request $request)
    {
        $id=$request->id;
        $data=bloodexamination::where('id','=',$id)->first();
        $content=\View::make('testreport.bloodexamination.view',compact('data'));
        $a=$content->render();
      return response()->json([
        'status'=>true,
        'html'=>$a,
      ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bloodexamination  $bloodexamination
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bloodexamination=bloodexamination::where('id',$id)->first();
        return view('testreport.bloodexamination.edit',compact('bloodexamination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bloodexamination  $bloodexamination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bloodexamination=bloodexamination::where('id',$id)->first();
         $bloodexamination->update($request->all());
          return redirect (route('blood-create'))->with('message','update  sussefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bloodexamination  $bloodexamination
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       bloodexamination::where('id',$id)->delete();
          return response()->json([
           'success' => 'Record deleted successfully!'
          ]);
    }
    public function datatable()
    {
        return view('testreport.bloodexamination.bloodexaminationfilter');
    }
    public function sendblooddata()
    {
           $data=bloodexamination::all();
           $bloodexaminations= bloodexamination::select('bloodexaminations.id','bloodexaminations.investigationAdvised','bloodexaminations.referredBy','opds.regNum','opds.patientName','bloodexaminations.date','opds.age')
            ->join('opds', 'bloodexaminations.patientId', '=','opds.regNum')
            ->get();
            return DataTables::of($bloodexaminations)->addColumn('action', function($data){

              return sprintf(
                '<div class=" btn-sm btn-group"><button data-url="%s" data-id="%s" class="%s btn btn-square btn-danger">%s</button>
                <button  data-id="%s" class="%s btn btn-square btn-info">%s</button>
                 <a href="%s">%s</a></div>',
                route('blood.delete',$data['id']),$data['id'],"deleteRecord",'<i class=" fa fa-trash"></i>',
                $data['id'],"viewRecord",'<i class=" fa fa-eye"></i>',
                route('bloodexamination.edit',['id'=>$data['id']]),'<i class="btn btn-danger fa fa-edit editRecord"></i>'
                );
              
            })   

        ->make('true');
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
