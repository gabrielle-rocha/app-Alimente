<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id(); // Cria a coluna 'id'
            $table->string('file_path'); // Cria a coluna 'file_path'
            $table->timestamps(); // Adiciona as colunas de timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('images');
    }
}
