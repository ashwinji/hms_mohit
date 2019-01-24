<?php

use Faker\Generator as Faker;
use App\Model\doctorlist;
$factory->define(App\Model\doctorlist::class, function (Faker $faker) {
    return [
        
        'id'=>$faker->randomNumber,
        'name'=>$faker->name,
    ];
});
