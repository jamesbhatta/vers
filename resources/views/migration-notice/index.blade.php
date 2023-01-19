@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="p-3">
            <div class="container-fluid font-noto">
                <nav aria-label="breadcrumb" class="d-flex justify-content-between rounded">
                    <div class="my-breadcrumb">
                        <a class="first-breadcrumb" href="{{ route('migration.index') }}">बसाईसराई दर्ता</a>
                        <a class="sub-breadcrumb" href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        <a class="final-item ml-3" href="">@lang('navigation.migration-notice-form')</a>
                    </div>
                    <div>
                        <a href="{{ route('migration.create') }}" class="btn btn-success"><i
                                class="fas fa-plus-circle mr-2"></i>@lang('navigation.add_new')</a>
                    </div>
                </nav>
                {{-- <hr> --}}
                <label class="font-weight-bold pb-4 border-bottom col-12" style="font-size: 20px;padding:0"></label>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span><i class="bi bi-x-circle-fill"></i></span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header d-flex justify-content-between" style="cursor: pointer" id="cardHeader">
                        <h5 style="font-size: 20px">@lang('navigation.find-out-migration')</h5>
                        <h5 style="font-size: 20px"><i class="fas fa-chevron-down"></i></h5>
                    </div>
                    <div class="card-body" id="cardBody">
                        <form action="{{ route('migration.filter') }}" method="get">
                            @csrf
                            <div class="row justify-content-between">
                                <div class="col-lg-1">
                                    @isset($old)
                                        <input type="text" class="form-control" placeholder="दर्ता न." name="reg_number"
                                            value="{{ $old->reg_number }}">
                                    @else
                                        <input type="text" class="form-control" placeholder="दर्ता न." name="reg_number">
                                    @endisset
                                </div>
                                <div class="col-lg-2">
                                    @isset($old)
                                        <input type="text" class="form-control" id="nepali-datepicker1"
                                            placeholder=" दर्ता मिति" name="entry_date" value="{{ $old->entry_date }}">
                                    @else
                                        <input type="text" class="form-control" id="nepali-datepicker1"
                                            placeholder=" दर्ता मिति" name="entry_date">
                                    @endisset
                                </div>
                                <div class="col-lg-2">
                                    @isset($old)
                                        <input type="text" class="form-control" id="nepali-datepicker2"
                                            placeholder=" बसाई सराईको मिति" name="migration_date"
                                            value="{{ $old->migration_date }}">
                                    @else
                                        <input type="text" class="form-control" id="nepali-datepicker2"
                                            placeholder=" बसाई सराईको मिति" name="migration_date">
                                    @endisset
                                </div>

                                <div class="col-lg-1">
                                    <input type="submit" class="btn btn-info bg-info" value="Filter">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <div class="box mt-3">
                    <div class="box__body">
                        <table class="table table-responsive-sm" id="myTable">
                            <thead class="thead-light">
                                <tr class="text-uppercase">
                                    <th>#</th>
                                    <th>दर्ता नं.</th>
                                    <th>दर्ता मिति</th>
                                    <th>बसाई सराईको कारण</th>
                                    <th>बसाई सराईको मिति </th>

                                    <th class="text-right">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($migrationCertificates as $migrationCertificate)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $migrationCertificate->reg_number }}</td>

                                        <td>{{ $migrationCertificate->entry_date }}</td>
                                        <td>{{ $migrationCertificate->migration_reason }}</td>
                                        <td>{{ $migrationCertificate->migration_date }}</td>
                                        <td class="float-right d-flex">
                                            <a href="{{ route('migration.add-family', $migrationCertificate->id) }}"
                                                class="action-btn text-primary"><i class="fas fa-plus-circle "></i></a>
                                            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"
                                                class="action-btn text-primary show"
                                                id="{{ $migrationCertificate->id }}"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('migration.edit', $migrationCertificate->id) }}"
                                                class="action-btn text-primary"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('migration.delete', $migrationCertificate->id) }}"
                                                method="post" onsubmit="return confirm('के तपाईँ निश्चित हुनुहुन्छ?')"
                                                class="form-inline d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="action-btn text-danger"><i
                                                        class="far fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- Bootstrap modal --}}
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="container-fluid" id="DivIdToPrint">
                                    <div class="">
                                        <div class="container-fluid">
                                            <div class="col-12 pt-3 d-flex justify-content-end">
                                                <a href="" class="btn btn-info" id="detail_print">Print</a>
                                            </div>
                                            <div class="card p-3 border-0" id="myId">
                                                <h3 class="text-center pb-2 font-weight-bold">@lang('navigation.migration-notice-form')</h3>
                                                <h6 class="col-12  t-bold  text-center mt-0"> (अनुसूची-६ )</h6>
                                                <h6 class="col-12  text-center mt-1">(नियम-५ संग सम्बन्धित ) </h6>
                                                {{-- <label class="col-12  text-center mt-2" for=""> (अनुसूची-६ ) (नियम-५ संग सम्बन्धित ) </label> --}}
                                                <div class="row d-flex">
                                                    {{-- <div class="col-xl-5" style="text-align: justify;">
                                                        <h5 class="col-12  mt-1" for=""> श्री स्थानीय पंजीअधिकारी ज्यु,</h5>
                                                        <h5 class="col-12  mt-1" for="">
                                                            <i
                                                                style="border-bottom:dashed; width:20px;">{{ $migrationCertificate->municipality }}</i>&nbsp;गा.वि.स./न.पा.
                                                        </h5>
                                                        <h2 class="col-12 mt-3"> स्थानीय पंजीअधिकारीको कार्यालय </h5>
                                                            <h5 class="col-12  mt-3" for=""> महोदय,</h5>
                                                            <h5 class="col-12  mt-1" for="" style="text-align:justify;"> निम्न लिखित विवरण खुलाई
                                                                बसाई सराईको सूचना दिन आएको
                                                                छु ।
                                                                कानून
                                                                अनुसार बसाई सराई दर्ता गरी पाउं । </h5>
                                                    </div> --}}
                                                    <div class="col-lg-12 mt-3">
                                                        {{-- <table class="my_table my_table1 col-lg-12">
                                                            <tr>
                                                                <th class="text-center"></th>
                                                                <th class="text-center">नाम</th>
                                                                <th class="text-center">नं.</th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-center">प्रदेश</th>
                                                                <td class="text-center" style="font-size: 12px">
                                                                    <i>{{ $migrationCertificate->province }}</i>
                                                                <td>

                                                            </tr>
                                                            <tr>
                                                                <th class="text-center">जिल्ला</th>
                                                                <td class="text-center" style="font-size: 12px">
                                                                    <i>{{ $migrationCertificate->district }}</i></th>
                                                                <td class="text-center"></td>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-center">ग.पा./न.पा</th>
                                                                <td class="text-center"style="font-size: 12px">
                                                                    <i>{{ $migrationCertificate->municipality }}</i></th>
                                                                <td class="text-center"></td>
                                                            </tr>
                                                        </table> --}}
                                                        <table class="my_table col-12">
                                                            <tr>
                                                                <td>प्रदेश</td>
                                                                <td id="province"></td>
                                                                <td rowspan="3" style="width: 20%"></td>
                                                                <td>स्थानीय पञ्जिकाधिकारी</td>
                                                                <td class="myText" id="administrator"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>जिल्ला</td>
                                                                <td id="district"></td>
                                                                <td>दर्ता न.</td>
                                                                <td id="reg_number"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>ग.पा. / न.पा</td>
                                                                <td id="municipality"></td>
                                                                <td>दर्ता मिति</td>
                                                                <td id="entry_date"></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="col-lg-3 mt-3">
                                                        {{-- <table class="registar_table">
                                                            <tr>
                                                                <th></th>
                                                                <th>नाम:</th>
                                                                <th>नं.</th>
                                                            </tr>
                                                            <tr>
                                                                <td>स्थानीय पञ्जिकाधिकारी:</td>
                                                                <td style="font-size: 12px;"><i>{{ $migrationCertificate->administrator }}</i></td>
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
                                                        </table> --}}
                                                    </div>
                                                </div>
                                                <h5 class="col-lg-12  mt-3">(१) बसाई सर्ने परिवारका सदस्यहरुको नाम/बसाई
                                                    सराई व्यक्तिको</h5>
                                                <div class="col-12" style="overflow-x: scroll">
                                                    <table class="my_table">
                                                        <thead>
                                                            <tr>
                                                                <th style="text-align:center" rowspan="2">क्र. स. </th>
                                                                <th style="text-align:center" rowspan="2">नाम ,थर</th>
                                                                <th style="text-align:center" rowspan="2"> उमेर</th>
                                                                <th style="text-align:center" rowspan="2">लिङ्ग</th>
                                                                <th style="text-align:center" rowspan="2">जन्म स्थान
                                                                </th>
                                                                <th style="text-align:center" rowspan="2">नागरिकता न.
                                                                </th>
                                                                <th style="text-align:center" colspan="2"
                                                                    align="center">
                                                                    ठेगाना</th>
                                                                <th style="text-align:center" rowspan="2">शैक्षिक
                                                                    योग्यता</th>
                                                                <th style="text-align:center" rowspan="2">धर्म</th>
                                                                <th style="text-align:center" rowspan="2">मातृभाषा</th>
                                                                <th style="text-align:center" rowspan="2">कैफियत</th>
                                                            </tr>
                                                            <tr>
                                                                <th style="text-align:center">स्थायी</th>
                                                                <th style="text-align:center">अस्थायी</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="family_record">
                                                        </tbody>
                                                    </table>
                                                </div>
                                                {{-- </div> --}}
                                                <div class="p-3  mt-2">
                                                    <div style="text-align: justify" class="">
                                                        <div class="row" style="text-align: justify;">
                                                            (२) कहाँ सरी जाने <p
                                                                style="border-bottom: dashed 1px rgb(132, 132, 132);"
                                                                class="px-3 mx-1" class="text-center"
                                                                id="after_district"></p>
                                                            जिल्ला
                                                            <p style="border-bottom: dashed 1px rgb(132, 132, 132);"
                                                                class="px-3 mx-1" id="after_municipality"></p>
                                                            न.पा./गा.वि.स. वडा नं. &nbsp;
                                                            <p class="mb-2 col-12"></p>
                                                            <p style="border-bottom: dashed 1px rgb(132, 132, 132);"
                                                                class="px-3 mx-1" id="after_ward"></p> टोलको नाम
                                                            &nbsp;
                                                            <p style="border-bottom: dashed 1px rgb(132, 132, 132);"
                                                                class="px-3 mx-1" id="after_village"></p> घर
                                                            नं &nbsp;<p
                                                                style="border-bottom: dashed 1px rgb(132, 132, 132);"
                                                                class="px-3 mx-1" id="after_houseno"></p>
                                                        </div>
                                                        <br>
                                                        <div class="row" style="text-align: justify">
                                                            (३) कहाँ बाट सरी आएको
                                                            <p style="border-bottom: dashed 1px rgb(132, 132, 132);"
                                                                class="px-3 mx-1" id="before_district">
                                                            </p> जिल्ला &nbsp;<p
                                                                style="border-bottom: dashed 1px rgb(132, 132, 132);"
                                                                class="px-3 mx-1" id="before_municipality">
                                                            </p>
                                                            <p class="mb-2 col-12"></p>

                                                            न.पा./गा.वि.स. वडा
                                                            नं. &nbsp;<p
                                                                style="border-bottom: dashed 1px rgb(132, 132, 132);"
                                                                class="px-3 mx-1" id="before_ward"></p>
                                                            टोलको नाम &nbsp;<p
                                                                style="border-bottom: dashed 1px rgb(132, 132, 132);"
                                                                class="px-3 mx-1" id="before_village"></p>
                                                            घर
                                                            नं &nbsp;<p
                                                                style="border-bottom: dashed 1px rgb(132, 132, 132);"
                                                                class="px-3 mx-1" id="before_houseno"></p>
                                                            बसाई सराईको मिति &nbsp;
                                                            <p class="mb-2 col-12"></p>

                                                            <p style="border-bottom: dashed 1px rgb(132, 132, 132);"
                                                                class="px-3 mx-1" id="migration_date"></p>
                                                        </div> <br>

                                                        <div class="row">
                                                            <p style="text-align: justify">
                                                                (४) बसाई सराईको कारण &nbsp;
                                                            <h4 style="border-bottom: dashed 1px rgb(132, 132, 132);"
                                                                class="px-3 mx-1" id="migration_reason"></h4>

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
                                                                    <td class="myText" id="relative_name"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>ख</td>
                                                                    <td>मृतक संगको सम्बन्ध</td>
                                                                    <td class="myText" id="relationship"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>ग</td>
                                                                    <td>ठेगाना</td>
                                                                    <td class="myText" id="relative_address"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>घ</td>
                                                                    <td>मिति</td>
                                                                    <td id="date"></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mt-1">
                                                    <h3 class="text-center h4 font-weight-bold ">सम्बन्धित फाइल</h3>
                                                    <img src="{{ asset('storage') }}{{ '/' }}{{ $migrationCertificate->file }}"
                                                        class="img-fluid m-auto" alt="सम्बन्धित फाइल फेला परेन"
                                                        style="width:80%;position:relative; height:40%;">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/mdb/js/jquery.min.js') }}"></script>
