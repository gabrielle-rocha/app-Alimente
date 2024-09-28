<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmTable extends Migration
{
    public function up()
    {
        Schema::create('adm', function (Blueprint $table) {
            $table->id('idAdm');
            $table->string('emailAdm', 100)->unique()->notNull();
            $table->string('senhaAdm', 255)->notNull();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('adm');
    }
}
