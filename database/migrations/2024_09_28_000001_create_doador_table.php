<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoadorTable extends Migration
{
    public function up()
    {
        Schema::create('doador', function (Blueprint $table) {
            $table->id('idDoador');
            $table->string('nomeDoador', 100);
            $table->string('emailDoador', 255)->unique();
            $table->string('senhaDoador', 255);
            $table->string('fotoDoador', 255)->nullable();
            $table->string('nomeUsuarioDoador', 100)->nullable(); // Nome de usuário
            $table->text('biografiaDoador')->nullable(); // Biografia
            $table->integer('quantidadeDoacoes')->default(0);
            $table->integer('quantidadeOngsSeguidas')->default(0);
            $table->integer('quantidadeCurtidasDoador')->default(0);
            $table->string('enderecoDoador', 255)->nullable();
            $table->string('numeroDoador', 50)->nullable();
            $table->string('complementoDoador', 255)->nullable();
            $table->string('cepDoador', 10)->nullable();
            $table->string('bairroDoador', 100)->nullable();
            $table->string('cidadeDoador', 100)->nullable();
            $table->string('estadoDoador', 50)->nullable();
            $table->text('causasPreferidasDoador')->nullable();
            $table->date('dataCadastroDoador')-> now();
            $table->integer('denunciasRealizadasDoador')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('doador');
    }
}

