<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\medicine;

class opdtreatments extends Model
{
    public function medicineName()
	{
		return $this->hasOne(medicine::class,'id','medicine');
	}
}
