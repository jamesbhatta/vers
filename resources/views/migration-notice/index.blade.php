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
                    <div class="d-flex">
                        {{-- Filtered data in PDF/Print --}}
                        <form action="{{ route('migration.listprint') }}" method="GET" role="search">
                            @isset($_GET['reg_number'])
                            <input type="hidden" name="reg_number"
                                value="{{ $_GET['reg_number'] ? $_GET['reg_number'] : '' }}">
                        @endisset
                        @isset($_GET['user_id'])
                            <input type="hidden" name="user_id" value="{{ $_GET['user_id'] }}">
                        @endisset

                        @isset($_GET['book_id'])
                            <input type="hidden" name="book_id" value="{{ $_GET['book_id'] }}">
                        @endisset

                        @isset($_GET['migration_date'])
                            <input type="hidden" name="migration_date" value="{{ $_GET['migration_date'] }}">
                        @endisset
                        @isset($_GET['from'])
                            <input type="hidden" name="from" value="{{ $_GET['from'] }}">
                        @endisset
                        @isset($_GET['to'])
                            <input type="hidden" name="to" value="{{ $_GET['to'] }}">
                        @endisset

                            <div class="col-lg-1">
                                <button
                                    class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light d-flex btn-print"
                                    type="submit" style="background-color:#17A2B8; color: #fff;"><i
                                        class="fas fa-print mr-2 mt-1"></i> Print</button>
                            </div>
                        </form>


                        {{-- Filtered data in Excel --}}
                        <form action="{{ route('migration.excel') }}" method="GET" role="search">
                            @isset($_GET['reg_number'])
                                <input type="hidden" name="reg_number"
                                    value="{{ $_GET['reg_number'] ? $_GET['reg_number'] : '' }}">
                            @endisset
                            @isset($_GET['user_id'])
                                <input type="hidden" name="user_id" value="{{ $_GET['user_id'] }}">
                            @endisset

                            @isset($_GET['book_id'])
                                <input type="hidden" name="book_id" value="{{ $_GET['book_id'] }}">
                            @endisset

                            @isset($_GET['migration_date'])
                                <input type="hidden" name="migration_date" value="{{ $_GET['migration_date'] }}">
                            @endisset
                            @isset($_GET['from'])
                                <input type="hidden" name="from" value="{{ $_GET['from'] }}">
                            @endisset
                            @isset($_GET['to'])
                                <input type="hidden" name="to" value="{{ $_GET['to'] }}">
                            @endisset

                            <div class="col-lg-1">
                                <button
                                    class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light d-flex btn-excel"
                                    type="submit" style="background-color:#17A2B8; color: #fff;"><i
                                        class="fas fa-file-excel mr-2 mt-1"></i> Excel</button>
                            </div>
                        </form>
                        <a href="{{ route('migration.create') }}"
                            class="btn bg-success text-white my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light d-flex"
                            style="height:42px"><i class="fas fa-plus-circle mr-2 mt-1"></i>@lang('navigation.add_new')</a>


                    </div>
                </nav>
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
                            <div class="row">
                                <div class="col-md-3">
                                    @isset($old)
                                        <input type="text" class="form-control" placeholder="दर्ता न." name="reg_number"
                                            value="{{ $old->reg_number }}">
                                    @else
                                        <input type="text" class="form-control" placeholder="दर्ता न." name="reg_number">
                                    @endisset
                                </div>
                                <div class="mb-2 col-md-3">
                                    @isset($old)
                                        <input type="text" class="form-control myText" id="nepali-datepicker"
                                            placeholder="दर्ता मिति(From)" name="from" value="{{ $old->from }}">
                                    @else
                                        <input type="text" class="form-control myText" id="nepali-datepicker"
                                            placeholder="दर्ता मिति(From)" name="from">
                                    @endisset
                                </div>
                                <div class="mb-2 col-md-3">
                                    @isset($old)
                                        <input type="text" class="form-control myText" id="nepali-datepicker2"
                                            placeholder="दर्ता मिति(To)" name="to" value="{{ $old->to }}">
                                    @else
                                        <input type="text" class="form-control myText" id="nepali-datepicker2"
                                            placeholder="दर्ता मिति(To)" name="to">
                                    @endisset
                                </div>
                                {{-- <div class="col-md-3">
                                    @isset($old)
                                        <input type="text" class="form-control" id="nepali-datepicker1"
                                            placeholder=" दर्ता मिति" name="entry_date" value="{{ $old->entry_date }}">
                                    @else
                                        <input type="text" class="form-control" id="nepali-datepicker1"
                                            placeholder=" दर्ता मिति" name="entry_date">
                                    @endisset
                                </div> --}}

                                <div class="col-md-3">
                                    @isset($old)
                                        <input type="text" class="form-control" id="nepali-datepicker3"
                                            placeholder=" बसाई सराईको मिति" name="migration_date"
                                            value="{{ $old->migration_date }}">
                                    @else
                                        <input type="text" class="form-control" id="nepali-datepicker3"
                                            placeholder=" बसाई सराईको मिति" name="migration_date">
                                    @endisset
                                </div>
                                <div class="mb-2 col-md-3">
                                    <x-book-select :bookType="'बसाईसराई दर्ता'" />
                                </div>
                                <div class="mb-2 col-md-3">
                                    <x-user-select />
                                </div>

                                <div class="col-md-1">
                                    <button type="submit" class="btn btn-info bg-info">Filter</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <div class="box mt-3">
                    <div class="box__body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr class="text-uppercase">
                                        <th>#</th>
                                        <th>किताब कोड</th>
                                        <th>दर्ता नं.</th>
                                        <th>दर्ता मिति</th>
                                        <th>बसाईसराईको प्रकार</th>
                                        <th>बसाई सराईको मिति </th>
                                        <th class="text-right">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($migrationCertificates as $migrationCertificate)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $migrationCertificate->book->code }}</td>
                                            <td>{{ $migrationCertificate->reg_number }}</td>

                                            <td>{{ $migrationCertificate->entry_date }}</td>
                                            <td>{{ $migrationCertificate->type }}</td>
                                            <td>{{ $migrationCertificate->migration_date }}</td>
                                            <td class="float-right d-flex">
                                                <a href="{{ route('migration.add-family', $migrationCertificate->id) }}"
                                                    class="action-btn text-primary" data-toggle="tooltip"
                                                    data-placement="top" title="Add Family"><i
                                                        class="fas fa-plus-circle "></i></a>
                                                <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"
                                                    data-toggle="tooltip" data-placement="top" title="Show detail"
                                                    class="action-btn text-primary show"
                                                    id="{{ $migrationCertificate->id }}"><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('migration.edit', $migrationCertificate->id) }}"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="Edit migration notice" class="action-btn text-primary"><i
                                                        class="fa fa-edit"></i></a>
                                                <form action="{{ route('migration.delete', $migrationCertificate->id) }}"
                                                    method="post"
                                                    onsubmit="return confirm('के तपाईँ निश्चित हुनुहुन्छ?')"
                                                    class="form-inline d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="action-btn text-danger"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Delete migration notice"><i
                                                            class="far fa-trash-alt"></i></button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="container-fluid" id="DivIdToPrint">
                                    <div class="">
                                        <div class="container-fluid">
                                            <div class="col-12 pt-3 d-flex justify-content-end">
                                                <a href="" class="btn btn-info" target="_blank"
                                                    id="detail_print">Print</a>
                                            </div>
                                            <div class="card p-3 border-0" id="myId">
                                                <h3 class="text-center pb-2 font-weight-bold">@lang('navigation.migration-notice-form')</h3>
                                                <h6 class="col-12  t-bold  text-center mt-0"> (अनुसूची-६ )</h6>
                                                <h6 class="col-12  text-center mt-1">(नियम-५ संग सम्बन्धित ) </h6>
                                                <div class="row d-flex">
                                                    <div class="col-lg-12 mt-3">
                                                        <table class="my_table col-12">
                                                            <tr>
                                                                <td>प्रदेश</td>
                                                                <td id="province"></td>
                                                                {{-- <td rowspan="3" style="width: 0%"></td> --}}
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
                                                <div class="p-3  mt-2">
                                                    <div style="text-align: justify" class="">
                                                        <div class="row" style="text-align: justify">
                                                            (२) कहाँ
                                                            <p class="px-3 mx-1" id="type"></p>
                                                            <p style="border-bottom: dashed 1px rgb(132, 132, 132);"
                                                                class="px-3 mx-1" id="migration_district">
                                                            </p> जिल्ला &nbsp;<p
                                                                style="border-bottom: dashed 1px rgb(132, 132, 132);"
                                                                class="px-3 mx-1" id="migration_municipality">
                                                            </p>
                                                            <p class="mb-2 col-12"></p>

                                                            न.पा./गा.वि.स. वडा
                                                            नं. &nbsp;<p
                                                                style="border-bottom: dashed 1px rgb(132, 132, 132);"
                                                                class="px-3 mx-1" id="migration_ward"></p>
                                                            टोलको नाम &nbsp;<p
                                                                style="border-bottom: dashed 1px rgb(132, 132, 132);"
                                                                class="px-3 mx-1" id="migration_village"></p>
                                                            घर
                                                            नं &nbsp;<p
                                                                style="border-bottom: dashed 1px rgb(132, 132, 132);"
                                                                class="px-3 mx-1" id="migration_houseno"></p>
                                                            बसाई सराईको मिति &nbsp;
                                                            <p class="mb-2 col-12"></p>

                                                            <p style="border-bottom: dashed 1px rgb(132, 132, 132);"
                                                                class="px-3 mx-1" id="migration_date"></p>
                                                        </div> <br>

                                                        <div class="row">
                                                            <p style="text-align: justify">
                                                                (३) बसाई सराईको कारण &nbsp;
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
                                                                {{-- <tr>
                                                                    <td>ख</td>
                                                                    <td> संगको सम्बन्ध</td>
                                                                    <td class="myText" id="relationship"></td>
                                                                </tr> --}}
                                                                <tr>
                                                                    <td>ख</td>
                                                                    <td>ठेगाना</td>
                                                                    <td class="myText" id="relative_address"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>ग</td>
                                                                    <td>मिति</td>
                                                                    <td id="date"></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mt-1">
                                                    <h3 class="text-center h4 font-weight-bold ">सम्बन्धित फाइल</h3>
                                                    <img src="" id="related_file" class="img-fluid m-auto"
                                                        alt="सम्बन्धित फाइल फेला परेन"
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
                $('#migration_province').html(response.data.migration_province);
                $('#migration_district').html(response.data.migration_district);
                $('#migration_municipality').html(response.data.migration_municipality);
                $('#migration_vdc').html(response.data.migration_vdc);
                $('#migration_village').html(response.data.migration_village);
                $('#migration_ward').html(response.data.migration_ward);
                $('#migration_houseno').html(response.data.migration_houseno);

                $('#province').html(response.data.province);
                $('#district').html(response.data.district);
                $('#municipality').html(response.data.municipality);
                $('#vdc').html(response.data.vdc);
                $('#administrator').html(response.data.administrator);
                $('#reg_number').html(response.data.reg_number);
                $('#entry_date').html(response.data.entry_date);
                if (response.data.type == "बसाई सरी आएको") {
                    var additionalString = "बाट ";
                    $('#type').html(additionalString + response.data.type);
                } else {
                    $('#type').html(response.data.type);

                }
                $('#migration_reason').html(response.data.migration_reason);
                $('#migration_date').html(response.data.migration_date);

                $('#relative_name').html(response.data.relative_name);
                $('#relative_address').html(response.data.relative_address);
                $('#relationship').html(response.data.relationship);
                $('#date').html(response.data.date);
                family_data = "";
                var num = "";
                for (let i = 0; i < response.data.families.length; i++) {
                    num = i + 1;
                    family_data += "<tr>";
                    family_data += "<td>" + num + "</td>";
                    family_data += "<td>" + response.data.families[i].name + "</td>";
                    family_data += "<td>" + response.data.families[i].age + "</td>";
                    family_data += "<td>" + response.data.families[i].gender + "</td>";
                    family_data += "<td>" + response.data.families[i].birthplace + "</td>";
                    family_data += "<td>" + response.data.families[i].citizenship + "</td>";
                    family_data += "<td>" + response.data.families[i].permanent_address + "</td>";
                    family_data += "<td>" + response.data.families[i].temporary_address + "</td>";
                    family_data += "<td>" + response.data.families[i].education + "</td>";
                    family_data += "<td>" + response.data.families[i].religion + "</td>";
                    family_data += "<td>" + response.data.families[i].mothertongue + "</td>";
                    family_data += "</td>";
                }

                var img = response.data.file;
                console.log(response.data.file);
                var half_src = "{{ asset('storage') }}{{ '/' }}";
                var src = half_src.concat(img, '');
                $('#related_file').attr('src', src);


                $('#family_record').html(family_data);

                var route = "{{ route('migration.print', 'id') }}";
                route = route.replace('id', $(this).attr('id'));
                $('#detail_print').attr("href", route);

            })
            .catch((error) => console.log(error));
    });
</script>
