<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOngTable extends Migration
{
    public function up()
    {
        Schema::create('ong', function (Blueprint $table) {
            $table->id('idOng');
            $table->string('nomeOng', 100)->notNull();
            $table->string('cnpjOng', 20)->unique()->notNull();
            $table->string('nomeResponsavelOng', 100)->nullable();
            $table->string('emailOng', 255)->nullable();
            $table->string('senhaOng', 255)->nullable();
            $table->string('fotoOng', 255)->nullable();
            $table->text('biografiaOng')->nullable();
            $table->string('nomeUsuarioOng', 50)->nullable();
            $table->string('statusPrestacaoContas', 50)->nullable();
            $table->integer('numeroDoacoesRecebidasOng')->default(0);
            $table->integer('numeroSeguidoresOng')->default(0);
            $table->integer('numeroPostagensOng')->default(0);
            $table->integer('numeroCurtidasOng')->default(0);
            $table->text('descricaoPostagemOng')->nullable();
            $table->text('comentariosPostagemOng')->nullable();
            $table->date('dataCadastroOng')->nullable();
            $table->string('enderecoOng', 255)->nullable();
            $table->string('numeroOng', 50)->nullable();
            $table->string('complementoOng', 255)->nullable();
            $table->string('cepOng', 10)->nullable();
            $table->string('bairroOng', 100)->nullable();
            $table->string('cidadeOng', 100)->nullable();
            $table->string('estadoOng', 50)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ong');
    }
    
}

