<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pericia_persona', function (Blueprint $table) {
            $table->unsignedInteger('persona_id');
            $table->unsignedInteger('pericia_id');
            $table->unsignedInteger('graduacao');

            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('pericia_id')->references('id')->on('pericias')->onDelete('cascade');
        });

        Schema::create('feito_persona', function (Blueprint $table) {
            $table->unsignedInteger('persona_id');
            $table->unsignedInteger('feito_id');
            $table->unsignedInteger('graduacao');

            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('feito_id')->references('id')->on('feitos')->onDelete('cascade');
        });

        Schema::create('desvantagem_persona', function (Blueprint $table) {
            $table->unsignedInteger('persona_id');
            $table->unsignedInteger('desvantagem_id');
            $table->unsignedInteger('graduacao');

            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('desvantagem_id')->references('id')->on('desvantagens')->onDelete('cascade');
        });

        Schema::create('extra_persona', function (Blueprint $table) {
            $table->unsignedInteger('poder_persona_id');
            $table->unsignedInteger('extra_id');
            $table->unsignedInteger('modificador');

            $table->foreign('poder_persona_id')->references('id')->on('poder_persona')->onDelete('cascade');
            $table->foreign('extra_id')->references('id')->on('extras')->onDelete('cascade');
        });

        Schema::create('falha_persona', function (Blueprint $table) {
            $table->unsignedInteger('poder_persona_id');
            $table->unsignedInteger('falha_id');
            $table->unsignedInteger('modificador');

            $table->foreign('poder_persona_id')->references('id')->on('poder_persona')->onDelete('cascade');
            $table->foreign('falha_id')->references('id')->on('falhas')->onDelete('cascade');
        });

        Schema::create('opcao_persona', function (Blueprint $table) {
            $table->unsignedInteger('poder_persona_id');
            $table->unsignedInteger('opcao_id');
            $table->unsignedInteger('modificador');

            $table->foreign('poder_persona_id')->references('id')->on('poder_persona')->onDelete('cascade');
            $table->foreign('opcao_id')->references('id')->on('opcoes')->onDelete('cascade');
        });

        Schema::create('poder_poder', function (Blueprint $table) {
            $table->unsignedInteger('poder_persona_id');
            $table->unsignedInteger('poder_id');
            $table->unsignedInteger('modificador');

            $table->foreign('poder_persona_id')->references('id')->on('poder_persona')->onDelete('cascade');
            $table->foreign('poder_id')->references('id')->on('poderes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pericia_persona');
        Schema::dropIfExists('feito_persona');
        Schema::dropIfExists('desvantagem_persona');
        Schema::dropIfExists('extra_persona');
        Schema::dropIfExists('falha_persona');
        Schema::dropIfExists('opcao_persona');
        Schema::dropIfExists('poder_poder');
    }
}
