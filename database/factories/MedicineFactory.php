<?php

use Faker\Generator as Faker;

$factory->define(App\Model\medicine::class, function (Faker $faker) {
    return [
        'id'=>$faker->randomNumber,
        'name'=>$faker->name,
    ];
});
