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
            $table->string('after_province');
            $table->string('after_district');
            $table->string('after_municipality');
            $table->string('after_vdc')->nullable();
            $table->string('after_village');
            $table->string('after_ward');
            $table->string('after_houseno')->nullable();

            //7
            $table->string('province');
            $table->string('district');
            $table->string('municipality');
            $table->string('vdc')->nullable();
            $table->string('administrator');
            $table->string('reg_number');
            $table->string('entry_date');

            //8
            $table->string('before_province');
            $table->string('before_district');
            $table->string('before_municipality');
            $table->string('before_vdc')->nullable();
            $table->string('before_village');
            $table->string('before_houseno')->nullable();
            $table->string('before_ward');
            $table->string('migration_reason');
            $table->string('migration_date');

            //5
            $table->string('relative_name');
            $table->string('relative_address');
            $table->string('relationship');
            $table->string('date');
            $table->string('file')->nullable();
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
