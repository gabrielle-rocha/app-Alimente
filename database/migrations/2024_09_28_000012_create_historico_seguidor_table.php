<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricoSeguidorTable extends Migration
{
    public function up()
    {
        Schema::create('historico_seguidor', function (Blueprint $table) {
            $table->id('idHistorico'); // Define a chave primária
            $table->unsignedBigInteger('idDoador'); // Define a coluna idDoador
            $table->unsignedBigInteger('idOng'); // Define a coluna idOng
            $table->timestamps(); // Colunas de timestamp

            // Adiciona as chaves estrangeiras
            $table->foreign('idDoador')
                  ->references('idDoador')
                  ->on('Doador')
                  ->onDelete('cascade'); // Remove histórico se o doador for excluído

            $table->foreign('idOng')
                  ->references('idOng')
                  ->on('Ong')
                  ->onDelete('cascade'); // Remove histórico se a ONG for excluída
        });
    }

    public function down()
    {
        Schema::dropIfExists('historico_seguidor');
    }
}
