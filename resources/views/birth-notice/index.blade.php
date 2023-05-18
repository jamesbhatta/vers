@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="p-3">
            <div class="container-fluid font-noto">
                <nav aria-label="breadcrumb" class="d-flex justify-content-between">

                    <div class="my-breadcrumb">
                        <a class="first-breadcrumb" href="{{ route('birth.index') }}">जन्म दर्ता</a>
                        <a class="sub-breadcrumb" href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        <a class="final-item ml-3">@lang('navigation.birth-notice-form')</a>
                    </div>
                    <div class="d-flex">
                        {{-- Filtered data in PDF/Print --}}
                        <div class="mx-4">
                            <form action="{{ route('birth.listprint') }}" method="GET" target="_blank" role="search">
                                @isset($_GET['darta_number'])
                                    <input type="hidden" name="darta_number"
                                        value="{{ $_GET['darta_number'] ? $_GET['darta_number'] : '' }}">
                                @endisset

                                @isset($_GET['name'])
                                    <input type="hidden" name="name" value="{{ $_GET['name'] }}">
                                @endisset

                                @isset($_GET['dob'])
                                    <input type="hidden" name="dob" value="{{ $_GET['dob'] }}">
                                @endisset

                                @isset($_GET['user_id'])
                                    <input type="hidden" name="user_id" value="{{ $_GET['user_id'] }}">
                                @endisset

                                @isset($_GET['father_name'])
                                    <input type="hidden" name="father_name" value="{{ $_GET['father_name'] }}">
                                @endisset

                                @isset($_GET['mother_name'])
                                    <input type="hidden" name="mother_name" value="{{ $_GET['mother_name'] }}">
                                @endisset

                                @isset($_GET['grandfather_name'])
                                    <input type="hidden" name="grandfather_name" value="{{ $_GET['grandfather_name'] }}">
                                @endisset

                                {{-- ==== --}}
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
                        </div>

                        {{-- Filtered data in Excel --}}
                        {{-- <form action="{{ route('birth.excel') }}" method="GET" role="search">
                            @isset($_GET['darta_number'])
                                <input type="hidden" name="darta_number"
                                    value="{{ $_GET['darta_number'] ? $_GET['darta_number'] : '' }}">
                            @endisset

                            @isset($_GET['name'])
                                <input type="hidden" name="name" value="{{ $_GET['name'] }}">
                            @endisset

                            @isset($_GET['dob'])
                                <input type="hidden" name="dob" value="{{ $_GET['dob'] }}">
                            @endisset
                            @isset($_GET['user_id'])
                                <input type="hidden" name="user_id" value="{{ $_GET['user_id'] }}">
                            @endisset
                            @isset($_GET['father_name'])
                                <input type="hidden" name="father_name" value="{{ $_GET['father_name'] }}">
                            @endisset

                            @isset($_GET['mother_name'])
                                <input type="hidden" name="mother_name" value="{{ $_GET['mother_name'] }}">
                            @endisset

                            @isset($_GET['grandfather_name'])
                                <input type="hidden" name="grandfather_name" value="{{ $_GET['grandfather_name'] }}">
                            @endisset

                            @isset($_GET['book_id'])
                                <input type="hidden" name="book_id" value="{{ $_GET['book_id'] }}">
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
                        </form> --}}
                        <a href="{{ route('birth.create') }}"
                            class="btn bg-success text-white my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light d-flex"
                            style="height:42px"><i class="fas fa-plus-circle mr-2 mt-1"></i>@lang('navigation.add_new')</a>
                    </div>
                </nav>
                <hr>
                <label class="font-weight-bold pb-2 border-bottom col-12" style="font-size: 20px;padding:0"></label>
                @if (session()->has('success'))
                    <div class="mt-2 alert alert-success" id="my_alert" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif

                <div class="card drop-card mt-2">
                    <div class="card-header d-flex justify-content-between" style="cursor: pointer" id="cardHeader">
                        <h5 style="font-size: 18px">जन्म दर्ताको जानकारी खोज्नुहोस्</h5>
                        <h5 style="font-size: 18px"><i class="fas fa-chevron-down"></i></h5>
                    </div>
                    <div class="card-body" id="cardBody">
                        <form action="{{ route('birth.filter') }}" method="GET" role="search">
                            <div class="row">
                                <div class="mb-2 col-md-3">
                                    @isset($old)
                                        <input type="text" class="form-control myText" placeholder="नाम" name="name"
                                            value="{{ $old->name }}">
                                    @else
                                        <input type="text" class="form-control myText" placeholder="नाम" name="name">
                                    @endisset
                                </div>
                                <div class="mb-2 col-md-3">
                                    @isset($old)
                                        <input type="text" class="form-control" placeholder="दर्ता न." name="darta_number"
                                            value="{{ $old->darta_number }}">
                                    @else
                                        <input type="text" class="form-control" placeholder="दर्ता न." name="darta_number">
                                    @endisset
                                </div>
                                {{-- ===== --}}
                                {{-- <div class="mb-2 col-md-3">
                                    @isset($old)
                                        <input type="text" class="form-control myText" placeholder="Book Code" name="from"
                                            value="{{ $old->from }}">
                                    @else
                                        <input type="text" class="form-control myText" placeholder="Book Code" name="from">
                                    @endisset
                                </div> --}}

                                <div class="mb-2 col-md-3">
                                    @isset($old)
                                        <input type="text" class="form-control myText" id="nepali-datepicker"
                                            placeholder="दर्ता मिति(From)" name="from" value="{{ $old->from }}">
                                    @else
                                        <input type="text" class="form-control myText" id="nepali-datepicker1"
                                            placeholder="दर्ता मिति(From)" name="from">
                                    @endisset
                                </div>
                                <div class="mb-2 col-md-3">
                                    @isset($old)
                                        <input type="text" class="form-control myText" id="nepali-datepicker2"
                                            placeholder="दर्ता मिति(To)" name="to" value="{{ $old->to }}">
                                    @else
                                        <input type="text" class="form-control myText" id="nepali-datepicker3"
                                            placeholder="दर्ता मिति(To)" name="to">
                                    @endisset
                                </div>
                                @isset($_GET['book_id'])
                                    <input type="hidden" name="book_id" value="{{ $_GET['book_id'] }}">
                                @endisset

                                <div class="mb-2 col-md-3">
                                    @isset($old)
                                        <input type="text" class="form-control" placeholder="जन्म मिति" name="dob"
                                            id="nepali-datepicker" value="{{ $old->dob }}">
                                    @else
                                        <input type="text" class="form-control" placeholder="जन्म मिति" name="dob"
                                            id="nepali-datepicker">
                                    @endisset

                                </div>
                                <div class="mb-2 col-md-3">
                                    @isset($old)
                                        <input type="text" class="form-control myText" placeholder="बाबुको नाम"
                                            name="father_name" value="{{ $old->father_name }}">
                                    @else
                                        <input type="text" class="form-control myText" placeholder="बाबुको नाम"
                                            name="father_name">
                                    @endisset
                                </div>
                                <div class="mb-2 col-md-3">
                                    @isset($old)
                                        <input type="text" class="form-control myText" placeholder=" आमाको नाम"
                                            name="mother_name" value="{{ $old->mother_name }}">
                                    @else
                                        <input type="text" class="form-control myText" placeholder=" आमाको नाम"
                                            name="mother_name">
                                    @endisset
                                </div>

                                <div class="mb-2 col-md-3">
                                    @isset($old)
                                        <input type="text" class="form-control myText" placeholder="  हजुरबुबाको नाम"
                                            name="grandfather_name" value="{{ $old->grandfather_name }}">
                                    @else
                                        <input type="text" class="form-control myText" placeholder="  हजुरबुबाको नाम"
                                            name="grandfather_name">
                                    @endisset
                                </div>
                                <div class="mb-2 col-md-3">
                                    <x-book-select :bookType="'जन्म दर्ता'" />
                                </div>
                                <div class="mb-2 col-md-3">
                                    <x-user-select />
                                </div>
                                <div class="col-xl-1">
                                    {{-- <input type="submit" class="btn btn-info" value="Filter"> --}}
                                    <button class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light"
                                        type="submit" style="background-color:#374f67; color: #fff;">Filter</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <div class="box mt-3">
                    <div class="box__body" style="width: 100%;overflow-x:scroll">
                        {{-- {!! $dataTable->table() !!} --}}
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-light" style="white-space: nowrap;">
                                    <tr class="text-uppercase">
                                        <th>#</th>
                                        <th>किताब कोड</th>
                                        <th>दर्ता न.</th>
                                        <th>नाम</th>
                                        <th>लिङ्ग</th>
                                        <th>जन्म मिति</th>
                                        <th>मरेको मिति</th>
                                        <th>बाबुको नाम</th>
                                        <th>आमाको नाम</th>
                                        <th>हजुरबुबाको नाम</th>
                                        <th>जन्म स्थान</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($births as $birth)
                                        <tr style="white-space: nowrap;">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $birth->book->code }}</td>
                                            <td>{{ $birth->reg_number }}</td>
                                            <td>{{ $birth->name }}</td>
                                            <td>{{ $birth->gender }}</td>
                                            <td>{{ $birth->dob }}</td>
                                            <td>{{ $birth->death_date }}</td>
                                            <td>{{ $birth->father_name }}</td>
                                            <td>{{ $birth->mother_name }}</td>
                                            <td>{{ $birth->grandfather_name }}</td>
                                            <td>{{ $birth->birth_place }}</td>

                                            <td class="text-nowrap text-right">

                                                <a class="action-btn text-primary show" style="cursor: pointer"
                                                    data-toggle="modal" data-target=".bd-example-modal-lg"
                                                    id="{{ $birth->id }}" data-toggle="modal"
                                                    data-target=".bd-example-modal-lg"><i class="far fa-eye"></i></a>
                                                <a class="action-btn text-primary" data-toggle="tooltip"
                                                    data-placement="top" title="Edit birth notice"
                                                    href="{{ route('birth.edit', $birth->id) }}"><i
                                                        class="far fa-edit"></i></a>
                                                <form action="{{ route('birth.delete', $birth->id) }}" method="post"
                                                    onsubmit="return confirm('के तपाईँ निश्चित हुनुहुन्छ?')"
                                                    class="form-inline d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="action-btn text-danger"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Delete birth notice"><i
                                                            class="far fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- =======modal===== --}}
                    <div class="modal fade bd-example-modal-lg " tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg ">
                            <div class="modal-content">
                                <div class="col-12 pt-3 d-flex justify-content-end">
                                    <a href="" class="btn btn-info" target="_blank" id="detail_print">Print</a>
                                </div>
                                <h1 class="h2 text-center py-5 font-weight-bold">जन्मको सूचना फाराम </h1>
                                <div class="container">
                                    <div class="col-12">
                                        <table class="my_table col-12" id="myTable">
                                            <tr>
                                                <td>प्रदेश</td>
                                                <td id="province"></td>
                                                {{-- <td rowspan="3" style="width: 20%"></td> --}}
                                                <td>स्थानीय पञ्जिकाधिकारी</td>
                                                <td id="administrator"></td>
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
                                    <label class="col-12 text-center mt-5 font-weight-bold">नवजात शिशुको व्यक्तिगत
                                        विवरण</label>

                                    <div class="col-xl-12">
                                        <table class="my_table col-12">
                                            <tr>
                                                <td>नाम</td>
                                                <td id="name"></td>
                                            </tr>
                                            <tr>
                                                <td>जन्म मिति</td>
                                                <td id="dob"></td>
                                            </tr>
                                            <tr>
                                                <td>जन्म स्थान(घर,अस्पताल,प्रसुती गृह)</td>
                                                <td id="birth_place"></td>
                                            </tr>
                                            <tr>
                                                <td>लिङ्ग</td>
                                                <td id="gender"></td>
                                            </tr>
                                            <tr>
                                                <td>जन्मेको किसिम</td>
                                                <td id="birth_type"></td>
                                            </tr>
                                            <tr>
                                                <td>कुनै पनि शारीरिक विकृति</td>
                                                <td id="physical_disable"></td>
                                            </tr>
                                            <tr>
                                                <td>नवजात शिशुको हजुरबुबाको नाम</td>
                                                <td id="grandfather_name"></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <label class="col-12 text-center mt-5 font-weight-bold">नवजात शिशुको आमा-बाबुको
                                        विवरण</label>

                                    <div class="col-xl-12">
                                        <table class="my_table col-12">
                                            <tr>
                                                <th>विवरण</th>
                                                <th>बाबुको विवरण</th>
                                                <th>आमाको विवरण</th>
                                            </tr>
                                            <tr>
                                                <td>नाम</td>
                                                <td id="father_name"></td>
                                                <td id="mother_name"></td>
                                            </tr>
                                            <tr>
                                                <td>स्थायी ठेगाना</td>
                                                <td id="father_parmanent_address"></td>
                                                <td id="mother_parmanent_address"></td>
                                            </tr>
                                            <tr>
                                                <td>अस्थायी ठेगाना</td>
                                                <td id="father_temporary_address"></td>
                                                <td id="mother_temporary_address"></td>
                                            </tr>
                                            <tr>
                                                <td>शिशु जन्मिदाको उमेर</td>
                                                <td id="father_age_while_baby_born"></td>
                                                <td id="mother_age_while_baby_born"></td>
                                            </tr>
                                            <tr>
                                                <td>जन्म भएको देश</td>
                                                <td id="father_country_where_baby_born"></td>
                                                <td id="mother_country_where_baby_born"></td>
                                            </tr>
                                            <tr>
                                                <td>नागरिकता(ना.प्र.नं.)</td>
                                                <td id="father_citizenship_number"></td>
                                                <td id="mother_citizenship_number"></td>
                                            </tr>
                                            <tr>
                                                <td>शिक्षा</td>
                                                <td id="father_education"></td>
                                                <td id="mother_education"></td>
                                            </tr>
                                            <tr>
                                                <td>धर्म</td>
                                                <td id="father_religion"></td>
                                                <td id="mother_religion"></td>
                                            </tr>
                                            <tr>
                                                <td>मातृभाषा</td>
                                                <td id="father_mother_toung"></td>
                                                <td id="mother_mother_toung"></td>
                                            </tr>
                                            <tr>
                                                <td>पेशा</td>
                                                <td id="father_occupation"></td>
                                                <td id="mother_occupation"></td>
                                            </tr>
                                            <tr>
                                                <td>यो शिशु समेत गरी हाल सम्म जन्मेको सन्तान संख्या</td>
                                                <td id="father_baby_number"></td>
                                                <td id="mother_baby_number"></td>
                                            </tr>
                                            <tr>
                                                <td>यो शिशु समेत गरी जीवित सन्तान संख्या</td>
                                                <td id="father_alive_baby_number"></td>
                                                <td id="mother_alive_baby_number"></td>
                                            </tr>
                                            <tr>
                                                <td>शिशु जन्मदा मदत गर्ने व्यक्ति</td>
                                                <td id="father_helper"></td>
                                                <td id="mother_helper"></td>
                                            </tr>
                                            <tr>
                                                <td>विवाहा भएको साल</td>
                                                <td id="father_marige_date"></td>
                                                <td id="mother_marige_date"></td>
                                            </tr>
                                        </table>

                                    </div>
                                    <label class="col-12 text-center mt-5 font-weight-bold">साक्षीको विवरण</label>
                                    <div class="col-12">
                                        <table class="my_table col-12">
                                            <tr>
                                                <td>क</td>
                                                <td>नाम</td>
                                                <td id="relative_name"></td>
                                            </tr>
                                            <tr>
                                                <td>ख</td>
                                                <td>नवजात शिशुसंगको सम्बन्ध</td>
                                                <td id="relationship"></td>
                                            </tr>
                                            <tr>
                                                <td>ग</td>
                                                <td>ठेगाना</td>
                                                <td id="relative_address"></td>
                                            </tr>
                                            <tr>
                                                <td>घ</td>
                                                <td>मिति</td>
                                                <td id="date"></td>
                                            </tr>
                                        </table>

                                    </div>
                                    <label class="col-12 text-center mt-5 font-weight-bold">सम्बन्धित फाइल</label>

                                    <div class="col-12 mb-3">

                                        <img id="related_file" src="" class="img-fluid "
                                            alt="सम्बन्धित फाइल फेला परेन" style="width:70%;position:relative;left:15%">

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    {{-- ==============Print======== --}}

                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/mdb/js/jquery.min.js') }}"></script>

