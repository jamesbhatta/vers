<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMysettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mysettings', function (Blueprint $table) {
            $table->id();
            $table->string('country')->nullable();
            $table->string('default_province')->nullable();
            $table->string('default_district')->nullable();
            $table->string('default_vdc')->nullable();
            $table->string('default_municipality')->nullable();
            $table->string('default_registaar')->nullable();
            $table->string('default_mother_tongue')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mysettings');
    }
}
