<?php

use Faker\Generator as Faker;

$factory->define(App\Feito::class, function (Faker $faker) {
    return [
        'label' => 'default',
        'max' => 0,
        'min' => 1
    ];
});
