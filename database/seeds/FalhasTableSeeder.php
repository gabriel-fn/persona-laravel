<?php

use Illuminate\Database\Seeder;
use App\Falha; 

class FalhasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Falha::class)->create(['nome'=>'Ação','modificador_min'=>1, 'modificador_max'=>4]);
        factory(Falha::class)->create(['nome'=>'Alcance','modificador_min'=>1, 'modificador_max'=>4]);
        factory(Falha::class)->create(['nome'=>'Cansativo','modificador_min'=>1, 'modificador_max'=>1]);
        factory(Falha::class)->create(['nome'=>'Dependente de Sentidos','modificador_min'=>1, 'modificador_max'=>1]);
        factory(Falha::class)->create(['nome'=>'Dissipação','modificador_min'=>1, 'modificador_max'=>1]);
        factory(Falha::class)->create(['nome'=>'Distração','modificador_min'=>1, 'modificador_max'=>1]);
        factory(Falha::class)->create(['nome'=>'Duração','modificador_min'=>1, 'modificador_max'=>4]);
        factory(Falha::class)->create(['nome'=>'Efeito Colateral','modificador_min'=>1, 'modificador_max'=>2]);
        factory(Falha::class)->create(['nome'=>'Inconstante','modificador_min'=>1, 'modificador_max'=>1]);
        factory(Falha::class)->create(['nome'=>'Incontrolável','modificador_min'=>1, 'modificador_max'=>1]);
        factory(Falha::class)->create(['nome'=>'Limitado','modificador_min'=>1, 'modificador_max'=>1]);
        factory(Falha::class)->create(['nome'=>'Permanente','modificador_min'=>1, 'modificador_max'=>1]);
        factory(Falha::class)->create(['nome'=>'Restaurador','modificador_min'=>1, 'modificador_max'=>1]);
        factory(Falha::class)->create(['nome'=>'Retroalimentação','modificador_min'=>1, 'modificador_max'=>1]);

        //factory(Falha::class)->create(['nome'=>'','modificador_min'=>, 'modificador_max'=>]);
    }
}
