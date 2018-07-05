<?php

use Faker\Generator as Faker;
use App\Opcao;

$factory->define(Opcao::class, function (Faker $faker) {
    return [
        'nome' => 'default',
        'modificador_min' => 1,
        'modificador_max' => 1,
    ];
});
