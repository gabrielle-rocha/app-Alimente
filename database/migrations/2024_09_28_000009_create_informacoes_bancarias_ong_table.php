<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacoesBancariasOngTable extends Migration
{
    public function up()
{
    Schema::create('InformacoesBancariasOng', function (Blueprint $table) {
        $table->id('idBanco');
        $table->unsignedBigInteger('idOng'); // Usando o mesmo tipo de dados que na tabela Ong
        $table->string('nomeBanco', 100);
        $table->string('numeroAgencia', 10);
        $table->string('numeroConta', 20);
        $table->string('tipoConta', 50);

        // Certifique-se de que os nomes e tipos de dados estão corretos
        $table->foreign('idOng')->references('idOng')->on('Ong')->onDelete('cascade');
    });
}

    public function down()
    {
        Schema::dropIfExists('informacoes_bancarias_ong');
    }
}

