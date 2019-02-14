<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class physiotherapylist extends Model
{
     protected $fillable=[
    

     'disease',
     'therapy',


    ];

    public function diseaseName()
    {
        return $this->hasOne(pshycodisease::class,'id','disease');
    }
}
