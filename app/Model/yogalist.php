<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class yogalist extends Model
{
    protected $fillable=[
    

     'disease',
     'exersise',

    ];
      public function diseaseName()
    {
        return $this->hasOne(disease::class,'id','disease');
    }
}
