<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deaths', function (Blueprint $table) {
            $table->id();

            $table->string('administrator');
            $table->string('reg_number');

            $table->string('entry_date');
            $table->string('name');
            $table->string('gender');
            $table->string('age');
            $table->string('dob')->nullable();
            $table->string('death_date');
            $table->string('death_place');
            $table->string('grandfather_name');
            $table->string('citizenship_number')->nullable();
            $table->string('citizenship_date')->nullable();
            $table->string('citizenship_district')->nullable();
            $table->string('marital_status');
            $table->string('birth_country');
            $table->string('mother_tongue');
            $table->string('spouse')->nullable();
            $table->string('education');
            $table->string('religion');
            $table->string('father_name');
            $table->string('cause_death');

            $table->string('province')->nullable();
            $table->string('district')->nullable();
            $table->string('municipality')->nullable();
            $table->string('vdc')->nullable();
            $table->string('address')->nullable();

            $table->string('relative_name')->nullable();
            $table->string('relationship')->nullable();
            $table->string('relative_address')->nullable();
            $table->string('date')->nullable();

            $table->string('file')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('deaths');
    }
}
