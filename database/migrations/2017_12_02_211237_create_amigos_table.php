<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amigos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('apelido');
            $table->string('telefone');
            $table->string('rua');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');

            $table->integer('id_user');
            $table->timestamps();

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
        Schema::dropIfExists('amigos');
    }
}
