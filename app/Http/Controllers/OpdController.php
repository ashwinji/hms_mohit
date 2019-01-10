<?php

namespace App\Http\Controllers;

use App\opd;
use Illuminate\Http\Request;

class OpdController extends Controller
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
        return view('opd.create');
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
          'regNum'=>'required'
        ]);
        $opdnew post;
        $opd->$PatientTitle=$request->$PatientTitle;
        $opd->$patientName=$request->$patientName;
        $opd->$regNum=$request->$regNum;
        $opd->$regDate=$request->$regDate;
        $opd->$regAmount=$request->$regAmount;
        $opd->$address=$request->$address;
        $opd->$age	=$request->$age	;
        $opd->$gender	=$request->$gender	;
        $opd->$contactNum	=$request->$contactNum;
        $opd->$consultant	=$request->$consultant;
        $opd->$otherConsultant	=$request->otherConsultant;
        $opd->$patientType	=$request->$patientType;
        $opd->$patientTypeIpd	=$request->$patientTypeIpd;
        $opd->$dltStatus	=$request->$dltStatuse	;
      opd->save();

        }

    /**
     * Display the specified resource.
     *
     * @param  \App\opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function show(opd $opd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function edit(opd $opd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, opd $opd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function destroy(opd $opd)
    {
        //
    }
}
