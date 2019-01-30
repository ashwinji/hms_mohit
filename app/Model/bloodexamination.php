<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

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

}
