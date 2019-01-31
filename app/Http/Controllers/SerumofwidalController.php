<?php

namespace App\Http\Controllers;

use App\serumofwidal;
use Illuminate\Http\Request;

class SerumofwidalController extends Controller
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
        return view('testreport.serunofwidal.create');
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
     * @param  \App\serumofwidal  $serumofwidal
     * @return \Illuminate\Http\Response
     */
    public function show(serumofwidal $serumofwidal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\serumofwidal  $serumofwidal
     * @return \Illuminate\Http\Response
     */
    public function edit(serumofwidal $serumofwidal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\serumofwidal  $serumofwidal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, serumofwidal $serumofwidal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\serumofwidal  $serumofwidal
     * @return \Illuminate\Http\Response
     */
    public function destroy(serumofwidal $serumofwidal)
    {
        //
    }
}
