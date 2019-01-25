<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ot extends Model
{
	public function opd()
	{
	   return $this->hasOne('App\Model\opd','orderId');
	}
}
