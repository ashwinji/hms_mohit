<?php

namespace App\Http\Controllers;

use App\Model\department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departmentlist=department::all();
        return view('otherlist.department.dapartment',compact('departmentlist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('otherlist.department.adddepartment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $department= new department;
            $department->name=$request->name;
            $department->save();
            return redirect(route('department'))->with('message','data added successfuly');
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
        $department=department::where('id',$id)->first();
        return view('otherlist.department.edit',compact('department'));
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
        $department=department::where('id',$id)->first();

        $department->update($request->all());

        return redirect()->route('department')->with('message','update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\doctorlist  $doctorlist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             department::find($id)->delete($id);
              return back()->with('message','delete successfuly');
     
    }
}
