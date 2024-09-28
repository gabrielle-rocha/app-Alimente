<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguidorTable extends Migration
{
    public function up()
    {
        Schema::create('seguidor', function (Blueprint $table) {
            $table->unsignedBigInteger('idDoador');
            $table->unsignedBigInteger('idOng');
            $table->primary(['idDoador', 'idOng']);
            
            $table->foreign('idDoador')->references('idDoador')->on('doador')->onDelete('cascade');
            $table->foreign('idOng')->references('idOng')->on('ong')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('seguidor');
    }
}
