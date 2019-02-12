<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class xray extends Model
{
    protected $fillable=[

   'patientId',
   'referredBy',
   'age',
   'investigationAdvised',
   'date',
   'description',
   'remark', 

    ];
    public function opd()
    {
    	return $this->belongsTo(opd::class,'patientId','id');
    }
}
