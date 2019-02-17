<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\medicine;


class ipdtreatments extends Model
{
    
 public function getMedicineName()
	{
		return $this->belongsTo(medicine::class,'medicine','id');
	}
	public function getPotencyName()
	{
		return $this->hasOne(potency::class,'id','potency');
	}
	public function getDoctorName()
    {
    	return $this->hasOne(doctorlist::class,'id','consultant');
    }
	
	public function getInvestigationName()
    {
        return $this->hasOne(investigation::class,'id','advice');
    }
}
