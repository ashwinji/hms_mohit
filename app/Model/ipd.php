<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\opd;
use App\Model\ot;
use App\Model\ipd;
use App\Model\ecgexamination;
use App\Model\doctorlist;
use App\Model\department;
use App\Model\potency;
use App\Model\wardname;
use App\Model\medicine;
use App\Model\dietplan;

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
'gastroIntestinalSystem',
'cardioVascularSystem',
'centralNervousSystem',
'localExamination',
'investigation1',
'investigation2',
'investigation3',
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
	  return $this->belongsTo(opd::class,'patientId','id');
	}
  

    public function doctorName()
    {
    	return $this->hasOne(doctorlist::class,'id','consultant');
    }
    public function departmentName() {
        return $this->hasOne(department::class,'id','department');
    }
    public function getMedicine1()
    {
        return $this->hasOne(medicine::class,'id','medicine1');
    }
    public function getMedicine2()
    {
        return $this->hasOne(medicine::class,'id','medicine2');
    }
    public function getMedicine3()
    {
        return $this->hasOne(medicine::class,'id','medicine3');
    }
     public function getInvestigation1()
    {
        return $this->hasOne(investigation::class,'id','investigation1');
    }
    public function getInvestigation2()
    {
        return $this->hasOne(investigation::class,'id','investigation2');
    }
    public function getInvestigation3()
    {
        return $this->hasOne(investigation::class,'id','investigation3');
    }
    public function getWardName()
    {
        return $this->hasOne(wardname::class,'id','wardName');
    }
    public function getPotency1()
    {
       return $this->hasOne(potency::class,'id','potency1');
    }
    public function getPotency2()
    {
         return $this->hasOne(potency::class,'id','potency2');
    }
     public function getPotency3()
    {
         return $this->hasOne(potency::class,'id','potency3');
    }
    public function getDietPlan1()
    {
        return $this->hasOne(dietplan::class,'id','dietPlan1');
    }
    public function getDietPlan2()
    {
        return $this->hasOne(dietplan::class,'id','dietPlan2');
    }

}
