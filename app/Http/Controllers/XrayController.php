<?php

namespace App\Http\Controllers;

use App\xray;
use Illuminate\Http\Request;

class XrayController extends Controller
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
       return view('testreport.xray');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\xray  $xray
     * @return \Illuminate\Http\Response
     */
    public function show(xray $xray)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\xray  $xray
     * @return \Illuminate\Http\Response
     */
    public function edit(xray $xray)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\xray  $xray
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, xray $xray)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\xray  $xray
     * @return \Illuminate\Http\Response
     */
    public function destroy(xray $xray)
    {
        //
    }
}
