<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ecgexamination extends Model
{
   
    protected $fillable = [

		'patientId',
		'referredBy',
		'age', 
		'date',
		'remark',
];
}
