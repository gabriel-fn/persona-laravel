<?php

use Faker\Generator as Faker;
use App\Persona;

$factory->define(Persona::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 2),
        'nome' => $faker->name,
        'np' => rand(0, 20),

        'forca' => rand(0, 20),
        'destreza' => rand(0, 20),
        'constituicao' => rand(0, 20),
        'inteligencia' => rand(0, 20),
        'sabedoria' => rand(0, 20),
        'carisma' => rand(0, 20),

        'dano' => rand(0, 5),
        'ataque' => rand(0, 5),
        'defesa' => rand(0, 5),
        'vida' => rand(0, 5),
        'iniciativa' => rand(0, 5),

        'resistencia' => rand(0, 5),
        'reflexo' => rand(0, 5),
        'fortitude' => rand(0, 5),
        'vontade' => rand(0, 5),

    ];
});