{{-- @push('script') --}}
<script>
    // var axios = new axios;

    $(document).on('click', '.btn_print', function() {
        var prtContent = document.getElementById("my_data");
        var WinPrint = window.open();
        WinPrint.document.write(prtContent.outerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    });

    var data = "";
    $(document).on("click", ".show", function() {
        var id = $(this).attr('id');
        var url = "/api/fetch-birth/" + id;

        axios
            .get(url)
            .then((response) => {
                var data = response.data;
                $('#province').html(response.data.province);
                $('#administrator').html(response.data.administrator);
                $('#district').html(response.data.district);
                $('#reg_number').html(response.data.reg_number);
                $('#municipality').html(response.data.municipality);
                $('#entry_date').html(response.data.entry_date);
                $('#name').html(response.data.name);
                $('#gender').html(response.data.gender);
                $('#birth_place').html(response.data.birth_place);
                $('#dob').html(response.data.dob);

                $('#death_place').html(response.data.death_place);
                $('#birth_type').html(response.data.birth_type);
                $('#physical_disable').html(response.data.physical_disable);
                $('#grandfather_name').html(response.data.grandfather_name);

                $('#father_name').html(response.data.father_name);
                $('#mother_name').html(response.data.mother_name);
                $('#father_parmanent_address').html(response.data.father_parmanent_address);
                $('#mother_parmanent_address').html(response.data.mother_parmanent_address);
                $('#father_temporary_address').html(response.data.father_temporary_address);
                $('#mother_temporary_address').html(response.data.mother_temporary_address);
                $('#father_age_while_baby_born').html(response.data.father_age_while_baby_born);
                $('#mother_age_while_baby_born').html(response.data.mother_age_while_baby_born);
                $('#father_country_where_baby_born').html(response.data.father_country_where_baby_born);
                $('#mother_country_where_baby_born').html(response.data.mother_country_where_baby_born);
                $('#father_citizenship_number').html(response.data.father_citizenship_number);
                $('#mother_citizenship_number').html(response.data.mother_citizenship_number);
                $('#father_education').html(response.data.father_education);
                $('#mother_education').html(response.data.mother_education);
                $('#father_religion').html(response.data.father_religion);
                $('#mother_religion').html(response.data.mother_religion);
                $('#father_mother_toung').html(response.data.father_mother_toung);
                $('#mother_mother_toung').html(response.data.mother_mother_toung);
                $('#father_occupation').html(response.data.father_occupation);
                $('#mother_occupation').html(response.data.mother_occupation);
                $('#father_alive_baby_number').html(response.data.father_alive_baby_number);
                $('#mother_alive_baby_number').html(response.data.mother_alive_baby_number);
                $('#father_baby_number').html(response.data.father_baby_number);
                $('#mother_baby_number').html(response.data.mother_baby_number);
                $('#father_helper').html(response.data.father_helper);
                $('#mother_helper').html(response.data.mother_helper);
                $('#father_marige_date').html(response.data.father_marige_date);
                $('#mother_marige_date').html(response.data.mother_marige_date);

                $('#relative_name').html(response.data.relative_name);
                $('#relationship').html(response.data.relationship);
                $('#relative_address').html(response.data.relative_address);
                $('#date').html(response.data.date);
                var img = response.data.file;
                var half_src = "{{ asset('storage') }}{{ '/' }}";
                var src = half_src.concat(img, '');
                $('#related_file').attr('src', src);


                var id = response.data.id;
                var route = "{{ route('birth.printdetail', 'id') }}";
                route = route.replace('id', $(this).attr('id'));
                $('#detail_print').attr("href", route);
            })
            .catch((error) => console.log(error));
    });

    function show() {
        alert('sdfsf')
    }
</script>
{{-- @endpush --}}
@push('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="/vendor/datatables/buttons.server-side.js"></script>
    {{-- {!! $dataTable->scripts() !!} --}}
@endpush
