<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricoDoacaoTable extends Migration
{
    public function up()
    {
        Schema::create('historico_doacao', function (Blueprint $table) {
            $table->id('idHistorico'); // Define a chave primária
            $table->unsignedBigInteger('idDoador'); // Define a coluna idDoador
            $table->decimal('valorDoacao', 10, 2); // Valor da doação
            $table->dateTime('dataDoacao'); // Data da doação

            // Adiciona a chave estrangeira
            $table->foreign('idDoador')
                  ->references('idDoador')
                  ->on('Doador')
                  ->onDelete('cascade'); // Remove histórico se o doador for excluído
        });
    }
    public function down()
    {
        Schema::dropIfExists('historico_doacao');
    }
}
