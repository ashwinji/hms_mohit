<?php

use Faker\Generator as Faker;
use App\Model\ot;
$factory->define(App\Model\ot::class, function (Faker $faker) {
    return [
        
         'id'=>$faker->randomNumber,
         'patientId'=>$faker->randomNumber,
         'opdDate'=>$faker->date,
         'ipdRegNum'=>$faker->randomNumber,
         'ipdRegDate'=>$faker->date,
         'otDate'=>$faker->date,
         'dignosis'=>$faker->title,
         'otProcessure'=>$faker->name,
         'consultant'=>$faker->name,
         'otherConsultant'=>$faker->name,
         'adviceTreatment'=>$faker->title,
         'medicine1'=>$faker->title,
         'medicine2'=>$faker->title,
         'medicine3'=>$faker->title,
         'remark'=>$faker->title,
        'created_at'=>$faker->Datetime,
        'updated_at'=>$faker->Datetime,
    ];
});
