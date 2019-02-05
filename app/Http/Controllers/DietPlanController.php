<?php

namespace App\Http\Controllers;

use App\Model\dietplan;
use Illuminate\Http\Request;

class DietPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dietPlanlist=dietplan::all();
        return view('otherlist.dietPlan.dietplan',compact('dietPlanlist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('otherlist.dietPlan.adddietPlan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $dietPlan= new dietplan;
            $dietPlan->name=$request->name;
            $dietPlan->save();
            return redirect(route('dietPlan'))->with('message','data added successfuly');
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
        $dietPlan=dietplan::where('id',$id)->first();
        return view('otherlist.dietPlan.edit',compact('dietPlan'));
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
        $dietPlan=dietplan::where('id',$id)->first();

        $dietPlan->update($request->all());

        return redirect()->route('dietPlan')->with('message','update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\doctorlist  $doctorlist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             dietplan::find($id)->delete($id);
              return back()->with('message','delete successfuly');
     
    }
}
