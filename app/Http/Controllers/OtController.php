<?php

namespace App\Http\Controllers;

use App\Model\ot;
use Illuminate\Http\Request;
use DB;

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
        $this->validate($request,[
                'opdNum'=>'required',
                'ipdRegNum'=>'required'
        ]);
        $ot=new ot;

        $ot->patientId=$request->opdNum;
        $ot->opdDate=$request->opdDate;
        //$ot->patientName=$request->patientName;
        $ot->ipdRegNum=$request->ipdRegNum;
        $ot->ipdRegDate=$request->ipdRegDate;
        // $ot->age=$request->age;
        // $ot->gender=$request->gender;
        //$ot->address=$request->address;
        $ot->otDate=$request->otDate;
        $ot->dignosis=$request->dignosis;
        $ot->otProcessure=$request->otProcessure;
        $ot->consultant=$request->consultant;
        $ot->otherConsultant=$request->otherConsultant;
        $ot->adviceTreatment=$request->adviceTreatment;
        $ot->medicine1=$request->medicine1;
        $ot->medicine2=$request->medicine2;
        $ot->medicine3=$request->medicine3;
        $ot->remark=$request->Remark;
        $ot->save();
          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ot  $ot
     * @return \Illuminate\Http\Response
     */
    public function show(ot $ot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ot  $ot
     * @return \Illuminate\Http\Response
     */
    public function edit(ot $ot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ot  $ot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ot $ot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ot  $ot
     * @return \Illuminate\Http\Response
     */
    public function destroy(ot $ot)
    {
        //
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
