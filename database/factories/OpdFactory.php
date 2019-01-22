<?php

use Faker\Generator as Faker;
use App\Model\opd;

$factory->define(App\Model\opd::class, function (Faker $faker) {
    return [
        'orderId'=>$faker->randomNumber,
        'id'=>$faker->randomNumber,
        'patientTitle'=>$faker->title,
        'patientName'=>$faker->name,
        'regNum'=>$faker->randomNumber,
        'regDate'=>$faker->date,
        'regAmount'=>$faker->numberBetween($min = 1000, $max = 9000),
        'address'=>$faker->address,
         'age'=>$faker->numberBetween($min = 1, $max = 100),
        'gender'=>$faker->randomElement($array = array ('Male','Female')),
        'contactNum'=>$faker->phoneNumber,
        'consultant'=>$faker->name,
        'otherConsultant'=>$faker->name,
        'department'=>$faker->text,
        'patientType'=>$faker->randomElement($array = array ('O','N')),
        'patientTypeIpd'=>$faker->randomElement($array = array ('O','N')),
        'dltStatus'=>$faker->randomElement($array = array ('O','N')),
        'created_at'=>$faker->Datetime,
        'updated_at'=>$faker->Datetime,
    ];
});
