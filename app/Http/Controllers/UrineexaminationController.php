<?php

namespace App\Http\Controllers;

use App\urineexamination;
use Illuminate\Http\Request;

class UrineexaminationController extends Controller
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
        return view('testreport.urinexamination.create');
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
     * @param  \App\urineexamination  $urineexamination
     * @return \Illuminate\Http\Response
     */
    public function show(urineexamination $urineexamination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\urineexamination  $urineexamination
     * @return \Illuminate\Http\Response
     */
    public function edit(urineexamination $urineexamination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\urineexamination  $urineexamination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, urineexamination $urineexamination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\urineexamination  $urineexamination
     * @return \Illuminate\Http\Response
     */
    public function destroy(urineexamination $urineexamination)
    {
        //
    }
}
