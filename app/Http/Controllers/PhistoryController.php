<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\opd;
use App\Model\ipd;
use App\Model\bloodexamination;
use App\Model\semenexamination;
use App\Model\serumofwidal;
use App\Model\stoolexamination;
use App\Model\urineexamination;
use DataTables;


class PhistoryController extends Controller
{
        public function index()
    {
        return view('patienthistory.phistory');
    }


    public function showhistory()
    {

         return DataTables::of(opd::select('id','patientName','regNum','gender','regDate','address'))
        ->addColumn('action', function($data){
          return '<a style="margin-left:25px;" href="javascript:void(0);" class="btn btn-sm btn-info fa fa-eye view" id="'.$data->id.'"></a>';

          
        })

          ->addColumn('order',function($data){
            static $i=1;
            return $i++;
         })->make(true);
    }

    public function historyView(Request $request)
    {
        $id=$request->id;
        $data=opd::where('id',$id)->first();
        $ipddata=ipd::where('patientId',$id)->first();
        $blooddata=bloodexamination::where('patientId',$id)->first();
        $semendata=semenexamination::where('patientId',$id)->first();
        $serundata=serumofwidal::where('patientId',$id)->first();
        $stooldata=stoolexamination::where('patientId',$id)->first();
        $urinedata=urineexamination::where('patientId',$id)->first();
        $content=\View::make('patienthistory.viewhistory',compact('data','ipddata','blooddata','semendata','serundata','stooldata','urinedata'));
        $a=$content->render();
        return response()->json([

            'html'=>$a,
            'status'=>true,
        ],200);
    
    }

    
}
