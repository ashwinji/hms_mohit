<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class opd extends Model
{
    public function ot()
    {
    	return $this->hasOne('App\Model\ot','patientId','id');
    }
    // public function ipd()
    // {
    // 	return $this->hasOne('App\Model\ipd','patientId','id');
    // }
    // public function physiotherpy()
    // {
    // 	return $this->hasOne('App\Model\physiotherpy','patientId','id');
    // }
}
