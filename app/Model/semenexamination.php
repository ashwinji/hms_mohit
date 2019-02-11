<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\Model\opd;
use App\Model\ot;
use App\Model\ipd;
use App\Model\ecgexamination;
use App\Model\generalblood;

class semenexamination extends Model
{
    protected $fillable=[

        'patientId',
        'referredBy',
       'age',
       'investigationAdvised',
       'date', 
       'placeOfCollection',
       'timeOfCollectionInLab',
        'quantity',
        'consistency',
        'colour',
        'ph', 
        'liquficationTime', 
        'viscocity',
        'count',
        'motility',
        'abnormalForms',
        'pusCells', 
        'epithelialCells', 
        'rbcs',
        'fructoseTest',
        'other',
             
    ];

     public function opd()
    {

      return $this->belongsTo(opd::class,'patientId','id');

    }
}
