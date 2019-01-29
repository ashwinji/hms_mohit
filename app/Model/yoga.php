<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\Model\yoga;
use App\Model\opd;
class yoga extends Model
{
    public function opd()
    {
    	return $this->belongsTo(opd::class,'patientId','id');
    }
}
