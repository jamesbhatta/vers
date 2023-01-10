<?php

namespace Database\Seeders;

use App\BudgetSource;
use App\Municipality;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(SettingsSeeder::class);
        $this->call(MunicipalitySeeder::class);
        $this->call(VDCSeeder::class);
        if (app()->environment() == 'production') {
        } else {
        }
    }
}
