<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\opd;
use App\Model\ot;
use App\Model\ipd;
use App\Model\ecgexamination;

class ecgexamination extends Model
{
   
    protected $fillable = [

		'patientId',
		'referredBy',
		'age', 
		'date',
		'remark',
];
    public function opd()
    {

    	return $this->belongsTo(opd::class,'patientId','id');
}
}