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
        factory(Feito::class)->create(['nome'=>'Ação em Movimento','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Agarrar Aprimorado','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Agarrar Instantâneo','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Agarrar Preciso','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Alvo Esquivo','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Ambiente Favorito','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Armação','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Arremessar Aprimorado','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Ataque Acurado','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Ataque Atordoante','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Ataque Defensivo','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Ataque Dominó','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Ataque Furtivo','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Ataque Imprudente','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Ataque Poderoso','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Atropelar Aprimorado','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Atropelar Rápido','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Bloquear Aprimorado','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Crítico Aprimorado','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Defesa Aprimorada','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Derrubar Aprimorado','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Desarmar Aprimorado','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Especialização em Ataque','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Esquiva Fabulosa','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Estrangular','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Evasão','graduacao_maxima'=>2]);
        factory(Feito::class)->create(['nome'=>'Foco em Ataque','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Foco em Esquiva','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Fúria','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Golpe Crítico','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Imobilizar Aprimorado','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Iniciativa Aprimorada','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Luta Cega','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Luta no Chão','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Maestria em Arremesso','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Mira Aprimorada','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Oponente Favorito','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Prender à Distância','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Prender Arma','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Quebrar Aprimorado','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Quebrar Arma','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Redirecionar','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Rolamento Defensivo','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Saque Rápido','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Tiro Preciso','graduacao_maxima'=>0]);

        //feitos de pericia
        factory(Feito::class)->create(['nome'=>'Artífice','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Assustar','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Atraente','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Bem Informado','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Bem Relacionado','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Blefe Acrobático','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Contatos','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Distrair','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Empatia com Animais','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Esconder-se à Plena Vista','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Fascinar','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Faz-Tudo','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Ferramentas Improvisadas','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Inventor','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Maestria em Perícia','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Rastrear','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Ritualista','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Zombar','graduacao_maxima'=>1]);

        //feitos de fortuna
        factory(Feito::class)->create(['nome'=>'Esforço Supremo','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Inspirar','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Liderança','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Sorte','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Sorte de Principiante','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Tomar a Iniciativa','graduacao_maxima'=>1]);

        //feitos gerais
        factory(Feito::class)->create(['nome'=>'Adaptação ao Ambiente','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Ambidestria','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Avaliação','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Benefício','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Capangas','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'De Pé','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Duro de Matar','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Equipamento','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Interpor-se','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Memória Eidética','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Mudança Rápida','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Parceiro','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Plano Genial','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Presença Aterradora','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Segunda Chance','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Sem Medo','graduacao_maxima'=>1]);
        factory(Feito::class)->create(['nome'=>'Tolerância','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Trabalho em Equipe','graduacao_maxima'=>0]);
        factory(Feito::class)->create(['nome'=>'Transe','graduacao_maxima'=>1]);

    }
}
