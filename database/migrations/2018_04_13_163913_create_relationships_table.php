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
            $table->unsignedInteger('points');

            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('pericia_id')->references('id')->on('pericias')->onDelete('cascade');
        });

        Schema::create('feito_persona', function (Blueprint $table) {
            $table->unsignedInteger('persona_id');
            $table->unsignedInteger('feito_id');
            $table->unsignedInteger('points');

            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('feito_id')->references('id')->on('feitos')->onDelete('cascade');
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
    }
}
