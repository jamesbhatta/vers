<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarriageWithnessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marriage_withnesses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marriage_id')->constrained('marriages')->cascadeOnDelete();
            $table->string('relative_name');
            $table->string('relationship');
            $table->string('relative_address')->nullable();
            $table->string('date')->nullable();
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
        Schema::dropIfExists('marriage_withnesses');
    }
}
