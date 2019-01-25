<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class opd extends Model
{
    public function ot()
    {
    	return $this->belongsTo('App\Model\ot','patientId');
    }
}
