<?php

use Illuminate\Database\Seeder;
use App\Persona;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Persona::class)->create();
      
        factory(Persona::class, 5)->create()->each(function ($persona){
            $persona->periciasPersona()->sync([
                rand(1, 5) => ['graduacao' => rand(1,10)],
                rand(6, 10) => ['graduacao' => rand(1,10)],
                rand(11, 15) => ['graduacao' => rand(1,10)]
            ]);

            $persona->feitosPersona()->sync([
                rand(1, 5) => ['graduacao' => 1],
                rand(6, 10) => ['graduacao' => 1],
                rand(11, 15) => ['graduacao' => 1]
            ]);

            $persona->desvantagensPersona()->sync([
                rand(1, 4) => ['graduacao' => 1],
                rand(6, 8) => ['graduacao' => 1],
                rand(9, 11) => ['graduacao' => 1]
            ]);
            
            $poder = App\Poder::find(rand(1,100));
            $poderPersona = factory(App\PoderPersona::class)->create([
                'persona_id' => $persona->id,
                'poder_id' => $poder->id,
                'custo' => $poder->custo_min,
            ]);
            $extra = App\Extra::find(rand(1, 3));
            $poderPersona->extrasPersona()->attach([$extra->id => ['modificador'=>$extra->modificador_min]]);

            $extra = App\Extra::find(rand(4, 6));
            $poderPersona->extrasPersona()->attach([$extra->id => ['modificador'=>$extra->modificador_min]]);

            $extra = App\Extra::find(rand(7, 9));
            $poderPersona->extrasPersona()->attach([$extra->id => ['modificador'=>$extra->modificador_min]]);

            $falha = App\Falha::find(rand(1, 3));
            $poderPersona->falhasPersona()->attach([$falha->id => ['modificador'=>$falha->modificador_min]]);

            $falha = App\Falha::find(rand(4, 6));
            $poderPersona->falhasPersona()->attach([$falha->id => ['modificador'=>$falha->modificador_min]]);

            $falha = App\Falha::find(rand(7, 9));
            $poderPersona->falhasPersona()->attach([$falha->id => ['modificador'=>$falha->modificador_min]]);

            $opcao = App\Opcao::find(rand(1, 3));
            $poderPersona->opcoesPersona()->attach([$opcao->id => ['modificador'=>$opcao->modificador_min]]);

            $opcao = App\Opcao::find(rand(4, 6));
            $poderPersona->opcoesPersona()->attach([$opcao->id => ['modificador'=>$opcao->modificador_min]]);

            $opcao = App\Opcao::find(rand(7, 9));
            $poderPersona->opcoesPersona()->attach([$opcao->id => ['modificador'=>$opcao->modificador_min]]);

            $poderPersona->poderesAlternativosPersona()->sync([
                rand(1, 30) => ['modificador' => rand(1, 2)],
                rand(31, 60) => ['modificador' => rand(1, 2)],
                rand(61, 90) => ['modificador' => rand(1, 2)]
            ]);

            $persona->poderPersona()->save($poderPersona);

        });
    }
}
