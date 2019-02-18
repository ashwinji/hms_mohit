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
use App\Model\ipdtreatments;
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
        $ipdData=ipd::where('patientId',$id)->first();
        $ipdTreatmentData=ipdtreatments::where('patientId',$id)->get();
        $bloodData=bloodexamination::where('patientId',$id)->first();
        $semenData=semenexamination::where('patientId',$id)->first();
        $serunData=serumofwidal::where('patientId',$id)->first();
        $stoolData=stoolexamination::where('patientId',$id)->first();
        $urineData=urineexamination::where('patientId',$id)->first();
        $content=\View::make('patienthistory.viewhistory',compact('data','ipdData','bloodData','semenData','serunData','stoolData','urineData','ipdTreatmentData'));
        $a=$content->render();
        return response()->json([

            'html'=>$a,
            'status'=>true,
        ],200);
    
    }

    
}
