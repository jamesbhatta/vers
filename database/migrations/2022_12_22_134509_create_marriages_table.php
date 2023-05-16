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
            $table->unsignedBigInteger('book_id');
            $table->string('ward_num')->nullable();
            $table->string('administrator');
            $table->string('reg_number');
            $table->string('entry_date');

            $table->string('marriage_date');
            $table->string('marriage_address');

            $table->string('bride_name');
            $table->string('bride_birth_country');
            $table->string('bride_dob')->nullable();
            $table->string('bride_citizenship_number')->nullable();
            $table->string('bride_citizenship_date')->nullable();
            $table->string('bride_citizenship_district')->nullable();
            $table->string('bride_temp_address')->nullable();
            $table->string('bride_education')->nullable();
            $table->string('bride_religion')->nullable();
            $table->string('bride_mother_tongue')->nullable();
            $table->string('bride_grandfather_name')->nullable();
            $table->string('bride_father_name')->nullable();
            $table->string('bride_pre_marrige_status')->nullable();


            $table->string('groom_name');
            $table->string('groom_dob')->nullable();
            $table->string('groom_birth_country')->nullable();
            $table->string('groom_citizenship_number')->nullable();
            $table->string('groom_citizenship_date')->nullable();
            $table->string('groom_citizenship_district')->nullable();
            $table->string('groom_education')->nullable();
            $table->string('groom_temp_address')->nullable();
            $table->string('groom_religion')->nullable();
            $table->string('groom_mother_tongue')->nullable();
            $table->string('groom_grandfather_name')->nullable();
            $table->string('groom_father_name')->nullable();
            $table->string('groom_pre_marrige_status')->nullable();


            $table->string('relative_name');
            $table->string('relationship');
            $table->string('relative_address')->nullable();
            $table->string('date')->nullable();

            $table->string('file')->nullable();
            $table->text('description')->nullable();

            $table->unsignedBigInteger('user_id');


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
