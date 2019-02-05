<?php

namespace App\Http\Controllers;

use App\Model\potency;
use Illuminate\Http\Request;

class PotencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $potencylist=potency::all();
        return view('otherlist.potency.potency',compact('potencylist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('otherlist.potency.addpotency');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $potency= new potency;
            $potency->name=$request->name;
            $potency->save();
            return redirect(route('potency'))->with('message','data added successfuly');
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
        $potency=potency::where('id',$id)->first();
        return view('otherlist.potency.edit',compact('potency'));
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
        //dd($id);
        $potency=potency::where('id',$id)->first();

        $potency->update($request->all());

        return redirect()->route('potency')->with('message','update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\doctorlist  $doctorlist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             potency::find($id)->delete($id);
              return back()->with('message','delete successfuly');
     
    }
}
