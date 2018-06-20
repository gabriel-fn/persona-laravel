<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoderesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poderes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('efeito');
            $table->string('acao');
            $table->string('alcance');
            $table->string('duracao');
            $table->string('salvamento');
            $table->integer('custo_min');
            $table->integer('custo_max');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poderes');
    }
}
