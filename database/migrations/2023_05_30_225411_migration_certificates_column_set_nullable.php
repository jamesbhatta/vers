<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigrationCertificatesColumnSetNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('migration_certificates', function (Blueprint $table) {
            $table->string('migration_province')->nullable()->change();
            $table->string('migration_district')->nullable()->change();
            $table->string('migration_municipality')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('migration_certificates', function (Blueprint $table) {
            $table->string('migration_province')->change();
            $table->string('migration_district')->change();
            $table->string('migration_municipality')->change();
        });
    }
}
