<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\Model\opd;
use App\Model\ot;
use App\Model\ipd;
use App\Model\ecgexamination;
use App\Model\generalblood;
class generalblood extends Model
{
       protected $fillable = [
'patientId', 
'referredBy', 
'age', 
'investigationAdvised',
'date',
'bloodFasting',
'bloodRandom',
'bloodPP', 
'urea',
'creatinine', 
'uricAcid', 
'totalBilirubin',
'directBilirubin',
'sgptAlt',
 'sgotAst',
 'alkPhosphatase', 
 'totalProtein', 
 'albumin', 
 'agRatio',
];
   public function opd()
    {

    	return $this->belongsTo(opd::class,'patientId','id');

    }
}