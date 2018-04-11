<?php

use Faker\Generator as Faker;

$factory->define(App\Feito::class, function (Faker $faker) {
    return [
        'nome' => 'default',
        'graduacao_maxima' => 0
    ];
});
