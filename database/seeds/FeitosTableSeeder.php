<?php

use Illuminate\Database\Seeder;
use App\Feito;

class FeitosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //feitos de combate
        factory(Feito::class)->create(['label'=>'Ação em Movimento','max'=>1]);
        factory(Feito::class)->create(['label'=>'Agarrar Aprimorado','max'=>1]);
        factory(Feito::class)->create(['label'=>'Agarrar Instantâneo','max'=>1]);
        factory(Feito::class)->create(['label'=>'Agarrar Preciso','max'=>1]);
        factory(Feito::class)->create(['label'=>'Alvo Esquivo','max'=>1]);
        factory(Feito::class)->create(['label'=>'Ambiente Favorito','max'=>0]);
        factory(Feito::class)->create(['label'=>'Armação','max'=>1]);
        factory(Feito::class)->create(['label'=>'Arremessar Aprimorado','max'=>1]);
        factory(Feito::class)->create(['label'=>'Ataque Acurado','max'=>1]);
        factory(Feito::class)->create(['label'=>'Ataque Atordoante','max'=>1]);
        factory(Feito::class)->create(['label'=>'Ataque Defensivo','max'=>1]);
        factory(Feito::class)->create(['label'=>'Ataque Dominó','max'=>2]);
        factory(Feito::class)->create(['label'=>'Ataque Furtivo','max'=>4]);
        factory(Feito::class)->create(['label'=>'Ataque Imprudente','max'=>1]);
        factory(Feito::class)->create(['label'=>'Ataque Poderoso','max'=>1]);
        factory(Feito::class)->create(['label'=>'Atropelar Aprimorado','max'=>1]);
        factory(Feito::class)->create(['label'=>'Atropelar Rápido','max'=>1]);
        factory(Feito::class)->create(['label'=>'Bloquear Aprimorado','max'=>0]);
        factory(Feito::class)->create(['label'=>'Crítico Aprimorado','max'=>0]);
        factory(Feito::class)->create(['label'=>'Defesa Aprimorada','max'=>2]);
        factory(Feito::class)->create(['label'=>'Derrubar Aprimorado','max'=>1]);
        factory(Feito::class)->create(['label'=>'Desarmar Aprimorado','max'=>0]);
        factory(Feito::class)->create(['label'=>'Especialização em Ataque','max'=>0]);
        factory(Feito::class)->create(['label'=>'Esquiva Fabulosa','max'=>0]);
        factory(Feito::class)->create(['label'=>'Estrangular','max'=>1]);
        factory(Feito::class)->create(['label'=>'Evasão','max'=>2]);
        factory(Feito::class)->create(['label'=>'Foco em Ataque','max'=>0]);
        factory(Feito::class)->create(['label'=>'Foco em Esquiva','max'=>0]);
        factory(Feito::class)->create(['label'=>'Fúria','max'=>0]);
        factory(Feito::class)->create(['label'=>'Golpe Crítico','max'=>1]);
        factory(Feito::class)->create(['label'=>'Imobilizar Aprimorado','max'=>1]);
        factory(Feito::class)->create(['label'=>'Iniciativa Aprimorada','max'=>0]);
        factory(Feito::class)->create(['label'=>'Luta Cega','max'=>1]);
        factory(Feito::class)->create(['label'=>'Luta no Chão','max'=>1]);
        factory(Feito::class)->create(['label'=>'Maestria em Arremesso','max'=>0]);
        factory(Feito::class)->create(['label'=>'Mira Aprimorada','max'=>1]);
        factory(Feito::class)->create(['label'=>'Oponente Favorito','max'=>0]);
        factory(Feito::class)->create(['label'=>'Prender à Distância','max'=>1]);
        factory(Feito::class)->create(['label'=>'Prender Arma','max'=>1]);
        factory(Feito::class)->create(['label'=>'Quebrar Aprimorado','max'=>1]);
        factory(Feito::class)->create(['label'=>'Quebrar Arma','max'=>1]);
        factory(Feito::class)->create(['label'=>'Redirecionar','max'=>1]);
        factory(Feito::class)->create(['label'=>'Rolamento Defensivo','max'=>0]);
        factory(Feito::class)->create(['label'=>'Saque Rápido','max'=>2]);
        factory(Feito::class)->create(['label'=>'Tiro Preciso','max'=>2]);

        //feitos de pericia
        factory(Feito::class)->create(['label'=>'Artífice','max'=>1]);
        factory(Feito::class)->create(['label'=>'Assustar','max'=>1]);
        factory(Feito::class)->create(['label'=>'Atraente','max'=>0]);
        factory(Feito::class)->create(['label'=>'Bem Informado','max'=>1]);
        factory(Feito::class)->create(['label'=>'Bem Relacionado','max'=>1]);
        factory(Feito::class)->create(['label'=>'Blefe Acrobático','max'=>1]);
        factory(Feito::class)->create(['label'=>'Contatos','max'=>1]);
        factory(Feito::class)->create(['label'=>'Distrair','max'=>2]);
        factory(Feito::class)->create(['label'=>'Empatia com Animais','max'=>1]);
        factory(Feito::class)->create(['label'=>'Esconder-se à Plena Vista','max'=>1]);
        factory(Feito::class)->create(['label'=>'Fascinar','max'=>4]);
        factory(Feito::class)->create(['label'=>'Faz-Tudo','max'=>1]);
        factory(Feito::class)->create(['label'=>'Ferramentas Improvisadas','max'=>1]);
        factory(Feito::class)->create(['label'=>'Inventor','max'=>1]);
        factory(Feito::class)->create(['label'=>'Maestria em Perícia','max'=>0]);
        factory(Feito::class)->create(['label'=>'Rastrear','max'=>1]);
        factory(Feito::class)->create(['label'=>'Ritualista','max'=>1]);
        factory(Feito::class)->create(['label'=>'Zombar','max'=>1]);

        //feitos de fortuna
        factory(Feito::class)->create(['label'=>'Esforço Supremo','max'=>0]);
        factory(Feito::class)->create(['label'=>'Inspirar','max'=>5]);
        factory(Feito::class)->create(['label'=>'Liderança','max'=>1]);
        factory(Feito::class)->create(['label'=>'Sorte','max'=>0]);
        factory(Feito::class)->create(['label'=>'Sorte de Principiante','max'=>1]);
        factory(Feito::class)->create(['label'=>'Tomar a Iniciativa','max'=>1]);

        //feitos gerais
        factory(Feito::class)->create(['label'=>'Adaptação ao Ambiente','max'=>1]);
        factory(Feito::class)->create(['label'=>'Ambidestria','max'=>1]);
        factory(Feito::class)->create(['label'=>'Avaliação','max'=>1]);
        factory(Feito::class)->create(['label'=>'Benefício','max'=>0]);
        factory(Feito::class)->create(['label'=>'Capangas','max'=>0]);
        factory(Feito::class)->create(['label'=>'De Pé','max'=>1]);
        factory(Feito::class)->create(['label'=>'Duro de Matar','max'=>1]);
        factory(Feito::class)->create(['label'=>'Equipamento','max'=>0]);
        factory(Feito::class)->create(['label'=>'Interpor-se','max'=>1]);
        factory(Feito::class)->create(['label'=>'Memória Eidética','max'=>1]);
        factory(Feito::class)->create(['label'=>'Mudança Rápida','max'=>2]);
        factory(Feito::class)->create(['label'=>'Parceiro','max'=>0]);
        factory(Feito::class)->create(['label'=>'Plano Genial','max'=>1]);
        factory(Feito::class)->create(['label'=>'Presença Aterradora','max'=>0]);
        factory(Feito::class)->create(['label'=>'Segunda Chance','max'=>0]);
        factory(Feito::class)->create(['label'=>'Sem Medo','max'=>1]);
        factory(Feito::class)->create(['label'=>'Tolerância','max'=>0]);
        factory(Feito::class)->create(['label'=>'Trabalho em Equipe','max'=>3]);
        factory(Feito::class)->create(['label'=>'Transe','max'=>1]);

    }
}
