<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\opd;
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
