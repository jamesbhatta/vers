@extends('layouts.app')

    <div class="container-fluid">
        <div class="p-3">
            <div class="container-fluid">
                <nav aria-label="breadcrumb" class="d-flex justify-content-between">
                    <div class="mx-3">
                        <p style="font-size: 27px">@lang('navigation.migration-notice-form')</p>
                    </div>
                    <div class="my-breadcrumb">
                        <a class="breadcrumb-item" href="{{ route('dashboard') }}">@lang('navigation.dashboard')</a>
                        <a class="breadcrumb-item" href="{{ route('migration.index') }}">@lang('navigation.migration-notice-form')</a>
                        <a class="breadcrumb-item active"
                            aria-current="page">{{ $migrationCertificate->id ? 'अपडेट गर्नुहोस्' : 'सृजना गर्नुहोस्' }}</a>
                    </div>
                </nav>
                <div class="row mt-1 d-flex justify-content-end mx-1">
                    <a href="{{route('migration.print', $migrationCertificate)}}" class="btn bg-[#1d4ed8] float-right text-lg font-medium text-white"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Print</a>
                </div>
                <div class="card p-5 mt-2">
                    <h3 class="text-center pb-2 font-weight-bold">@lang('navigation.migration-notice-form')</h3>
                    <h6 class="col-12  t-bold  text-center mt-0"> (अनुसूची-६ )</h6>
                    <h6 class="col-12  text-center mt-1">(नियम-५ संग सम्बन्धित ) </h6>
                    {{-- <label class="col-12  text-center mt-2" for=""> (अनुसूची-६ ) (नियम-५ संग सम्बन्धित ) </label> --}}
                    <div class="d-flex">
                        <div class="col-xl-5">
                            <h5 class="col-12  mt-1" for=""> श्री स्थानीय पंजीअधिकारी ज्यु,</h5>
                            <h5 class="col-12  mt-1" for="">
                                <i
                                    style="border-bottom:dashed; width:20px;">{{ $mysetting[0]->default_municipality }}</i>&nbsp;गा.वि.स./न.पा.
                            </h5>
                            <h2 class="col-12 mt-3"> स्थानीय पंजीअधिकारीको कार्यालय </h5>
                                <h5 class="col-12  mt-3" for=""> महोदय,</h5>
                                <h5 class="col-12  mt-1" for=""> निम्न लिखित विवरण खुलाई बसाई सराईको सूचना दिन आएको
                                    छु ।
                                    कानून
                                    अनुसार बसाई सराई दर्ता गरी पाउं । </h5>
                        </div>
                        <div class="col-lg-3 ml-1 mt-3">
                            <table class="my_table my_table1 col-lg-12">
                                <tr>
                                    <th class="text-center"></th>
                                    <th class="text-center">नाम</th>
                                    <th class="text-center">नं.</th>
                                </tr>
                                <tr>
                                    <th class="text-center">प्रदेश</th>
                                    <td class="text-center" style="font-size: 12px">
                                        <i>{{ $mysetting[0]->default_province }}</i>
                                    <td>

                                </tr>
                                <tr>
                                    <th class="text-center">जिल्ला</th>
                                    <td class="text-center" style="font-size: 12px">
                                        <i>{{ $mysetting[0]->default_district }}</i></th>
                                    <td class="text-center"></td>
                                </tr>
                                <tr>
                                    <th class="text-center">ग.पा./न.पा</th>
                                    <td class="text-center"style="font-size: 12px">
                                        <i>{{ $mysetting[0]->default_municipality }}</i></th>
                                    <td class="text-center"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-xl-2 ml-4 mt-3">
                            <table class="my_table my_table1 col-12">
                                <tr>
                                    <th></th>
                                    <th>नाम</th>
                                    <th>नं.</th>
                                </tr>
                                <tr>
                                    <td>स्थानीय पञ्जिकाधिकारी</td>
                                    <td style="font-size: 12px"><i>{{ $mysetting[0]->default_registaar }}</i></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>दर्ता न.</td>
                                    <td style="font-size: 12px"><i>{{ $migrationCertificate->reg_number }}</i></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>दर्ता मिति</td>
                                    <td><i>{{ $migrationCertificate->entry_date }}</i></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <h5 class="col-lg-12  mt-4 ">(१) बसाई सर्ने परिवारका सदस्यहरुको नाम/बसाई सराई व्यक्तिको</h5>
                    <div class="my_custom_table col-lg-12 mt-2">
                        <table class="custom_table">
                            <tr>
                                <th style="text-align:center" rowspan="2">क्र.स. </th>
                                <th style="text-align:center" rowspan="2">नाम ,थर</th>
                                <th style="text-align:center" rowspan="2"> उमेर</th>
                                <th style="text-align:center" rowspan="2">लिङ्ग</th>
                                <th style="text-align:center" rowspan="2">जन्मस्थान</th>
                                <th style="text-align:center" rowspan="2">नागरिकता न.</th>
                                <th style="text-align:center" colspan="2" align="center">ठेगाना</th>
                                <th style="text-align:center" rowspan="2">शैक्षिक योग्यता</th>
                                <th style="text-align:center" rowspan="2">धर्म</th>
                                <th style="text-align:center" rowspan="2">मातृभाषा</th>
                                <th style="text-align:center" rowspan="2">कैफियत</th>
                            </tr>
                            <tr>
                                <th style="text-align:center">स्थायी</th>
                                <th style="text-align:center">अस्थायी</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($families as $family)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $family->name }}</td>
                                        <td>{{ $family->age }}</td>
                                        <td>{{ $family->gender }}</td>
                                        <td>{{ $family->birthplace }}</td>
                                        <td>{{ $family->citizenship }}</td>
                                        <td>{{ $family->permanent_addres }}</td>
                                        <td>{{ $family->temporary_addres }}</td>
                                        <td>{{ $family->education }}</td>
                                        <td>{{ $family->religion }}</td>
                                        <td>{{ $family->mothertongue }}</td>
                                        <td>{{ $family->description }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="p-5 mt-2">
                        <div style="text-align: justify" class="">
                            <div class="row" style="text-align: justify">
                                (२) कहाँ सरी जाने <p style="border-bottom: dashed; width: 25%" class="text-center">
                                    &nbsp;{{ $migrationCertificate->after_district }}&nbsp;</p>
                                जिल्ला
                                <p style="border-bottom: dashed; width:45%" class="text-center">&nbsp;
                                    {{ $migrationCertificate->after_municipality }}</p> न.पा./गा.वि.स. वडा नं. &nbsp;<p
                                    style="border-bottom: dashed; width: 15%" class="text-center">
                                    {{ $migrationCertificate->after_ward }}</p> टोलको नाम &nbsp;
                                <p style="border-bottom: dashed; width: 25%" class="text-center">&nbsp;
                                    {{ $migrationCertificate->after_village }}</p> घर
                                नं &nbsp;<p style="border-bottom: dashed; width: 20%" class="text-center">
                                    {{ $migrationCertificate->after_houseno }}</p>
                            </div>
                            <br>
                            <div class="row" style="text-align: justify">
                                (३) कहाँ बाट सरी आएको
                                <p style="border-bottom: dashed; width: 25%" class="text-center">
                                    &nbsp;{{ $migrationCertificate->before_district }}&nbsp;</p> जिल्ला &nbsp;<p
                                    style="border-bottom: dashed; width: 45%" class="text-center">
                                    &nbsp;{{ $migrationCertificate->before_municipality }}&nbsp;</p>न.पा./गा.वि.स. वडा
                                नं. &nbsp;<p style="border-bottom: dashed; width:15%" class="text-center">
                                    &nbsp;{{ $migrationCertificate->before_ward }}&nbsp;</p>
                                टोलको नाम &nbsp;<p style="border-bottom: dashed; width: 25%" class="text-center">
                                    &nbsp;{{ $migrationCertificate->before_village }}&nbsp;</p> घर
                                नं &nbsp;<p style="border-bottom: dashed; width: 20%" class="text-center">
                                    &nbsp;{{ $migrationCertificate->before_houseno }}&nbsp;</p>बसाई सराईको मिति &nbsp;
                                <p style="border-bottom: dashed; width: 25%" class="text-center">
                                    &nbsp;{{ $migrationCertificate->migration_date }}&nbsp;</p>
                            </div> <br>

                            <div class="row">
                                <p style="text-align: justify">
                                    (४) बसाई सराईको कारण &nbsp;
                                <h4 style="border-bottom: dashed; width: 20%" class="text-center">
                                    {{ $migrationCertificate->migration_reason }}&nbsp;</h4>यसमा लेखिएको विवरण
                                साँचो हो झुठ
                                ठहरे कानून वमोजिम सहुँला
                                बुझाउला भनी सही छाप गर्ने सूचकको
                                </p>
                            </div>
                            <div class="col-lg-8 mt-2">
                                <table class="my_table col-lg-12" style="align-items: center;">
                                    <thead>
                                        <tr>
                                            <th>नाम</th>
                                            <td>{{ $migrationCertificate->relative_name }}</td>

                                            <th>ठेगाना</th>
                                            <td>{{ $migrationCertificate->relative_address }}</td>
                                        </tr>
                                        <tr>
                                            <th>सही छाप</th>
                                            <th></th>

                                            <th>मिति</th>
                                            <td>{{ $migrationCertificate->date }}</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <h3 class="text-center h4 font-weight-bold ">सम्बन्धित फाइल</h3>
                        <img src="{{ asset('storage') }}{{ '/' }}{{ $migrationCertificate->file }}"
                            class="img-fluid mt-2" alt="सम्बन्धित फाइल फेला परेन" style="width:100%;position:relative;">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .custom-select {
            height: 43px;
            font-size: 15px;
        }

        .custom_table th,
        .custom_table td {
            border: 1px solid #ccc;
        }
    </style>
