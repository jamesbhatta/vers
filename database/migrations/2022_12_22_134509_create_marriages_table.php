<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarriagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marriages', function (Blueprint $table) {
            $table->id();
            $table->string('province')->nullable();
            $table->string('district')->nullable();
            $table->string('municipality')->nullable();
            $table->string('vdc')->nullable();
            $table->string('book_id');
            $table->string('ward_num')->nullable();
            $table->string('administrator');
            $table->string('reg_number');
            $table->string('entry_date');

            $table->string('bride_name');
            $table->string('bride_birth_country');
            $table->string('bride_dob');
            $table->string('bride_citizenship_number')->nullable();
            $table->string('bride_citizenship_date')->nullable();
            $table->string('bride_citizenship_district')->nullable();
            $table->string('bride_temp_address');
            $table->string('bride_education');
            $table->string('bride_religion');
            $table->string('bride_mother_tongue');
            $table->string('bride_grandfather_name');
            $table->string('bride_father_name');
            $table->string('bride_pre_marrige_status');


            $table->string('groom_name');
            $table->string('groom_dob');
            $table->string('groom_birth_country');
            $table->string('groom_citizenship_number')->nullable();
            $table->string('groom_citizenship_date')->nullable();
            $table->string('groom_citizenship_district')->nullable();
            $table->string('groom_education');
            $table->string('groom_temp_address');
            $table->string('groom_religion');
            $table->string('groom_mother_tongue');
            $table->string('groom_grandfather_name');
            $table->string('groom_father_name');
            $table->string('groom_pre_marrige_status');


            $table->string('relative_name');
            $table->string('relationship');
            $table->string('relative_address');
            $table->string('date');

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
        Schema::dropIfExists('marriages');
    }
}
