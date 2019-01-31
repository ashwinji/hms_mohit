<?php

namespace App\Http\Controllers;

use App\Model\ecgexamination;
use Illuminate\Http\Request;
use App\Model\bloodexamination;
use App\Model\ot;
use App\Model\opd;
use DB;
use DataTables;


class EcgexaminationController extends Controller
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
        return view('testreport.ecg.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ecg=ecgexamination::create($request->all());
        $ecg->save();
         return redirect (route('ecg-create'))->with('message','data save sussefully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ecgexamination  $ecgexamination
     * @return \Illuminate\Http\Response
     */
    public function show(ecgexamination $ecgexamination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ecgexamination  $ecgexamination
     * @return \Illuminate\Http\Response
     */
    public function edit(ecgexamination $ecgexamination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ecgexamination  $ecgexamination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ecgexamination $ecgexamination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ecgexamination  $ecgexamination
     * @return \Illuminate\Http\Response
     */
    public function destroy(ecgexamination $ecgexamination)
    {
        //
    }
}
