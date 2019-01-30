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
    public function show(bloodexamination $bloodexamination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bloodexamination  $bloodexamination
     * @return \Illuminate\Http\Response
     */
    public function edit(bloodexamination $bloodexamination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bloodexamination  $bloodexamination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bloodexamination $bloodexamination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bloodexamination  $bloodexamination
     * @return \Illuminate\Http\Response
     */
    public function destroy(bloodexamination $bloodexamination)
    {
        //
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
            return DataTables::of($bloodexaminations)

        ->make('true');
    }
}
