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
        factory(Pericia::class)->create(['nome'=>'Acrobacia','habilidade_chave'=>'destreza']);
        factory(Pericia::class)->create(['nome'=>'Arte da Fulga','habilidade_chave'=>'destreza']);
        factory(Pericia::class)->create(['nome'=>'Blefar','habilidade_chave'=>'carisma']);
        factory(Pericia::class)->create(['nome'=>'Cavalgar','habilidade_chave'=>'destreza']);
        factory(Pericia::class)->create(['nome'=>'Computadores','habilidade_chave'=>'inteligencia']);
        factory(Pericia::class)->create(['nome'=>'Concentração','habilidade_chave'=>'sabedoria']);
        factory(Pericia::class)->create(['nome'=>'Conhecimento','habilidade_chave'=>'inteligencia']);
        factory(Pericia::class)->create(['nome'=>'Desarmar Dispositivo','habilidade_chave'=>'inteligencia']);
        factory(Pericia::class)->create(['nome'=>'Diplomacia','habilidade_chave'=>'carisma']);
        factory(Pericia::class)->create(['nome'=>'Dirigir','habilidade_chave'=>'destreza']);
        factory(Pericia::class)->create(['nome'=>'Disfarce','habilidade_chave'=>'carisma']);
        factory(Pericia::class)->create(['nome'=>'Escalar','habilidade_chave'=>'forca']);
        factory(Pericia::class)->create(['nome'=>'Furtividade','habilidade_chave'=>'destreza']);
        factory(Pericia::class)->create(['nome'=>'Idiomas','habilidade_chave'=>'']);
        factory(Pericia::class)->create(['nome'=>'Intimidar','habilidade_chave'=>'carisma']);
        factory(Pericia::class)->create(['nome'=>'Intuir Intenção','habilidade_chave'=>'sabedoria']);
        factory(Pericia::class)->create(['nome'=>'Investigar','habilidade_chave'=>'inteligencia']);
        factory(Pericia::class)->create(['nome'=>'Lidar com Animais','habilidade_chave'=>'carisma']);
        factory(Pericia::class)->create(['nome'=>'Medicina','habilidade_chave'=>'sabedoria']);
        factory(Pericia::class)->create(['nome'=>'Nadar','habilidade_chave'=>'forca']);
        factory(Pericia::class)->create(['nome'=>'Notar','habilidade_chave'=>'sabedoria']);
        factory(Pericia::class)->create(['nome'=>'Obter Informação','habilidade_chave'=>'carisma']);
        factory(Pericia::class)->create(['nome'=>'Ofício','habilidade_chave'=>'inteligencia']);
        factory(Pericia::class)->create(['nome'=>'Performance','habilidade_chave'=>'carisma']);
        factory(Pericia::class)->create(['nome'=>'Pilotar','habilidade_chave'=>'destreza']);
        factory(Pericia::class)->create(['nome'=>'Prestidigitação','habilidade_chave'=>'destreza']);
        factory(Pericia::class)->create(['nome'=>'Procurar','habilidade_chave'=>'inteligencia']);
        factory(Pericia::class)->create(['nome'=>'Profissão','habilidade_chave'=>'sabedoria']);
        factory(Pericia::class)->create(['nome'=>'Sobrevivência','habilidade_chave'=>'sabedoria']);

    }
}

