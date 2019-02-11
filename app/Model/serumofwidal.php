<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\Model\opd;
use App\Model\ot;
use App\Model\ipd;
use App\Model\ecgexamination;
use App\Model\generalblood;

class serumofwidal extends Model
{
  protected $fillable=[
 'patientId',
 'referredBy',
 'age',
 'investigationAdvised', 
 'date',
 'sTyphiO',
 'sTyphiH',
 'sTyphiAH',
 'sTyphiBH',
 'impression', 
  ];
   public function opd()
    {

      return $this->belongsTo(opd::class,'patientId','id');

    }
}
