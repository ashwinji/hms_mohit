<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use App\Model\opd;
use App\Model\ot;
use App\Model\ipd;
use App\Model\ecgexamination;
use App\Model\doctorlist;
use App\Model\department;
use App\Model\medicine;

class ot extends Model
{
	public function opd()
	{
	   return $this->belongsTo(opd::class,'patientId','id');
	}
	public function doctorName()
	{
		return $this->hasOne(doctorlist::class,'id','consultant');
	}
	public function medicineName1()
	{
		return $this->hasOne(medicine::class,'id','medicine1');
	}
	public function medicineName2()
	{
		return $this->hasOne(medicine::class,'id','medicine2');
	}
	public function medicineName3()
	{
		return $this->hasOne(medicine::class,'id','medicine3');
	}
}

