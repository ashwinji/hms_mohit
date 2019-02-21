<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Opd;
use App\Model\ipd;
use App\Model\xray;
use App\Model\department;
use App\Model\Wardname;
use App\User;
use Carbon\Carbon;
use DataTables;
use DB;


class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function opdDate()
    {
        $data=department::all()->pluck('name','id');
      return view('report.OpddateWise.reportopdDate',compact('data'));
    }
    public function opdMonth()
    {
        $data=department::all()->pluck('name','id');
      return view('report.OpdMonthWise.reportodpMonth',compact('data'));
    }
      public function opd()
    {
        $data=department::all()->pluck('name','id');
      return view('report.OpdReport.reportopd',compact('data'));
    }
     public function opdTreatment()
    {
    
      return view('report.OpdTreatmentlist.reportopdtreatement');
    }

     public function ipdDate()
    {
        $data=department::all()->pluck('name','id');
      return view('report.IpddateWise.reportipddatewise',compact('data'));
    }
    public function ipdMonth()
    {
        $data=department::all()->pluck('name','id');
      return view('report.IpdMonthWise.reportipdmonthwise',compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
