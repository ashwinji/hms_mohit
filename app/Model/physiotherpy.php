<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class physiotherpy extends Model
{
	 protected $fillable = [
     'patientId',
     'referredBy',
     'age',
     'investigationAdvised',
     'phyadate',
     'disease',
     'therapy',
     'other',
     'remark',
    ];
}
