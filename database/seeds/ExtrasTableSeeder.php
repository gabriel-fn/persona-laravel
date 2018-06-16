<?php

use Illuminate\Database\Seeder;
use App\Extra; 

class ExtrasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Extra::class)->create(['nome'=>'Ação','modificador_min'=>1,'modificador_max'=>4]);
        factory(Extra::class)->create(['nome'=>'Afeta Outros','modificador_min'=>0,'modificador_max'=>1]);
        factory(Extra::class)->create(['nome'=>'Afeta Corpóreo','modificador_min'=>1,'modificador_max'=>1]);
        factory(Extra::class)->create(['nome'=>'Alcance','modificador_min'=>1,'modificador_max'=>4]);
        factory(Extra::class)->create(['nome'=>'Área','modificador_min'=>1,'modificador_max'=>1]);
        factory(Extra::class)->create(['nome'=>'Ataque','modificador_min'=>0,'modificador_max'=>1]);
        factory(Extra::class)->create(['nome'=>'Ataque Seletivo','modificador_min'=>1,'modificador_max'=>1]);
        factory(Extra::class)->create(['nome'=>'Aura','modificador_min'=>1,'modificador_max'=>1]);
        factory(Extra::class)->create(['nome'=>'Automático','modificador_min'=>1,'modificador_max'=>2]);
        factory(Extra::class)->create(['nome'=>'Contagioso','modificador_min'=>1,'modificador_max'=>1]);
        factory(Extra::class)->create(['nome'=>'Dissipação Total','modificador_min'=>1,'modificador_max'=>1]);
        factory(Extra::class)->create(['nome'=>'Doença','modificador_min'=>2,'modificador_max'=>2]);
        factory(Extra::class)->create(['nome'=>'Duração','modificador_min'=>1,'modificador_max'=>1]);
        factory(Extra::class)->create(['nome'=>'Ligado','modificador_min'=>0,'modificador_max'=>1]);
        factory(Extra::class)->create(['nome'=>'Penetrante','modificador_min'=>1,'modificador_max'=>1]);
        factory(Extra::class)->create(['nome'=>'Salvamento Alternativo','modificador_min'=>0,'modificador_max'=>1]);
        factory(Extra::class)->create(['nome'=>'Sono','modificador_min'=>1,'modificador_max'=>1]);
        factory(Extra::class)->create(['nome'=>'Vampírico','modificador_min'=>1,'modificador_max'=>1]);
        factory(Extra::class)->create(['nome'=>'Veneno','modificador_min'=>1,'modificador_max'=>1]);
        
        //factory(Extra::class)->create(['nome'=>'','modificador_min'=>,'modificador_max'=>]);
    }
}
