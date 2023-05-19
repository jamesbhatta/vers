@extends('layouts.print')
@section('content')
    <div class="container justify-content-center">
        <h3 class="text-center pb-2 font-weight-bold">@lang('navigation.migration-notice-form')</h3>
        <h6 class="col-12 t-bold text-center mt-0"> (अनुसूची-६ )</h6>
        <h6 class="col-12 text-center mt-1">(नियम-५ संग सम्बन्धित ) </h6>
        <div class="row d-flex">
            <div class="col-lg-12 mt-3">
                <table class="my_table col-12">
                    <tr>
                        <td>प्रदेश</td>
                        <td id=province>{{ $migrationCertificate->province }}</td>

                        <td>स्थानीय पञ्जिकाधिकारी</td>
                        <td class="myText" id=administrator>{{ $migrationCertificate->administrator }}</td>
                    </tr>
                    <tr>
                        <td>जिल्ला</td>
                        <td id=district>{{ $migrationCertificate->district }}</td>
                        <td>दर्ता न.</td>
                        <td id=reg_number">{{ $migrationCertificate->reg_number }}</td>
                    </tr>
                    <tr>
                        <td>ग.पा. / न.पा</td>
                        <td id=municipality>{{ $migrationCertificate->municipality }}</td>
                        <td>दर्ता मिति</td>
                        <td id=entry_date>{{ $migrationCertificate->entry_date }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-3 mt-3">
            </div>
        </div>
        <h5 class="col-lg-12 mt-3">(१) बसाई सर्ने परिवारका सदस्यहरुको नाम/बसाई
            सराई व्यक्तिको</h5>
        <div class="col-12">
            <table class="my_table">
                <thead>
                    <tr>
                        <th style="text-align:center;" rowspan=2>क्र. स. </th>
                        <th style="text-align:center;" rowspan=2>नाम ,थर</th>
                        <th style="text-align:center;" rowspan=2> उमेर</th>
                        <th style="text-align:center;" rowspan=2>लिङ्ग</th>
                        <th style="text-align:center;" rowspan=2>जन्म स्थान
                        </th>
                        <th style="text-align:center;" rowspan=2>नागरिकता न.
                        </th>
                        <th style="text-align:center;" colspan=2>
                            ठेगाना</th>
                        <th style="text-align:center;" rowspan=2>शैक्षिक
                            योग्यता</th>
                        <th style="text-align:center;" rowspan=2>धर्म</th>
                        <th style="text-align:center;" rowspan=2>मातृभाषा</th>
                    </tr>
                    <tr>
                        <th style="text-align:center;"">स्थायी</th>
                        <th style="text-align:center;"">अस्थायी</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($migrationCertificate->families as $family)
                        <tr>

                            <td>{{ $loop->iteration }}</td>
                            <td> {{ $family->name }}</td>
                            <td>{{ $family->age }}</td>
                            <td> {{ $family->gender }}</td>
                            <td> {{ $family->birthplace }}</td>
                            <td> {{ $family->citizenship }}</td>
                            <td>{{ $family->permanent_address }}</td>
                            <td>{{ $family->temporary_address }}</td>
                            <td> {{ $family->education }}</td>
                            <td> {{ $family->religion }}</td>
                            <td> {{ $family->mothertongue }}</td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="p-3 mt-2">
            <div style="text-align: justify" class="">
                <div class="row" style="text-align: justify">
                    (२) कहाँ
                    <p class="px-3 mx-1" id=type>{{ $migrationCertificate->type }}</p>
                    <p style="border-bottom: dashed 1px rgb(132, 132, 132);" class="px-3 mx-1" id=migration_district>
                        {{ $migrationCertificate->migration_district }}</p> जिल्ला &nbsp;
                    <p style="border-bottom: dashed 1px rgb(132, 132, 132);" class="px-3 mx-1" id=migration_municipality>
                        {{ $migrationCertificate->migration_municipality }}</p>
                    <p class="mb-2"></p>
                    न.पा./गा.वि.स. वडा नं. &nbsp;<p style="border-bottom: dashed 1px rgb(132, 132, 132);" class="px-3 mx-1" id=migration_ward>
                        {{ $migrationCertificate->migration_ward }} </p>
                    टोलको नाम &nbsp;<p style="border-bottom: dashed 1px rgb(132, 132, 132);" class="px-3 mx-1"
                        id=migration_village>{{ $migrationCertificate->migration_village }}</p>
                    घर
                    नं &nbsp;<p style="border-bottom: dashed 1px rgb(132, 132, 132);" class="px-3 mx-1" id=migration_houseno>
                        {{ $migrationCertificate->migration_houseno }}</p>
                    बसाई सराईको मिति &nbsp;
                    <p class="mb-2 col-12></p>

                    <p style="border-bottom: dashed 1px rgb(132, 132, 132);" class="px-3 mx-1" id=migration_date>
                        {{ $migrationCertificate->migration_date }}
                    </p>
                </div> <br>

                <div class="row>
                    <p style="text-align: justify">
                        (३) बसाई सराईको कारण &nbsp;
                    <h4 style="border-bottom: dashed 1px rgb(132, 132, 132);" class="px-3 mx-1" id=migration_reason>
                        {{ $migrationCertificate->migration_reason }}
                    </h4>

                    </p>
                </div>
                <div class="col-lg-12 mt-2">
                    यसमा लेखिएको विवरण
                    साँचो हो झुठ
                    ठहरे कानून वमोजिम सहुँला
                    बुझाउला भनी सही छाप गर्ने सूचकको
                    <table class="my_table col-12">
                        <tr>
                            <td>क</td>
                            <td>नाम</td>
                            <td class="myText" id=relative_name>{{ $migrationCertificate->relative_name }}</td>
                        </tr>

                        <tr>
                            <td>ख</td>
                            <td>ठेगाना</td>
                            <td class="myText" id=relative_address>{{ $migrationCertificate->relative_address }}</td>
                        </tr>
                        <tr>
                            <td>ग</td>
                            <td>मिति</td>
                            <td id=date>{{ $migrationCertificate->date }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
