<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrationCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('migration_certificates', function (Blueprint $table) {
            $table->id();
            //6
            $table->string('migration_province');
            $table->string('migration_district');
            $table->string('migration_municipality');
            $table->string('migration_vdc')->nullable();
            $table->string('migration_village')->nullable();
            $table->unsignedBigInteger('book_id')->nullable();;
            $table->string('ward_num')->nullable();
            $table->string('migration_ward')->nullable();
            $table->string('migration_houseno')->nullable();

            //7
            $table->string('province');
            $table->string('district');
            $table->string('municipality');
            $table->string('vdc')->nullable();
            $table->string('administrator');
            $table->string('reg_number');
            $table->string('entry_date');
            $table->string('type');
            $table->string('migration_reason')->nullable();
            $table->string('migration_date')->nullable();

            //8
            // $table->string('province');
            // $table->string('district');
            // $table->string('municipality')->nullable();
            // $table->string('vdc')->nullable();
            // $table->string('village')->nullable();
            // $table->string('houseno')->nullable();
            // $table->string('ward')->nullable();

            //5
            $table->string('relative_name');
            $table->string('relative_address')->nullable();
            $table->string('relationship')->nullable();
            $table->string('date')->nullable();
            $table->string('file')->nullable();

            $table->unsignedBigInteger('user_id')->nullable();

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
        Schema::dropIfExists('migration_certificates');
    }
}
