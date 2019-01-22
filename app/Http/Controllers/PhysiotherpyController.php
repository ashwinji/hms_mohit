<?php

namespace App\Http\Controllers;

use App\model\physiotherpy;
use Illuminate\Http\Request;

class PhysiotherpyController extends Controller
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
        return view('physiotherpy.create');
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


        ]);

        $physiotherpy=physiotherpy::create($request->all());
        $physiotherpy->save();
        return redirect (route('physiotherpy-create'))->with('message','data save sussefully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\physiotherpy  $physiotherpy
     * @return \Illuminate\Http\Response
     */
    public function show(physiotherpy $physiotherpy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\physiotherpy  $physiotherpy
     * @return \Illuminate\Http\Response
     */
    public function edit(physiotherpy $physiotherpy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\physiotherpy  $physiotherpy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, physiotherpy $physiotherpy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\physiotherpy  $physiotherpy
     * @return \Illuminate\Http\Response
     */
    public function destroy(physiotherpy $physiotherpy)
    {
        //
    }
}
