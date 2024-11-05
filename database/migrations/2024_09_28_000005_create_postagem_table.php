<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostagemTable extends Migration
{
    public function up()
    {
        Schema::create('postagem', function (Blueprint $table) {
            $table->id('idPostagem');
            $table->unsignedBigInteger('idOng');
            $table->text('conteudo'); // Descrição do post
            $table->string('imagem')->nullable(); // Caminho da imagem
            $table->string('hashtags')->nullable(); // Hashtags usadas
            $table->timestamp('dataPostagem')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('numeroCurtidas')->default(0);
            $table->foreign('idOng')->references('idOng')->on('ong')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('postagem');
    }
}
