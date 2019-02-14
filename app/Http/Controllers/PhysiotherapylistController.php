<?php

namespace App\Http\Controllers;

use App\Model\physiotherapylist;
use App\Model\pshycodisease;
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
        return view('otherlist.physiotherapylist.addphysiotherapylist',compact('disease'));
    }

    public function store(Request $request)
    {
            $physiotherapy= new physiotherapylist;
            $physiotherapy->disease=$request->disease;
            $physiotherapy->therapy=$request->therapy;
            $physiotherapy->save();

            return redirect()->route('physiotherapylist');
    }

    public function destroy(request $request,$id)
    {
        $physiotherapy=physiotherapylist::where('id',$id)->delete();
        return back();
    }

    public function edit(request $request,$id)
    {
        $physiotherapy=physiotherapylist::where('id',$id)->first();
        return view('otherlist.physiotherapylist.editphysiotherapylist',compact('physiotherapy'));
    }

    public function update(Request $request,$id)
    {
        $physiotherapy=physiotherapylist::findorfail($id);

        $physiotherapy->update($request->all());

        return redirect()->route('physiotherapylist');
        
    }
    public function gettherapy(Request $request)
    {

      $val=$request->all();
      $id=$request->id;
      $data=physiotherapylist::where('disease',$id)->pluck('therapy')->toArray();
      $therapy=implode(",",$data);
      return response()->json(['therapy'=>$therapy,'status'=>true]);

    }
}
