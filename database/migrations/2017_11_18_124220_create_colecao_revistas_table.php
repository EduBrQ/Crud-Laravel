<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColecaoRevistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colecao_revistas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('n_edicao');
            $table->string('nome');
            $table->string('editora');
            $table->string('protagonista');
            $table->date('data');
            $table->decimal('valor');
            $table->longText('descricao');
            $table->decimal('nota');
            $table->longText('review');


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
        Schema::dropIfExists('colecao_revistas');
    }
}
