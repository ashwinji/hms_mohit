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
        $opdtreatments->patientId=$request->patientId;
        $opdtreatments->complaint=$request->complaint;
        $opdtreatments->treatmentDate=$request->treatmentDate;
        $opdtreatments->treatment=$request->treatment;
        $opdtreatments->medicine=$request->medicine;
        $opdtreatments->potency=$request->potency;
        $opdtreatments->nod=$request->nod;
        $opdtreatments->advice=$request->advice;
        $opdtreatments->remark=$request->remark;
        $opdtreatments->remark=$request->remark;
        //when we pass the whole array valu in one variable 
        if(!empty($request->myCheckboxes))
        {
        $opdtreatments->refTo=implode(',',$request->myCheckboxes);
         }
        $opdtreatments->consultant=$request->consultant;
        if($opdtreatments->save())
        {
            return response()->json(['status'=>true]);
        }
        else
        {
            return response()->json(['status'=>false]);   
        }

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
