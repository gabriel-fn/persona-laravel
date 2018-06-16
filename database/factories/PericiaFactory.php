<?php

use Faker\Generator as Faker;

$factory->define(App\Pericia::class, function (Faker $faker) {
    return [
        'nome' => 'default',
        'habilidade_chave' => '',
        'graduacao_max' => 0,
        'graduacao_min' => 1 
    ];
});
