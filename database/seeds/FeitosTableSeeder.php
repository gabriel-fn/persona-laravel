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
        factory(Feito::class)->create(['nome'=>'Ação em Movimento','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Agarrar Aprimorado','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Agarrar Instantâneo','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Agarrar Preciso','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Alvo Esquivo','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Ambiente Favorito','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Armação','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Arremessar Aprimorado','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Ataque Acurado','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Ataque Atordoante','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Ataque Defensivo','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Ataque Dominó','graduacao_max'=>2]);
        factory(Feito::class)->create(['nome'=>'Ataque Furtivo','graduacao_max'=>4]);
        factory(Feito::class)->create(['nome'=>'Ataque Imprudente','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Ataque Poderoso','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Atropelar Aprimorado','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Atropelar Rápido','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Bloquear Aprimorado','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Crítico Aprimorado','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Defesa Aprimorada','graduacao_max'=>2]);
        factory(Feito::class)->create(['nome'=>'Derrubar Aprimorado','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Desarmar Aprimorado','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Especialização em Ataque','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Esquiva Fabulosa','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Estrangular','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Evasão','graduacao_max'=>2]);
        factory(Feito::class)->create(['nome'=>'Foco em Ataque','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Foco em Esquiva','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Fúria','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Golpe Crítico','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Imobilizar Aprimorado','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Iniciativa Aprimorada','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Luta Cega','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Luta no Chão','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Maestria em Arremesso','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Mira Aprimorada','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Oponente Favorito','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Prender à Distância','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Prender Arma','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Quebrar Aprimorado','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Quebrar Arma','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Redirecionar','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Rolamento Defensivo','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Saque Rápido','graduacao_max'=>2]);
        factory(Feito::class)->create(['nome'=>'Tiro Preciso','graduacao_max'=>2]);

        //feitos de pericia
        factory(Feito::class)->create(['nome'=>'Artífice','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Assustar','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Atraente','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Bem Informado','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Bem Relacionado','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Blefe Acrobático','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Contatos','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Distrair','graduacao_max'=>2]);
        factory(Feito::class)->create(['nome'=>'Empatia com Animais','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Esconder-se à Plena Vista','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Fascinar','graduacao_max'=>4]);
        factory(Feito::class)->create(['nome'=>'Faz-Tudo','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Ferramentas Improvisadas','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Inventor','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Maestria em Perícia','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Rastrear','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Ritualista','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Zombar','graduacao_max'=>1]);

        //feitos de fortuna
        factory(Feito::class)->create(['nome'=>'Esforço Supremo','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Inspirar','graduacao_max'=>5]);
        factory(Feito::class)->create(['nome'=>'Liderança','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Sorte','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Sorte de Principiante','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Tomar a Iniciativa','graduacao_max'=>1]);

        //feitos gerais
        factory(Feito::class)->create(['nome'=>'Adaptação ao Ambiente','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Ambidestria','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Avaliação','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Benefício','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Capangas','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'De Pé','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Duro de Matar','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Equipamento','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Interpor-se','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Memória Eidética','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Mudança Rápida','graduacao_max'=>2]);
        factory(Feito::class)->create(['nome'=>'Parceiro','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Plano Genial','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Presença Aterradora','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Segunda Chance','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Sem Medo','graduacao_max'=>1]);
        factory(Feito::class)->create(['nome'=>'Tolerância','graduacao_max'=>0]);
        factory(Feito::class)->create(['nome'=>'Trabalho em Equipe','graduacao_max'=>3]);
        factory(Feito::class)->create(['nome'=>'Transe','graduacao_max'=>1]);

    }
}
