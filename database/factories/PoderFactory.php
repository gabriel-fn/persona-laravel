<?php

use Faker\Generator as Faker;

$factory->define(App\Poder::class, function (Faker $faker) {
    return [
        'nome' => 'default',
        'efeito' => '',
        'acao' => '',
        'alcance' => '',
        'duracao' => '',
        'salvamento' => '',
        'custo_max' => 1,
        'custo_min' => 1,
    ];
});

$factory->define(App\PoderPersona::class, function (Faker $faker) {
    return [
        'graduacao' => rand(1,20),
    ];
});
