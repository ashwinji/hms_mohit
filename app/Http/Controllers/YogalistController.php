<?php

namespace App\Http\Controllers;

use App\Model\yogalist;
use App\Model\doctorlist;
use App\Model\disease;
use Illuminate\Http\Request;

class YogalistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $yogalistdata=yogalist::all();
        return view('otherlist.yogalist.yogalist',compact('yogalistdata'));
    }

    public function create()
    {
        $disease=disease::all()->pluck('name','id');
        return view('otherlist.yogalist.addyogalist',compact('disease'));
    }

    public function store(Request $request)
    {
            $yogaliststore= new yogalist;
            $yogaliststore->disease=$request->disease;
            $yogaliststore->exersise=$request->exersise;
            $yogaliststore->save();

            return redirect()->route('yogalist');
    }

    public function destroy(request $request,$id)
    {
        $yogalistdelete=yogalist::where('id',$id)->delete();
        return back();
    }

    public function edit(request $request,$id)
    {
        $yogalist=yogalist::where('id',$id)->first();
        return view('otherlist.yogalist.edityogalist',compact('yogalist'));
    }

    public function update(Request $request,$id)
    {
        $yogalist=yogalist::findorfail($id);

        $yogalist->update($request->all());

        return redirect()->route('yogalist');
        
    }
    public function getexercise(Request $request)
    {

      $val=$request->all();
      $id=$request->id;
      $data=yogalist::where('disease',$id)->pluck('exersise')->toArray();
      $excersise=implode(",",$data);
      return response()->json(['excersise'=>$excersise,'status'=>true]);

    }
}
