<?php

use Faker\Generator as Faker;
use App\Model\investigation;
$factory->define(App\Model\investigation::class, function (Faker $faker) {
    return [
          'id'=>$faker->numberBetween(1,10),
        'name'=>$faker->name,
    ];
});
