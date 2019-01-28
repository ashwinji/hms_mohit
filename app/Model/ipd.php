<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ipd extends Model
{
    protected $fillable = [
'patientId',
'opdDate',
'ipdRegNum',
'ipdRegDate',
'consultant',
'otherConsultant',
'prefixName',
'refName',
'wardName',
'bedNum',
'dod',
'provisionalDiagnosis',
'chiefComplaints',
'pastHistory',
'fh_maternal',
'fh_paternal',
'fh_other',
'ge_gc',
'ge_anaemla',
'ge_bowel',
'ge_pulse',
'ge_jvp',
'ge_sleep',
'ge_temp',
'ge_oedema',
'itlge_allergies',
'ge_resp',
'ge_cyanosis',
'ge_skin',
'ge_bp',
'ge_thirst',
'ge_tongue',
'ge_lymph',
'tlge_addictions',
'tlge_conjective',
'ge_diet',
'ecgTest',
'respiratorySystem',
'stroIntestinalSystem',
'cardioVascularSystem',
'centralNervousSystem',
'localExamination',
'linvestigation1',
'linvestigation2',
'linvestigation3',
'medicine1',
'potency1',
'medicine2',
'potency2',
'medicine3',
'potency3',
'dietPlan1',
'diet1Text',
'dietPlan2',
'diet2Text',
'yoga',
'physiotherapy',
'remark',
'dltStatus'
    ];
   public function opd()
	{
	   return $this->belongsTo('App\Model\opd','patientId','id');
	}

   
}
