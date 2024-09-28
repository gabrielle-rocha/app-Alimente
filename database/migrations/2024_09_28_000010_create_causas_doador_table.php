<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCausasDoadorTable extends Migration
{
    public function up()
    {
        Schema::create('causas_doador', function (Blueprint $table) {
            $table->id('idCausa'); // Define 'idCausa' como a chave primária
            $table->unsignedBigInteger('idDoador'); // Define 'idDoador' como chave estrangeira
            $table->string('causa', 100); // Coluna para a causa preferida do doador

            // Adiciona a chave estrangeira
            $table->foreign('idDoador')
                  ->references('idDoador')
                  ->on('Doador')
                  ->onDelete('cascade'); // Remove causas se o doador for excluído
        });
    }


    public function down()
    {
        Schema::dropIfExists('causas_doador');
    }
}
