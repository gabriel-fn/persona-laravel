<?php

use Faker\Generator as Faker;

$factory->define(App\Desvantagem::class, function (Faker $faker) {
    return [
        'nome' => 'default',
        'graduacao_min' => 1,
        'graduacao_max' => 5,
    ];
});
