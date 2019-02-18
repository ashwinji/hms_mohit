<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Phistory extends Model
{
    public function opd()
	{
	   return $this->belongsTo('App\Model\opd','patientId','id');
	}
	 public function opdtreatment()
	{
	   return $this->belongsTo('App\Model\opdtreatment','patientId','id');
	}
}
}
