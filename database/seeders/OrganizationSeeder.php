<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizations')->insert([
            'name' => 'जानकी गाउँपालिका',
            'address'=>'कैलाली जिल्ला, सुदुरपश्चिम प्रदेश, नेपाल',
            'logo' => 'bishal@gmail.com',
            'phone' => '०९१-५०००७६',
            'email' => 'janakiruralmun@gmail.com',
            'website' => 'www.janakimunkailali.gov.np',
            'latitude_longitude' => '000',
            'charter_scroll_delay' => '50',
            'news_ticker_scroll_delay' => '300',
            'notice_scroll_delay' => '150',
            'gallery_scroll_delay' => '50',
            'contact_scroll_delay' => '50',
            'refresh_time' => '15.99',
        ]);
    }
}
