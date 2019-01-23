<?php

namespace App\Http\Controllers;
use App\Model\opds;
use App\Model\ipds;
use App\Model\ots;
use App\Model\opdtreatments;
use Illuminate\Http\Request;

class OpdtreatmentsController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $opdtreatments=new opdtreatments;
        $opdtreatments->patientId=$request->pId;
         $opdtreatments->complaint=$request->cId;
          //$opdtreatments->patientTitle=$request->rDate;
           $opdtreatments->treatment=$request->t;
           $opdtreatments->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\opdtreatments  $opdtreatments
     * @return \Illuminate\Http\Response
     */
    public function show(opdtreatments $opdtreatments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\opdtreatments  $opdtreatments
     * @return \Illuminate\Http\Response
     */
    public function edit(opdtreatments $opdtreatments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\opdtreatments  $opdtreatments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, opdtreatments $opdtreatments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\opdtreatments  $opdtreatments
     * @return \Illuminate\Http\Response
     */
    public function destroy(opdtreatments $opdtreatments)
    {
        //
    }
}
