<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacoesPagamentoDoadorTable extends Migration
{
    public function up()
{
    Schema::create('InformacoesPagamentoDoador', function (Blueprint $table) {
        $table->id('idPagamento');
        $table->unsignedBigInteger('idDoador'); // Certifique-se de que o tipo de dado corresponde ao da tabela Doador
        $table->string('tipoPagamento', 50);
        $table->string('numeroCartao', 20);
        $table->string('validadeCartao', 7);
        $table->string('codigoSeguranca', 4);
        
        $table->foreign('idDoador')->references('idDoador')->on('Doador')->onDelete('cascade');
    });
}

    public function down()
    {
        Schema::dropIfExists('informacoes_pagamento_doador');
    }
}


