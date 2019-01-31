<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\opd;
use App\Model\ot;
use App\Model\ipd;
class bloodexamination extends Model
{
    protected $fillable = [


   'patientId', 
   'referredBy',
   'age', 
   'investigationAdvised', 
   'date', 
   'haemoglobin',
   'totalRBCCount', 
   'totalWBCCount', 
   'polymorphs', 
   'lymphocytes', 
   'eosinophils',
   'monocytes', 
   'basophils',
   'ers',
   'plateletCount',
   'reticulocytes',
   'pcv', 
   'mcv', 
   'mch',
   'mchc', 
   'bleedingTime',
   'clottingTime', 
   'malarialParasite',
   'remark',
];
public function opd()
     {
        return $this->belongsTo(opd::class,'patientId','id');
     }

}
