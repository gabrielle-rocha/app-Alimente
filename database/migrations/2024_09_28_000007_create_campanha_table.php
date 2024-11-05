<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampanhaTable extends Migration
{
    public function up()
    {
        Schema::create('campanha', function (Blueprint $table) {
            $table->id('idCampanha'); // Chave primária
            $table->unsignedBigInteger('idOng'); // Tipo correspondente ao idOng
            $table->string('nomeCampanha', 100)->nullable(false); // Nome da campanha obrigatório
            $table->text('descricaoCampanha')->nullable(); // Descrição opcional
            $table->string('imagemCampanha', 255)->nullable(); // Imagem opcional
            $table->string('assuntoCampanha', 255)->nullable(); // Assunto opcional
            $table->date('dataInicioCampanha')->nullable(); // Data de início opcional
            $table->date('dataFimCampanha')->nullable(); // Data de fim opcional

            // Definindo a chave estrangeira
            $table->foreign('idOng')->references('idOng')->on('ong')->onDelete('cascade');
            $table->timestamps(); // Cria created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('campanha');
    }
}
