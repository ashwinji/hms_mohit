<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\medicine;
use App\Model\opd;

class opdtreatments extends Model
{
    public function medicineName()
	{
		return $this->hasOne(medicine::class,'id','medicine');
	}
	 public function opd()
	{
	  return $this->belongsTo(opd::class,'patientId','id');
	}
  
}
