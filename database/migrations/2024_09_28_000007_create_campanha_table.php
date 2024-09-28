<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampanhaTable extends Migration
{
    public function up()
    {
        Schema::create('campanha', function (Blueprint $table) {
            $table->id('idCampanha');
            $table->unsignedBigInteger('idOng');
            $table->string('nomeCampanha', 100);
            $table->text('descricaoCampanha')->nullable();
            $table->dateTime('dataInicioCampanha')->nullable();
            $table->dateTime('dataFimCampanha')->nullable();
            $table->decimal('metaFinanceiraCampanha', 10, 2)->nullable();
            
            $table->foreign('idOng')->references('idOng')->on('ong')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('campanha');
    }
}
