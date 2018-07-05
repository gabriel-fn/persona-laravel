<?php

use Illuminate\Database\Seeder;
use App\Desvantagem;

class DesvantagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Desvantagem::class)->create(['nome'=>'Ação','graduacao_min'=>1,'graduacao_max'=>20]);
        factory(Desvantagem::class)->create(['nome'=>'Deficiência','graduacao_min'=>1,'graduacao_max'=>5]);
        factory(Desvantagem::class)->create(['nome'=>'Força Total','graduacao_min'=>1,'graduacao_max'=>1]);
        factory(Desvantagem::class)->create(['nome'=>'Fraqueza','graduacao_min'=>1,'graduacao_max'=>6]);
        factory(Desvantagem::class)->create(['nome'=>'Identidade Normal','graduacao_min'=>3,'graduacao_max'=>5]);
        factory(Desvantagem::class)->create(['nome'=>'Perceptível','graduacao_min'=>1,'graduacao_max'=>1]);
        factory(Desvantagem::class)->create(['nome'=>'Perda de Poder','graduacao_min'=>1,'graduacao_max'=>3]);
        factory(Desvantagem::class)->create(['nome'=>'Ponto Fraco','graduacao_min'=>1,'graduacao_max'=>1]);
        factory(Desvantagem::class)->create(['nome'=>'Transformação de Via Única','graduacao_min'=>1,'graduacao_max'=>5]);
        factory(Desvantagem::class)->create(['nome'=>'Transformação Involuntária','graduacao_min'=>1,'graduacao_max'=>5]);
        factory(Desvantagem::class)->create(['nome'=>'Vulnerável','graduacao_min'=>1,'graduacao_max'=>5]);
    }
}
