<?php

use Illuminate\Database\Seeder;
use App\Opcao;

class OpcoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Opcao::class)->create(['nome'=>'Acurado','modificador_min'=>1,'modificador_max'=>10]);
        factory(Opcao::class)->create(['nome'=>'Afeta Intangível','modificador_min'=>1,'modificador_max'=>2]);
        factory(Opcao::class)->create(['nome'=>'Alcance Ampliado','modificador_min'=>1,'modificador_max'=>10]);
        factory(Opcao::class)->create(['nome'=>'Alcance Estendido','modificador_min'=>1,'modificador_max'=>10]);
        factory(Opcao::class)->create(['nome'=>'Ataque Dividido','modificador_min'=>1,'modificador_max'=>10]);
        factory(Opcao::class)->create(['nome'=>'Condicional','modificador_min'=>1,'modificador_max'=>2]);
        factory(Opcao::class)->create(['nome'=>'Dimensional','modificador_min'=>1,'modificador_max'=>3]);
        factory(Opcao::class)->create(['nome'=>'Dissipação Lenta','modificador_min'=>1,'modificador_max'=>10]);
        factory(Opcao::class)->create(['nome'=>'Inato','modificador_min'=>1,'modificador_max'=>1]);
        factory(Opcao::class)->create(['nome'=>'Incurável','modificador_min'=>1,'modificador_max'=>1]);
        factory(Opcao::class)->create(['nome'=>'Indireto','modificador_min'=>1,'modificador_max'=>3]);
        //factory(Opcao::class)->create(['nome'=>'Poder Alternativo','modificador_min'=>1,'modificador_max'=>10]);
        factory(Opcao::class)->create(['nome'=>'Preciso','modificador_min'=>1,'modificador_max'=>1]);
        factory(Opcao::class)->create(['nome'=>'Progressão','modificador_min'=>1,'modificador_max'=>10]);
        factory(Opcao::class)->create(['nome'=>'Reversível','modificador_min'=>1,'modificador_max'=>1]);
        factory(Opcao::class)->create(['nome'=>'Ricochete','modificador_min'=>1,'modificador_max'=>10]);
        factory(Opcao::class)->create(['nome'=>'Sedativo','modificador_min'=>1,'modificador_max'=>1]);
        factory(Opcao::class)->create(['nome'=>'Seletivo','modificador_min'=>1,'modificador_max'=>1]);
        factory(Opcao::class)->create(['nome'=>'Sutil','modificador_min'=>1,'modificador_max'=>2]);
        factory(Opcao::class)->create(['nome'=>'Teleguiado','modificador_min'=>1,'modificador_max'=>10]);
    }
}
