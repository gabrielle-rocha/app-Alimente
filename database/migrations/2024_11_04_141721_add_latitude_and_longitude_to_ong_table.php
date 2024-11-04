<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLatitudeAndLongitudeToOngTable extends Migration
{
    public function up()
    {
        Schema::table('ong', function (Blueprint $table) {
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
        });
    }

    public function down()
    {
        Schema::table('ong', function (Blueprint $table) {
            $table->dropColumn(['latitude', 'longitude']);
        });
    }
}

