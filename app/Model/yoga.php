<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\yoga;
use App\Model\opd;
use App\Model\doctorlist;
class yoga extends Model
{
    public function opd()
    {
    	return $this->belongsTo(opd::class,'patientId','id');
    }
     
    public function diseaseName()
    {
    	return $this->hasOne(disease::class,'id','disease');
    } 

}
