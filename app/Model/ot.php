<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ot extends Model
{
	public function opd()
	{
	   return $this->belongsTo('App\Model\opd','patientId','id');
	}
	
}