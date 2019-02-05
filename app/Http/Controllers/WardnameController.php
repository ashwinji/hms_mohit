<?php

namespace App\Http\Controllers;

use App\Model\wardname;
use Illuminate\Http\Request;

class WardnameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
    
        $wardnamelist=wardname::paginate(2);

        return view('otherlist.wardname.wardname',compact('wardnamelist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('otherlist.wardname.addwardname');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $wardname= new wardname;
            $wardname->name=$request->name;
            $wardname->save();
            return redirect(route('wardname'))->with('message','data added successfuly');
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
        $wardname=wardname::where('id',$id)->first();
        return view('otherlist.wardname.edit',compact('wardname'));
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
        $wardname=wardname::find($id)->first();

        $doctor->update($request->all());

        return redirect()->route('wardname')->with('message','update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\doctorlist  $doctorlist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             wardname::find($id)->delete($id);
              return back()->with('message','delete successfuly');
     
    }
}
