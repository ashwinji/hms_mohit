<?php

use Faker\Generator as Faker;
use App\Model\doctorlist;
use App\Model\opd;
$factory->define(App\Model\doctorlist::class, function (Faker $faker) {
    return [
        
        'id'=>$faker->randomNumber,
        'name'=>$faker->name,
    ];
});
