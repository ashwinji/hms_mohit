<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\Model\opd;
use App\Model\ot;
use App\Model\ipd;
use App\Model\ecgexamination;
use App\Model\generalblood;
use App\Model\stoolexamination;

class stoolexamination extends Model
{
    protected $fillable=
    [
 'patientId', 
 'referredBy', 
 'age',
 'investigationAdvised', 
 'date',
 'colour',
 'consistency',
 'mucus',
 'blood',
 'pusCells', 
 'rbcs', 
 'vegetableMatter',
 'cysts', 
  'giardia',
 'eHistolytica',
  'eCoil',
  'ova',
  'worms',
  'occultBlood',
  'reducingSubstances',
  'other',
    ];

  public function opd()
    {

      return $this->belongsTo(opd::class,'patientId','id');

    }

}