<script>
    var family_data = "";
    $(document).on("click", ".show", function() {
        var id = $(this).attr('id');
        var url = "/api/fetch-migration/" + id;

        axios
            .get(url)
            .then((response) => {
                // var data = response.data;
                console.log(response.data);
                $('#after_province').html(response.data.after_province);
                $('#after_district').html(response.data.after_district);
                $('#after_municipality').html(response.data.after_municipality);
                $('#after_vdc').html(response.data.after_vdc);
                $('#after_village').html(response.data.after_village);
                $('#after_ward').html(response.data.after_ward);
                $('#after_houseno').html(response.data.after_houseno);

                $('#province').html(response.data.province);
                $('#district').html(response.data.district);
                $('#municipality').html(response.data.municipality);
                $('#vdc').html(response.data.vdc);
                $('#administrator').html(response.data.administrator);
                $('#reg_number').html(response.data.reg_number);
                $('#entry_date').html(response.data.entry_date);

                $('#before_province').html(response.data.before_province);
                $('#before_district').html(response.data.before_district);
                $('#before_municipality').html(response.data.before_municipality);
                $('#before_vdc').html(response.data.before_vdc);
                $('#before_village').html(response.data.before_village);
                $('#before_houseno').html(response.data.before_houseno);
                $('#before_ward').html(response.data.before_ward);
                $('#migration_reason').html(response.data.migration_reason);
                $('#migration_date').html(response.data.migration_date);

                $('#relative_name').html(response.data.relative_name);
                $('#relative_address').html(response.data.relative_address);
                $('#relationship').html(response.data.relationship);
                $('#date').html(response.data.date);
                family_data="";
                var num="";
                for (let i = 0; i < response.data.families.length; i++) {
                    num=i+1;
                    family_data += "<tr>";
                    family_data += "<td>" + num + "</td>";
                    family_data += "<td>" + response.data.families[i].name + "</td>";
                    family_data += "<td>" + response.data.families[i].age + "</td>";
                    family_data += "<td>" + response.data.families[i].gender + "</td>";
                    family_data += "<td>" + response.data.families[i].birthplace + "</td>";
                    family_data += "<td>" + response.data.families[i].citizenship + "</td>";
                    family_data += "<td>" + response.data.families[i].permanent_addres + "</td>";
                    family_data += "<td>" + response.data.families[i].temporary_address + "</td>";
                    family_data += "<td>" + response.data.families[i].education + "</td>";
                    family_data += "<td>" + response.data.families[i].religion + "</td>";
                    family_data += "<td>" + response.data.families[i].mothertongue + "</td>";
                    family_data += "<td>" + response.data.families[i].description + "</td>";
                    family_data += "</td>";
                }

                $('#family_record').html(family_data);

            })
            .catch((error) => console.log(error));
    });
</script>
