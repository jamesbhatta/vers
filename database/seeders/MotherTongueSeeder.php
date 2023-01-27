<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotherTongueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mother_tongues')->insert([
            'name' => 'नेवार',
        ]);
        DB::table('mother_tongues')->insert([
            'name' => 'लिम्बु',
        ]);
        DB::table('mother_tongues')->insert([
            'name' => 'राई',
        ]);
        DB::table('mother_tongues')->insert([
            'name' => 'तामांग',
        ]);
        DB::table('mother_tongues')->insert([
            'name' => 'गुरुङ',
        ]);
        DB::table('mother_tongues')->insert([
            'name' => 'मगर',
        ]);
        DB::table('mother_tongues')->insert([
            'name' => 'थारु',
        ]);
        DB::table('mother_tongues')->insert([
            'name' => 'नेपाली',
        ]);



        DB::table('countries')->insert([
            'name' => 'भारत',
        ]);
        DB::table('countries')->insert([
            'name' => 'नेपाल',
        ]);

    }
}
