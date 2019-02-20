<?php

namespace App\Http\Controllers;

use App\Model\ipdtreatments;
use Illuminate\Http\Request;

class IpdtreatmentsController extends Controller
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
        // return $request->all();
      
         $ipdtreatments=new ipdtreatments();
        $ipdtreatments->patientId=$request->patientId;
        $ipdtreatments->complaint=$request->complaint;
        $ipdtreatments->ipdId=$request->ipdId;
        $ipdtreatments->treatmentDate=$request->treatmentDate;
        $ipdtreatments->treatment=$request->treatment;
        $ipdtreatments->medicine=$request->medicine;
        $ipdtreatments->potency=$request->potency;
        $ipdtreatments->advice=$request->investigation;
        $ipdtreatments->nod=$request->nod;
        $ipdtreatments->remark=$request->remark;
        //when we pass the whole array valu in one variable
        if(!empty($request->myCheckboxes))
        { 
        $ipdtreatments->refTo=implode(',',$request->myCheckboxes);
         }
        $ipdtreatments->consultant=$request->consultant;
        $ipdtreatments->save();
            return response()->json([
           'status'=>true,
         ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ipdtreatments  $ipdtreatments
     * @return \Illuminate\Http\Response
     */
    public function show(ipdtreatments $ipdtreatments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ipdtreatments  $ipdtreatments
     * @return \Illuminate\Http\Response
     */
    public function edit(ipdtreatments $ipdtreatments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ipdtreatments  $ipdtreatments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ipdtreatments $ipdtreatments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ipdtreatments  $ipdtreatments
     * @return \Illuminate\Http\Response
     */
    public function destroy(ipdtreatments $ipdtreatments)
    {
        //
    }
}
