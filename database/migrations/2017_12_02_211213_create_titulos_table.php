<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('editora');
            $table->string('valor');
            $table->string('data_lancamento');
            $table->string('autor');
            $table->integer('id_colecao');
            $table->integer('id_user');

            $table->timestamps();

            $table->index('id_colecao');
            $table->index('id_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titulos');
    }
}
