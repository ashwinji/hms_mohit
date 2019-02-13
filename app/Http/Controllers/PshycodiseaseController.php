<?php

namespace App\Http\Controllers;

use App\Model\pshycodisease;
use Illuminate\Http\Request;

class PshycodiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
    
        $phycodiseaselist=pshycodisease::all();

        return view('otherlist.pshycodisease.showphydisease',compact('phycodiseaselist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('otherlist.pshycodisease.addphydisease');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $disease= new pshycodisease;
            $disease->name=$request->name;
            $disease->save();
            return redirect(route('phycodisease'))->with('message','data added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\doctorlist  $doctorlist
     * @return \Illuminate\Http\Response
     */
    public function show(doctorlist $doctorlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\doctorlist  $doctorlist
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disease=pshycodisease::where('id',$id)->first();
        return view('otherlist.pshycodisease.editphydisease',compact('disease'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\doctorlist  $doctorlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $disease=pshycodisease::find($id)->first();

        $disease->update($request->all());

        return redirect()->route('phycodisease')->with('message','update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\doctorlist  $doctorlist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             pshycodisease::find($id)->delete($id);
              return back()->with('message','delete successfuly');
     
    }
}
