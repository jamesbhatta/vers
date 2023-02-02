<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBirthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('births', function (Blueprint $table) {
            $table->id();
            $table->string('administrator');
            $table->string('book_id');
            $table->string('province')->nullable();
            $table->string('district')->nullable();
            $table->string('municipality')->nullable();
            $table->string('ward_num')->nullable();
            $table->string('vdc')->nullable();
            $table->string('reg_number');
            $table->string('entry_date');
            $table->string('name');
            $table->string('gender');
            $table->string('dob');
            $table->string('grandfather_name');
            $table->string('birth_place');
            $table->string('birth_type');
            $table->string('physical_disable');

            $table->string('father_name');
            $table->string('father_parmanent_address');
            $table->string('father_temporary_address')->nullable();
            $table->string('father_age_while_baby_born');
            $table->string('father_education');
            $table->string('father_country_where_baby_born');
            $table->string('father_citizenship_number')->nullable();
            $table->string('father_religion');
            $table->string('father_mother_toung');
            $table->string('father_occupation');
            $table->string('father_baby_number');
            $table->string('father_alive_baby_number');
            $table->string('father_helper');
            $table->string('father_marige_date');

            $table->string('mother_name');
            $table->string('mother_parmanent_address');
            $table->string('mother_temporary_address')->nullable();
            $table->string('mother_age_while_baby_born');
            $table->string('mother_education');
            $table->string('mother_country_where_baby_born');
            $table->string('mother_citizenship_number')->nullable();
            $table->string('mother_religion');
            $table->string('mother_mother_toung');
            $table->string('mother_occupation');
            $table->string('mother_baby_number');
            $table->string('mother_alive_baby_number');
            $table->string('mother_helper');
            $table->string('mother_marige_date');

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
        Schema::dropIfExists('births');
    }
}
