@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="p-3">
            <div class="container-fluid font-noto">
                <nav aria-label="breadcrumb" class="d-flex justify-content-between  rounded">

                    <div class="my-breadcrumb">
                        <a class="first-breadcrumb" href="{{ route('death.index') }}">मृत्यु दर्ता</a>
                        <a class="sub-breadcrumb" href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        <a class="final-item ml-3">@lang('navigation.death-notice-form')</a>
                    </div>
                    <div class="d-flex">
                        {{-- Filtered data in PDF/Print --}}
                        <form action="{{ route('death.listprint') }}" method="GET" role="search">
                            @isset($_GET['reg_number'])
                                <input type="hidden" name="reg_number"
                                    value="{{ $_GET['reg_number'] ? $_GET['reg_number'] : '' }}">
                            @endisset

                            @isset($_GET['name'])
                                <input type="hidden" name="name" value="{{ $_GET['name'] }}">
                            @endisset

                            @isset($_GET['dob'])
                                <input type="hidden" name="dob" value="{{ $_GET['dob'] }}">
                            @endisset

                            @isset($_GET['death_date'])
                                <input type="hidden" name="death_date" value="{{ $_GET['death_date'] }}">
                            @endisset

                            @isset($_GET['father_name'])
                                <input type="hidden" name="father_name" value="{{ $_GET['father_name'] }}">
                            @endisset

                            @isset($_GET['grandfather_name'])
                                <input type="hidden" name="grandfather_name" value="{{ $_GET['grandfather_name'] }}">
                            @endisset

                            <div class="col-lg-1">
                                <button
                                    class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light d-flex btn-print"
                                    type="submit" style="background-color:#17A2B8; color: #fff;"><i
                                        class="fas fa-print mr-2 mt-1"></i> Print</button>
                            </div>
                        </form>


                        {{-- Filtered data in Excel --}}
                        <form action="{{ route('death.excel') }}" method="GET" role="search">
                            @isset($_GET['reg_number'])
                                <input type="hidden" name="reg_number"
                                    value="{{ $_GET['reg_number'] ? $_GET['reg_number'] : '' }}">
                            @endisset

                            @isset($_GET['name'])
                                <input type="hidden" name="name" value="{{ $_GET['name'] }}">
                            @endisset

                            @isset($_GET['dob'])
                                <input type="hidden" name="dob" value="{{ $_GET['dob'] }}">
                            @endisset

                            @isset($_GET['death_date'])
                                <input type="hidden" name="death_date" value="{{ $_GET['death_date'] }}">
                            @endisset

                            @isset($_GET['father_name'])
                                <input type="hidden" name="father_name" value="{{ $_GET['father_name'] }}">
                            @endisset

                            @isset($_GET['grandfather_name'])
                                <input type="hidden" name="grandfather_name" value="{{ $_GET['grandfather_name'] }}">
                            @endisset

                            <div class="col-lg-1">
                                <button
                                    class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light d-flex btn-excel"
                                    type="submit" style="background-color:#17A2B8; color: #fff;"><i
                                        class="fas fa-file-excel mr-2 mt-1"></i> Excel</button>
                            </div>
                        </form>
                        <a href="{{ route('death.create') }}"
                            class="btn bg-success text-white my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light d-flex"
                            style="height:42px"><i class="fas fa-plus-circle mr-2 mt-1"></i>@lang('navigation.add_new')</a>


                    </div>
                </nav>
                <label class="font-weight-bold pb-2 border-bottom col-12" style="font-size: 20px;padding:0"></label>
                @if (session()->has('success'))
                    <div class="mt-2 alert alert-success" id="my_alert" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="card drop-card mt-2">
                    <div class="card-header d-flex justify-content-between" style="cursor: pointer" id="cardHeader">
                        <h5 style="font-size: 20px">मृत्यु दर्ताको जानकारी खोज्नुहोस्</h5>
                        <h5 style="font-size: 20px"><i class="fas fa-chevron-down"></i></h5>
                    </div>
                    <div class="card-body" id="cardBody">
                        <form action="{{ route('death.filter') }}" method="GET" role="search">
                            <div class="row">
                                <div class="mb-2 col-xl-1 col-lg-2 col-md-3">
                                    @isset($old)
                                        <input type="text" class="form-control" placeholder="दर्ता न." name="reg_number"
                                            value="{{ $old->reg_number }}">
                                    @else
                                        <input type="text" class="form-control" placeholder="दर्ता न." name="reg_number">
                                    @endisset
                                </div>

                                <div class="mb-2 col-xl-2 col-lg-3 col-md-4">
                                    @isset($old)
                                        <input type="text" class="form-control myText" placeholder="नाम" name="name"
                                            value="{{ $old->name }}">
                                    @else
                                        <input type="text" class="form-control myText" placeholder="नाम" name="name">
                                    @endisset
                                </div>
                                <div class="mb-2 col-xl-2 col-lg-3 col-md-5">
                                    @isset($old)
                                        <input type="text" class="form-control" id="nepali-datepicker"
                                            placeholder="जन्म मिति" name="dob" value="{{ $old->dob }}">
                                    @else
                                        <input type="text" class="form-control" id="nepali-datepicker"
                                            placeholder="जन्म मिति" name="dob">
                                    @endisset
                                </div>
                                <div class="mb-2 col-xl-2 col-lg-3 col-md-4">
                                    @isset($old)
                                        <input type="text" class="form-control" id="nepali-datepicker1"
                                            placeholder=" मरेको मिति" name="death_date" value="{{ $old->death_date }}">
                                    @else
                                        <input type="text" class="form-control" id="nepali-datepicker1"
                                            placeholder=" मरेको मिति" name="death_date">
                                    @endisset
                                </div>
                                <div class="mb-2 col-xl-2 col-lg-3 col-md-4">
                                    @isset($old)
                                        <input type="text" class="form-control myText" placeholder=" बुबाको नाम"
                                            name="father_name" value="{{ $old->father_name }}">
                                    @else
                                        <input type="text" class="form-control myText" placeholder=" बुबाको नाम"
                                            name="father_name">
                                    @endisset
                                </div>
                                <div class="mb-2 col-xl-2 col-lg-3 col-md-4">
                                    @isset($old)
                                        <input type="text" class="form-control myText" placeholder="हजुरबुबाको नाम"
                                            name="grandfather_name" value="{{ $old->grandfather_name }}">
                                    @else
                                        <input type="text" class="form-control myText" placeholder="हजुरबुबाको नाम"
                                            name="grandfather_name">
                                    @endisset
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

                <div class="card mt-3 p-3">

                    <table class="table table-responsive-sm" id="myTable">
                        <thead class="thead-light">
                            <tr class="text-uppercase">
                                <th>#</th>
                                <th>दर्ता मिति</th>
                                <th>नाम,थर</th>
                                <th>जन्म मिति</th>
                                {{-- <th>उमेर</th> --}}
                                <th>मरेको मिति</th>
                                <th>मरेको ठाउँ</th>
                                <th>मृत्युको कारण</th>
                                <th>वैवाहिक स्थिति</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($deaths as $death)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $death->entry_date }}</td>
                                    <td>{{ $death->name }}</td>
                                    <td>{{ $death->dob }}</td>
                                    <td>{{ $death->death_date }}</td>
                                    <td>{{ $death->death_place }}</td>
                                    <td>{{ $death->cause_death }}</td>
                                    <td>{{ $death->marital_status }}</td>
                                    <td class="text-right">
                                        {{-- <button type="button" class="btn btn-primary" >Large modal</button> --}}

                                        <a class="action-btn text-primary show" style="cursor: pointer"
                                            id="{{ $death->id }}" data-toggle="modal"
                                            data-target=".bd-example-modal-lg"><i class="far fa-eye"></i></a>
                                        {{-- <a class="action-btn text-primary"
                                            href="{{ route('death.show', $death->id) }}"><i class="far fa-eye"></i></a> --}}
                                        <a class="action-btn text-primary"
                                            href="{{ route('death.edit', $death->id) }}"><i class="far fa-edit"></i></a>
                                        <form action="{{ route('death.delete', $death->id) }}" method="post"
                                            onsubmit="return confirm('के तपाईँ निश्चित हुनुहुन्छ?')"
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
                {{-- =======modal===== --}}
                <div class="modal fade bd-example-modal-lg " tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg ">

                        <div class="modal-content">
                            <div class="col-12 pt-3 d-flex justify-content-end">
                                <a href="" class="btn btn-info" id="detail_print">Print</a>
                            </div>
                            <h1 class="h2 text-center py-5 font-weight-bold">मृत्युको सूचना फाराम </h1>
                            <div class="container">
                                <div class="col-12">
                                    <table class="my_table col-12">
                                        <tr>
                                            <td>प्रदेश</td>
                                            <td id="province"></td>
                                            {{-- <td rowspan="3" style="width: 20%"></td> --}}
                                            <td>स्थानीय पञ्जिकाधिकारी</td>
                                            <td id="administrator" style="font-size: 18px"></td>
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
                                <label class="col-12 text-center mt-5 font-weight-bold">मृतकको विवरण</label>
                                <div class="col-12">
                                    <table class="my_table col-12">
                                        <tr>
                                            <td class="text-center">क</td>
                                            <td style="font-size: 18px">नाम</td>
                                            <td  id="name"></td>
                                            <td class="text-center">ख</td>
                                            <td>लिङ्ग</td>
                                            <td id="gender"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">ग</td>
                                            <td>उमेर</td>
                                            <td id="age"></td>
                                            {{-- <td>{{ $death->age( $death->dob) }}</td> --}}
                                            <td class="text-center">घ</td>
                                            <td>मरेको मिति</td>
                                            <td id="death_date"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">ङ</td>
                                            <td>मरेको ठाउँ</td>
                                            <td  id="death_place"></td>
                                            <td class="text-center">च</td>
                                            <td>जन्म भएको देश</td>
                                            <td id="birth_country"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">छ</td>
                                            <td>नागरिकता (ना. प्र. न.)</td>
                                            <td id="citizenship_number"></td>
                                            <td class="text-center">ज</td>
                                            <td>मृतकको स्थाई ठेगाना</td>
                                            <td  id="address"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">झ</td>
                                            <td>वैवाहिक स्थिति</td>
                                            <td id="marital_status"></td>
                                            <td class="text-center">ञ</td>
                                            <td>शिक्षा</td>
                                            <td id="education"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">ट</td>
                                            <td>मातृभाषा</td>
                                            <td  id="mother_tongue"></td>
                                            <td class="text-center">ठ</td>
                                            <td>धर्म</td>
                                            <td id="religion"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">ड</td>
                                            <td>हजुरबुबाको नाम</td>
                                            <td  id="grandfather_name"></td>
                                            <td class="text-center">ढ</td>
                                            <td>बुबाको नाम</td>
                                            <td  id="father_name"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">ण</td>
                                            <td>पति/पत्नीको नाम</td>
                                            <td  id="spouse"></td>
                                            <td class="text-center">त</td>
                                            <td>मृत्युको कारण</td>
                                            <td id="cause_death"></td>
                                        </tr>

                                    </table>

                                </div>
                                <label class="col-12 text-center mt-5 font-weight-bold">साक्षीको विवरण</label>
                                <div class="col-12">
                                    <table class="my_table col-12">
                                        <tr>
                                            <td>क</td>
                                            <td>नाम</td>
                                            <td  id="relative_name"></td>
                                        </tr>
                                        <tr>
                                            <td>ख</td>
                                            <td>मृतक संगको सम्बन्ध</td>
                                            <td  id="relationship"></td>
                                        </tr>
                                        <tr>
                                            <td>ग</td>
                                            <td>ठेगाना</td>
                                            <td  id="relative_address"></td>
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
            </div>
        </div>
    </div>
