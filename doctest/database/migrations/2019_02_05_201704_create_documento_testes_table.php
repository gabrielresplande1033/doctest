<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentoTestesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_testes', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nome_submenu');
            $table->String('pre_descricao');
            $table->String('comando_teste');
            $table->Text('descricao_teste');
            $table->String('gif_teste_rodando');
            $table->integer('id_pagina');
            $table->foreign('id_pagina')->references('id')->on('paginas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documento_testes');
    }
}
