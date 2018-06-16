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
                rand(1, 5) => ['graduacao' => 1],
                rand(6, 10) => ['graduacao' => 1],
                rand(11, 15) => ['graduacao' => 1]
            ]);

            $persona->feitosPersona()->sync([
                rand(1, 5) => ['graduacao' => 1],
                rand(6, 10) => ['graduacao' => 1],
                rand(11, 15) => ['graduacao' => 1]
            ]);
        });
    }
}
