<?php

namespace App\Http\Controllers;

use App\Model\physiotherapylist;
use Illuminate\Http\Request;

class PhysiotherapylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $physiotherapylist=physiotherapylist::all();
        return view('otherlist.physiotherapylist.physiotherapylist',compact('physiotherapylist'));
    }

    public function create()
    {
        $disease=pshycodisease::all()->pluck('name','id');
        return view('otherlist.yogalist.addyogalist',compact('disease'));
    }

    public function store(Request $request)
    {
            $yogaliststore= new physiotherapylist;
            $yogaliststore->disease=$request->disease;
            $yogaliststore->exersise=$request->therapy;
            $yogaliststore->save();

            return redirect()->route('physiotherapylist');
    }

    public function destroy(request $request,$id)
    {
        $yogalistdelete=physiotherapylist::where('id',$id)->delete();
        return back();
    }

    public function edit(request $request,$id)
    {
        $yogalist=yogalist::where('id',$id)->first();
        return view('otherlist.physiotherapylist.editphysiotherapylist',compact('yogalist'));
    }

    public function update(Request $request,$id)
    {
        $yogalist=physiotherapylist::findorfail($id);

        $yogalist->update($request->all());

        return redirect()->route('physiotherapylist');
        
    }
    public function gettherapyss(Request $request)
    {

      $val=$request->all();
      $id=$request->id;
      $data=physiotherapylist::where('disease',$id)->pluck('therapy')->toArray();
      $therapy=implode(",",$data);
      return response()->json(['therapy'=>$therapy,'status'=>true]);

    }
}