@endsection
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/mdb/js/jquery.min.js') }}"></script>

{{-- @push('script') --}}
<script>
    // var axios = new axios;


    var data = "";
    $(document).on("click", ".show", function() {
        var id = $(this).attr('id');
        var url = "/api/fetch-death/" + id;

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
                $('#age').html(response.data.age);
                $('#gender').html(response.data.gender);
                $('#death_date').html(response.data.death_date);
                $('#death_place').html(response.data.death_place);
                $('#birth_country').html(response.data.birth_country);
                $('#citizenship_number').html(response.data.citizenship_number);
                $('#address').html(response.data.address);
                $('#marital_status').html(response.data.marital_status);
                $('#education').html(response.data.education);
                $('#mother_tongue').html(response.data.mother_tongue);
                $('#religion').html(response.data.religion);
                $('#grandfather_name').html(response.data.grandfather_name);
                $('#father_name').html(response.data.father_name);
                $('#spouse').html(response.data.spouse);
                $('#cause_death').html(response.data.cause_death);
                $('#relative_name').html(response.data.relative_name);
                $('#relationship').html(response.data.relationship);
                $('#relative_address').html(response.data.relative_address);
                $('#date').html(response.data.date);
                var img = response.data.file;

                var half_src = "{{ asset('storage') }}{{ '/' }}";
                var src = half_src.concat(img, '');
                $('#related_file').attr('src', src);



                var id = response.data.id;
                var route = "{{ route('death.printdetail', 'id') }}";
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
