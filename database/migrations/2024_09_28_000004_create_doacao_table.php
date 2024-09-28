<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoacaoTable extends Migration
{
    public function up()
    {
        Schema::create('doacao', function (Blueprint $table) {
            $table->id('idDoacao');
            $table->unsignedBigInteger('idDoador'); // Use unsignedBigInteger
            $table->unsignedBigInteger('idOng'); // Use unsignedBigInteger
            $table->decimal('valorDoacao', 10, 2);
            $table->timestamp('data_doacao')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('idDoador')->references('idDoador')->on('Doador')->onDelete('cascade');
            $table->foreign('idOng')->references('idOng')->on('Ong')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('doacao');
    }
}
