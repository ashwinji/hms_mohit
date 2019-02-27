<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\opd;
use App\Model\ot;
use App\Model\ipd;
use App\Model\opdtreatments;
use App\Model\ipdtreatments;
use App\Model\ecgexamination;
use App\Model\doctorlist;
use App\Model\department;
use App\Model\bloodexamination;
use App\Model\generalblood;
use App\Model\urineexamination;
use App\Model\medicine;
class opd extends Model
{

	public function doctorName()
	{
		return $this->hasOne(doctorlist::class,'id','consultant');
	}
    public function departmentName()
	{
		return $this->hasOne(department::class,'id','department');
	}
	public function medicineName()
	{
		return $this->hasOne(medicine::class,'id','medicine');
	}
	public function opdTreatmentDetails()
     {
          return $this->hasMany(opdtreatments::class,'patientId','id');
     }
   
	public function IpdTreatmentDetails()
	{
		return $this->hasmany(ipdtreatments::class,'patientId','id');
	}
	
	public function bloodExamData()
	{
		return $this->hasMany(bloodexamination::class,'patientId','id');
	}
     public function generalBlood()
     {
     	return $this->hasMany(generalblood::class,'patientId','id');
     }
     public function semeneExamData()
     {
     	return $this->hasMany(semenexamination::class,'patientId','id');
     }
     public function serunExamData()
     {
     	return $this->hasMany(serumofwidal::class,'patientId','id');
     }
     public function stoolExamData()
     {
     	return $this->hasMany(stoolexamination::class,'patientId','id');
     }
     public function urineExamData()
     {
     	return $this->hasMany(urineexamination::class,'patientId','id');
     }
     	public function IpdData()
     {
     	return $this->hasOne(ipd::class,'patientId','id');
     }
 }

