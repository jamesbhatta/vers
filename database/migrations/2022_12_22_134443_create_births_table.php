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
            $table->unsignedBigInteger('book_id');
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
            $table->string('father_age_while_baby_born')->nullable();
            $table->string('father_education')->nullable();
            $table->string('father_country_where_baby_born')->nullable();
            $table->string('father_citizenship_number')->nullable();
            $table->string('father_religion')->nullable();
            $table->string('father_mother_toung')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_baby_number')->nullable();
            $table->string('father_alive_baby_number')->nullable();
            $table->string('father_helper')->nullable();
            $table->string('father_marige_date')->nullable();

            $table->string('mother_name');
            $table->string('mother_parmanent_address');
            $table->string('mother_temporary_address')->nullable();
            $table->string('mother_age_while_baby_born')->nullable();
            $table->string('mother_education')->nullable();
            $table->string('mother_country_where_baby_born')->nullable();
            $table->string('mother_citizenship_number')->nullable();
            $table->string('mother_religion')->nullable();
            $table->string('mother_mother_toung')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_baby_number')->nullable();
            $table->string('mother_alive_baby_number')->nullable();
            $table->string('mother_helper')->nullable();
            $table->string('mother_marige_date')->nullable();

            $table->string('relative_name')->nullable();
            $table->string('relationship')->nullable();
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
        Schema::dropIfExists('births');
    }
}
