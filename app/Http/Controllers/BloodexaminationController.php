<?php

namespace App\Http\Controllers;

use App\bloodexamination;
use Illuminate\Http\Request;

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
        return view('testreport.bloodexamination');
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

              $bloodexamination=new bloodexamination;
              $bloodexamination->patientId=$request->opdNum;
              $bloodexamination->referredBy=$request->refferedby;
              $bloodexamination->age=$request->age;
              $bloodexamination->investigationAdvised=$request->
              $bloodexamination->yogadate=$request->yogadate;
              $bloodexamination->disease=$request->diagnosis;
              $bloodexamination->exersise=$request->exersize;
              $bloodexamination->other=$request->other;
              $bloodexamination->remark=$request->Remark;
              $bloodexamination->save();

        
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
}
