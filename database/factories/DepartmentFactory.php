<?php

use Faker\Generator as Faker;

$factory->define(App\Model\department::class, function (Faker $faker) {
    return [
        
        'id'=>$faker->randomNumber,
        'name'=>$faker->name,
    ];
});
