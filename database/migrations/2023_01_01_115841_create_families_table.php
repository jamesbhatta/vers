<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voidS
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('birthplace');
            $table->string('citizenship')->nullable();
            $table->string('education');
            $table->string('permanent_addres');
            $table->string('temporary_address');
            $table->string('religion');
            $table->string('age');
            $table->string('gender');
            $table->string('mothertongue');
            $table->string('description')->nullable();
            $table->unsignedBigInteger('migration_certificate_id');
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
        Schema::dropIfExists('families');
    }
}
