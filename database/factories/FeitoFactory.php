<?php

use Faker\Generator as Faker;

$factory->define(App\Feito::class, function (Faker $faker) {
    return [
        'nome' => 'default',
        'graduacao_max' => 0,
        'graduacao_min' => 1
    ];
});
