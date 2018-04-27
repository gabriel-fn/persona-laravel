<?php

use Illuminate\Database\Seeder;
use App\Pericia;

class PericiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pericia::class)->create(['label'=>'Acrobacia','abilityKey'=>'destreza']);
        factory(Pericia::class)->create(['label'=>'Arte da Fulga','abilityKey'=>'destreza']);
        factory(Pericia::class)->create(['label'=>'Blefar','abilityKey'=>'carisma']);
        factory(Pericia::class)->create(['label'=>'Cavalgar','abilityKey'=>'destreza']);
        factory(Pericia::class)->create(['label'=>'Computadores','abilityKey'=>'inteligencia']);
        factory(Pericia::class)->create(['label'=>'Concentração','abilityKey'=>'sabedoria']);
        factory(Pericia::class)->create(['label'=>'Conhecimento','abilityKey'=>'inteligencia']);
        factory(Pericia::class)->create(['label'=>'Desarmar Dispositivo','abilityKey'=>'inteligencia']);
        factory(Pericia::class)->create(['label'=>'Diplomacia','abilityKey'=>'carisma']);
        factory(Pericia::class)->create(['label'=>'Dirigir','abilityKey'=>'destreza']);
        factory(Pericia::class)->create(['label'=>'Disfarce','abilityKey'=>'carisma']);
        factory(Pericia::class)->create(['label'=>'Escalar','abilityKey'=>'forca']);
        factory(Pericia::class)->create(['label'=>'Furtividade','abilityKey'=>'destreza']);
        factory(Pericia::class)->create(['label'=>'Idiomas','abilityKey'=>'']);
        factory(Pericia::class)->create(['label'=>'Intimidar','abilityKey'=>'carisma']);
        factory(Pericia::class)->create(['label'=>'Intuir Intenção','abilityKey'=>'sabedoria']);
        factory(Pericia::class)->create(['label'=>'Investigar','abilityKey'=>'inteligencia']);
        factory(Pericia::class)->create(['label'=>'Lidar com Animais','abilityKey'=>'carisma']);
        factory(Pericia::class)->create(['label'=>'Medicina','abilityKey'=>'sabedoria']);
        factory(Pericia::class)->create(['label'=>'Nadar','abilityKey'=>'forca']);
        factory(Pericia::class)->create(['label'=>'Notar','abilityKey'=>'sabedoria']);
        factory(Pericia::class)->create(['label'=>'Obter Informação','abilityKey'=>'carisma']);
        factory(Pericia::class)->create(['label'=>'Ofício','abilityKey'=>'inteligencia']);
        factory(Pericia::class)->create(['label'=>'Performance','abilityKey'=>'carisma']);
        factory(Pericia::class)->create(['label'=>'Pilotar','abilityKey'=>'destreza']);
        factory(Pericia::class)->create(['label'=>'Prestidigitação','abilityKey'=>'destreza']);
        factory(Pericia::class)->create(['label'=>'Procurar','abilityKey'=>'inteligencia']);
        factory(Pericia::class)->create(['label'=>'Profissão','abilityKey'=>'sabedoria']);
        factory(Pericia::class)->create(['label'=>'Sobrevivência','abilityKey'=>'sabedoria']);

    }
}

