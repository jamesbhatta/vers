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
            $table->string('education')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('temporary_address')->nullable();
            $table->string('religion')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('mothertongue')->nullable();
            $table->string('description')->nullable();
            $table->foreignId('migration_certificate_id')->constrained('migration_certificates')->cascadeOnDelete();
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
