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
            $table->unsignedBigInteger('idOng'); // Certifique-se de que este tipo esteja correto
            $table->text('conteudo');
            $table->timestamp('dataPostagem')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('numeroCurtidas')->default(0);
            $table->text('comentariosPostagem')->nullable(); // Nullable para evitar problemas se não houver comentários
            $table->foreign('idOng')->references('idOng')->on('ong')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('postagem');
    }
}
