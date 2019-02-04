<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\opd;
use App\Model\ot;
use App\Model\ipd;
use App\Model\ecgexamination;
use App\Model\doctorlist;
use App\Model\department;
class opd extends Model
{

	public function doctorName()
	{
		return $this->hasOne(doctorlist::class,'id','consultant');
	}
    public function departmentName()
	{
		return $this->hasOne(department::class,'id','department');
	}
 }

