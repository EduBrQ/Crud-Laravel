<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmprestimosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('observacao');
            $table->date('data_emprestimo');
            $table->date('data_entrega');

            $table->integer('id_amigo');
            $table->integer('id_user');
            $table->integer('id_titulo');

            $table->timestamps();

            $table->index('id_amigo');
            $table->index('id_user');
            $table->index('id_titulo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprestimos');
    }
}
