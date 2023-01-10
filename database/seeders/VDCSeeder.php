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
            'vdc' => 'Basauti',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Bauniya',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Chaumala',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Dansinhapur',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Dododhara',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Durgauli',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Gadariya',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Godawari',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Hasuliya',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Janakinagar',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Joshipur',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Khairala',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Kota Tulsipur',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Masuriya',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Mohanyal',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Munuwa',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Nigali',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Pahalmanpur',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Pandaun',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Pawera',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Pratapur',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Ratnapur',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Sahajpur',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Sugarkhal',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Thapapur',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Udasipur',
        ]);
        DB::table('vdcs')->insert([
            'vdc' => 'Narayanpur',
        ]);
    }
}
