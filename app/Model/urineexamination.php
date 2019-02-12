<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class urineexamination extends Model
{
      protected $fillable=[
         'patientId',
         'referredBy',
         'age',
         'investigationAdvised',
         'date',
         'sample',
         'quantity',
         'colour',
         'spGravity',
         'reaction',
         'albumin',
          'suger',
          'bileSalts', 
          'bilePigments',
          'acetone',
          'benceJonesProteins',
          'pusCells',
          'epithellalCells',
          'crystals',
          'rbs', 
          'bacteria', 
          'cast',
          'others', 
          ];


public function opd()
{
	return $this->belongsTo(opd::class,'patientId','id');
}
}
