<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestacaoContasTable extends Migration
{
    public function up()
    {
        Schema::create('prestacao_contas', function (Blueprint $table) {
            $table->id();
            // Garanta que idOng seja do mesmo tipo que a coluna id em ongs
            $table->unsignedBigInteger('idOng'); // Definindo como unsignedBigInteger
            $table->foreign('idOng')->references('id')->on('ong')->onDelete('cascade');
            $table->string('balanco')->nullable();
            $table->string('demonstracao')->nullable();
            $table->string('receitas')->nullable();
            $table->string('despesas')->nullable();
            $table->text('fotos')->nullable();
            $table->timestamps();
        });
    }    

    public function down()
    {
        Schema::dropIfExists('prestacao_contas');
    }
}
