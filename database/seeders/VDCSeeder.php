<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VDCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vdcs')->insert([
            'vdc' => 'Pahalmanpur',
        ]);

        DB::table('vdcs')->insert([
            'vdc' => 'Darakh',
        ]);

        DB::table('vdcs')->insert([
            'vdc' => 'Ramshikharjhala',
        ]);

        DB::table('vdcs')->insert([
            'vdc' => 'Sadepani',
        ]);

    }
}
