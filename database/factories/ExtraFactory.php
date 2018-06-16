<?php

use Faker\Generator as Faker;

$factory->define(App\Extra::class, function (Faker $faker) {
    return [
        'nome' => 'default',
        'modificador_max' => 1,
        'modificador_min' => 1, 
    ];
});
