<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampanhaTable extends Migration
{
    public function up()
    {
        Schema::create('campanha', function (Blueprint $table) {
            $table->id('idCampanha'); // Certifique-se de que isso também seja o tipo correto
            $table->unsignedBigInteger('idOng'); // Use unsignedBigInteger para corresponder ao tipo de idOng
            $table->string('nomeCampanha', 100)->notNull();
            $table->text('descricaoCampanha')->nullable();
            $table->string('imagemCampanha', 255)->nullable();
            $table->string('assuntoCampanha', 255)->nullable();
            $table->date('dataInicioCampanha')->nullable();
            $table->date('dataFimCampanha')->nullable();
            // Outros campos necessários

            // Definindo a chave estrangeira
            $table->foreign('idOng')->references('idOng')->on('ong')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('campanha');
    }
}
