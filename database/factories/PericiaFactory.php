<?php

use Faker\Generator as Faker;

$factory->define(App\Pericia::class, function (Faker $faker) {
    return [
        'label' => 'default',
        'bonus_key' => 'default',
        'max' => 0,
        'min' => 1 
    ];
});
