<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\Model\opd;
use App\Model\ot;
use App\Model\ipd;
use App\Model\doctorlist;
class physiotherpy extends Model
{
	 protected $fillable = [
     'patientId',
     'referredBy',
     'age',
     'investigationAdvised',
     'phyadate',
     'disease',
     'therapy',
     'other',
     'remark',
    ];
    public function opd()
     {
        return $this->belongsTo(opd::class,'patientId','id');
     }
    
    public function diseaseName()
    {
        return $this->hasOne(disease::class,'id','disease');
    }

}
