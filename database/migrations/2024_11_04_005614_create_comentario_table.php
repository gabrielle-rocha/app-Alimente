<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarioTable extends Migration
{
    public function up()
    {
        Schema::create('comentario', function (Blueprint $table) {
            $table->id('idComentario');
            $table->unsignedBigInteger('idPostagem');
            $table->unsignedBigInteger('idDoador'); // Para referenciar o doador que comentou
            $table->text('conteudo'); // O conteúdo do comentário
            $table->timestamp('dataComentario')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('idPostagem')->references('idPostagem')->on('postagem')->onDelete('cascade');
            $table->foreign('idDoador')->references('id')->on('doadores')->onDelete('cascade'); // Certifique-se de que a tabela doadores está correta
        });
    }

    public function down()
    {
        Schema::dropIfExists('comentario');
    }
}
