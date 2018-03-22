<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('nome');
            $table->unsignedTinyInteger('np');

            $table->unsignedTinyInteger('forca');
            $table->unsignedTinyInteger('destreza');
            $table->unsignedTinyInteger('constituicao');
            $table->unsignedTinyInteger('inteligencia');
            $table->unsignedTinyInteger('sabedoria');
            $table->unsignedTinyInteger('carisma');

            $table->unsignedTinyInteger('dano');
            $table->unsignedTinyInteger('ataque');
            $table->unsignedTinyInteger('defesa');
            $table->unsignedTinyInteger('vida');
            $table->unsignedTinyInteger('iniciativa');

            $table->unsignedTinyInteger('resistencia');
            $table->unsignedTinyInteger('reflexo');
            $table->unsignedTinyInteger('fortitude');
            $table->unsignedTinyInteger('vontade');

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
