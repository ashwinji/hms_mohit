<?php

namespace App\Http\Controllers;

use App\model\ipd;
use Illuminate\Http\Request;

class IpdController extends Controller
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
        return view('ipd.create');
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
        $ipd=ipd::create($request->all());
        $ipd->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ipd  $ipd
     * @return \Illuminate\Http\Response
     */
    public function show(ipd $ipd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ipd  $ipd
     * @return \Illuminate\Http\Response
     */
    public function edit(ipd $ipd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ipd  $ipd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ipd $ipd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ipd  $ipd
     * @return \Illuminate\Http\Response
     */
    public function destroy(ipd $ipd)
    {
        //
    }
}
