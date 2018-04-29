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
        factory(Pericia::class)->create(['label'=>'Acrobacia','bonus_key'=>'destreza']);
        factory(Pericia::class)->create(['label'=>'Arte da Fulga','bonus_key'=>'destreza']);
        factory(Pericia::class)->create(['label'=>'Blefar','bonus_key'=>'carisma']);
        factory(Pericia::class)->create(['label'=>'Cavalgar','bonus_key'=>'destreza']);
        factory(Pericia::class)->create(['label'=>'Computadores','bonus_key'=>'inteligencia']);
        factory(Pericia::class)->create(['label'=>'Concentração','bonus_key'=>'sabedoria']);
        factory(Pericia::class)->create(['label'=>'Conhecimento','bonus_key'=>'inteligencia']);
        factory(Pericia::class)->create(['label'=>'Desarmar Dispositivo','bonus_key'=>'inteligencia']);
        factory(Pericia::class)->create(['label'=>'Diplomacia','bonus_key'=>'carisma']);
        factory(Pericia::class)->create(['label'=>'Dirigir','bonus_key'=>'destreza']);
        factory(Pericia::class)->create(['label'=>'Disfarce','bonus_key'=>'carisma']);
        factory(Pericia::class)->create(['label'=>'Escalar','bonus_key'=>'forca']);
        factory(Pericia::class)->create(['label'=>'Furtividade','bonus_key'=>'destreza']);
        factory(Pericia::class)->create(['label'=>'Idiomas','bonus_key'=>'']);
        factory(Pericia::class)->create(['label'=>'Intimidar','bonus_key'=>'carisma']);
        factory(Pericia::class)->create(['label'=>'Intuir Intenção','bonus_key'=>'sabedoria']);
        factory(Pericia::class)->create(['label'=>'Investigar','bonus_key'=>'inteligencia']);
        factory(Pericia::class)->create(['label'=>'Lidar com Animais','bonus_key'=>'carisma']);
        factory(Pericia::class)->create(['label'=>'Medicina','bonus_key'=>'sabedoria']);
        factory(Pericia::class)->create(['label'=>'Nadar','bonus_key'=>'forca']);
        factory(Pericia::class)->create(['label'=>'Notar','bonus_key'=>'sabedoria']);
        factory(Pericia::class)->create(['label'=>'Obter Informação','bonus_key'=>'carisma']);
        factory(Pericia::class)->create(['label'=>'Ofício','bonus_key'=>'inteligencia']);
        factory(Pericia::class)->create(['label'=>'Performance','bonus_key'=>'carisma']);
        factory(Pericia::class)->create(['label'=>'Pilotar','bonus_key'=>'destreza']);
        factory(Pericia::class)->create(['label'=>'Prestidigitação','bonus_key'=>'destreza']);
        factory(Pericia::class)->create(['label'=>'Procurar','bonus_key'=>'inteligencia']);
        factory(Pericia::class)->create(['label'=>'Profissão','bonus_key'=>'sabedoria']);
        factory(Pericia::class)->create(['label'=>'Sobrevivência','bonus_key'=>'sabedoria']);

    }
}

