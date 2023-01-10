<?php
use Illuminate\Support\Facades\Auth;
return [
    'name' => settings('app_name'),
    'name_en' => settings('app_name_en'),
    'admin_name'=>settings('administrator'),
    // 'province'=>App\Mysetting::where('user_id',Auth::user()->id)->first()->default_province,
    // 'district'=>App\Mysetting::where('user_id',Auth::user()->id)->first()->default_district,
    // 'municipality'=>App\Mysetting::where('user_id',Auth::user()->id)->first()->default_municipality,
    // 'vdc'=>App\Mysetting::where('user_id',Auth::user()->id)->first()->default_vdc,
    'records_per_page' => 'records per page',
    'token_number' => 'Token Number',
    'new' =>  'New',
    'form_validation_error_message' => 'Please correct the errors and resubmit the form.',
];
