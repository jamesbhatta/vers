@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="p-3">
            <div class="container-fluid font-noto">
                <nav aria-label="breadcrumb" class="d-flex justify-content-between  rounded">

                    <div class="my-breadcrumb">
                        <a class="first-breadcrumb" href="{{ route('marriage.index') }}">विवाह दर्ता</a>
                        <a class="sub-breadcrumb" href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        <a class="final-item ml-3">@lang('navigation.marriage-notice-form')</a>
                    </div>
                    <div class="d-flex">
                        {{-- Filtered data in PDF/Print --}}
                        <form action="{{ route('marriage.listprint') }}" method="GET" role="search">
                            @isset($_GET['darta_number'])
                                <input type="hidden" name="darta_number"
                                    value="{{ $_GET['darta_number'] ? $_GET['darta_number'] : '' }}">
                            @endisset

                            @isset($_GET['entry_date'])
                                <input type="hidden" name="entry_date" value="{{ $_GET['entry_date'] }}">
                            @endisset

                            @isset($_GET['bride_name'])
                                <input type="hidden" name="bride_name" value="{{ $_GET['bride_name'] }}">
                            @endisset

                            @isset($_GET['groom_name'])
                                <input type="hidden" name="groom_name" value="{{ $_GET['groom_name'] }}">
                            @endisset

                            @isset($_GET['bride_father_name'])
                                <input type="hidden" name="bride_father_name" value="{{ $_GET['bride_father_name'] }}">
                            @endisset

                            @isset($_GET['groom_father_name'])
                                <input type="hidden" name="groom_father_name" value="{{ $_GET['groom_father_name'] }}">
                            @endisset

                            <div class="col-lg-1">
                                <button
                                    class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light d-flex btn-print"
                                    type="submit" style="background-color:#17A2B8; color: #fff;"><i
                                        class="fas fa-print mr-2 mt-1"></i> Print</button>
                            </div>
                        </form>

                        {{-- Filtered data in excel --}}
                        <form action="{{ route('marriage.excel') }}" method="GET" role="search">
                            @isset($_GET['darta_number'])
                                <input type="hidden" name="darta_number"
                                    value="{{ $_GET['darta_number'] ? $_GET['darta_number'] : '' }}">
                            @endisset

                            @isset($_GET['entry_date'])
                                <input type="hidden" name="entry_date" value="{{ $_GET['entry_date'] }}">
                            @endisset

                            @isset($_GET['bride_name'])
                                <input type="hidden" name="bride_name" value="{{ $_GET['bride_name'] }}">
                            @endisset

                            @isset($_GET['groom_name'])
                                <input type="hidden" name="groom_name" value="{{ $_GET['groom_name'] }}">
                            @endisset

                            @isset($_GET['bride_father_name'])
                                <input type="hidden" name="bride_father_name" value="{{ $_GET['bride_father_name'] }}">
                            @endisset

                            @isset($_GET['groom_father_name'])
                                <input type="hidden" name="groom_father_name" value="{{ $_GET['groom_father_name'] }}">
                            @endisset

                            <div class="col-lg-1">
                                <button
                                    class="btn my-0  rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light d-flex btn-excel"
                                    type="submit" style="background-color:#17A2B8; color: #fff;"><i
                                        class="fas fa-file-excel mr-2 mt-1"></i> Excel</button>
                            </div>
                        </form>

                        {{-- Add new Data --}}
                        <a href="{{ route('marriage.create') }}"
                            class="btn bg-success text-white my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light d-flex"
                            style="height:42px"><i class="fas fa-plus-circle mr-2 mt-1"></i>@lang('navigation.add_new')</a>
                    </div>
                </nav>
                <label class="font-weight-bold pb-2 border-bottom col-12" style="font-size: 20px;padding:0"></label>

                {{-- Success Message --}}
                @if (session()->has('success'))
                    <div class="mt-2 alert alert-success" id="my_alert" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif

                {{-- Filter data --}}
                <div class="card mt-2">
                    <div class="card-header d-flex justify-content-between" style="cursor: pointer" id="cardHeader">
                        <h5 style="font-size: 20px">विवाह दर्ताको जानकारी खोज्नुहोस्</h5>
                        <h5 style="font-size: 20px"><i class="fas fa-chevron-down"></i></h5>
                    </div>
                    <div class="card-body" id="cardBody">
                        <form action="{{ route('marriage.filter') }}" method="GET" role="search">
                            {{-- @csrf --}}
                            <div class="row">
                                <div class="mb-2 col-xl-1 col-lg-2 col-md-3">
                                    @isset($old)
                                        <input type="text" class="form-control" placeholder="दर्ता न." name="darta_number"
                                            value="{{ $old->darta_number }}">
                                    @else
                                        <input type="text" class="form-control" placeholder="दर्ता न." name="darta_number">
                                    @endisset
                                </div>

                                <div class="mb-2 col-xl-2 col-lg-3 col-md-4">
                                    @isset($old)
                                        <input type="text" class="form-control" id="nepali-datepicker"
                                            placeholder="दर्ता मिति" name="entry_date" value="{{ $old->entry_date }}">
                                    @else
                                        <input type="text" class="form-control" id="nepali-datepicker"
                                            placeholder="दर्ता मिति" name="entry_date">
                                    @endisset
                                </div>
                                <div class="mb-2 col-xl-2 col-lg-3 col-md-5">
                                    @isset($old)
                                        <input type="text" class="form-control myText" placeholder="दुलाहाको नाम"
                                            name="bride_name" value="{{ $old->bride_name }}">
                                    @else
                                        <input type="text" class="form-control myText" placeholder="दुलाहाको नाम"
                                            name="bride_name">
                                    @endisset
                                </div>
                                <div class="mb-2 col-xl-2 col-lg-3 col-md-4">
                                    @isset($old)
                                        <input type="text" class="form-control myText" placeholder="दुलहीको नाम"
                                            name="groom_name" value="{{ $old->groom_name }}">
                                    @else
                                        <input type="text" class="form-control myText" placeholder="दुलहीको नाम"
                                            name="groom_name">
                                    @endisset
                                </div>
                                <div class="mb-2 col-xl-2 col-lg-3 col-md-4">
                                    @isset($old)
                                        <input type="text" class="form-control myText" placeholder="दुलहको बाबुको नाम"
                                            name="bride_father_name" value="{{ $old->bride_father_name }}">
                                    @else
                                        <input type="text" class="form-control myText" placeholder="दुलहीको बाबुको नाम"
                                            name="bride_father_name">
                                    @endisset
                                </div>
                                <div class="mb-2 col-xl-2 col-lg-3 col-md-4">
                                    @isset($old)
                                        <input type="text" class="form-control myText" placeholder="दुलहीको बाबुको नाम"
                                            name="groom_father_name" value="{{ $old->groom_father_name }}">
                                    @else
                                        <input type="text" class="form-control myText" placeholder="दुलहीको बाबुको नाम"
                                            name="groom_father_name">
                                    @endisset
                                </div>

                                <div class="col-xl-1">
                                    <button class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light"
                                        type="submit" style="background-color:#374f67; color: #fff;">Filter</button>
                                    {{-- <input type="submit" class="btn btn-info" value="Filter"> --}}
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <div class="box mt-3">

                    <div class="box__body" style="width: 100%;overflow-x:scroll">
                        <table class="table table-responsive-sm" id="myTable">
                            <thead class="thead-light">
                                <tr class="text-uppercase">
                                    <th>#</th>
                                    <th>दर्ता न.</th>
                                    <th>दुलाहाको नाम</th>
                                    <th>दुलाहाको बाजेको नाम</th>
                                    <th>दुलाहाको बाबुको नाम</th>
                                    <th>दुलहीको नाम</th>
                                    <th>दुलहीको बाजेको नाम</th>
                                    <th>दुलहीको बाबुको नाम</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($marriages as $marriage)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $marriage->reg_number }}</td>
                                        <td >{{ $marriage->bride_name }}</td>
                                        <td >{{ $marriage->bride_grandfather_name }}</td>
                                        <td >{{ $marriage->bride_father_name }}</td>
                                        <td >{{ $marriage->groom_name }}</td>
                                        <td >{{ $marriage->groom_grandfather_name }}</td>
                                        <td >{{ $marriage->groom_father_name }}</td>
                                        <td class="text-right">
                                            <a class="action-btn text-primary show" id="{{ $marriage->id }}"
                                                data-toggle="modal" data-target=".bd-example-modal-lg"
                                                style="cursor: pointer"><i class="far fa-eye"></i></a>
                                            <a class="action-btn text-primary"
                                                href="{{ route('marriage.edit', $marriage->id) }}"><i
                                                    class="far fa-edit"></i></a>
                                            <form action="{{ route('marriage.delete', $marriage->id) }}" method="post"
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
                                <h1 class="h2 text-center py-5 font-weight-bold">विवाहको सूचना फाराम </h1>
                                <div class="container">
                                    <div class="col-12">
                                        <table class="my_table col-12">
                                            <tr>
                                                <td>प्रदेश</td>
                                                <td id="province"></td>
                                                {{-- <td rowspan="3" style="width: 20%"></td> --}}
                                                <td>स्थानीय पञ्जिकाधिकारी</td>
                                                <td  id="administrator"></td>
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

                                    <label class="col-12 text-center mt-5 font-weight-bold">दुलाहा-दुलहीको विवरण</label>


                                    <div class="col-xl-12">
                                        <table class="my_table col-12" id="myTable">
                                            <tr>
                                                <th>विवरण</th>
                                                <th>दुलाहाको विवरण</th>
                                                <th>दुलहीको विवरण</th>
                                            </tr>
                                            <tr>
                                                <td>नाम,थर</td>
                                                <td  id="bride_name"></td>
                                                <td  id="groom_name"></td>
                                            </tr>
                                            <tr>
                                                <td>जन्म मिति</td>
                                                <td id="bride_dob"></td>
                                                <td id="groom_dob"></td>
                                            </tr>
                                            <tr>
                                                <td>जन्म भएको देश</td>
                                                <td  id="bride_birth_country"></td>
                                                <td  id="groom_birth_country"></td>
                                            </tr>
                                            <tr>
                                                <td>नागरिकता (ना.प्र.नं)</td>
                                                <td id="bride_citizenship_number"></td>
                                                <td id="groom_citizenship_number"></td>
                                            </tr>
                                            <tr>
                                                <td>नागरिकता जारी मिति</td>
                                                <td id="bride_citizenship_date"></td>
                                                <td id="groom_citizenship_date"></td>
                                            </tr>
                                            <tr>
                                                <td>नागरिकता लिएको जिल्ला</td>
                                                <td  id="bride_citizenship_district"></td>
                                                <td  id="groom_citizenship_district"></td>
                                            </tr>
                                            <tr>
                                                <td>स्थाई ठेगाना</td>
                                                <td  id="bride_temp_address"></td>
                                                <td  id="groom_temp_address"></td>
                                            </tr>
                                            <tr>
                                                <td>शिक्षा</td>
                                                <td id="bride_education"></td>
                                                <td id="groom_education"></td>
                                            </tr>
                                            <tr>
                                                <td>धर्म</td>
                                                <td id="bride_religion"></td>
                                                <td id="groom_religion"></td>
                                            </tr>
                                            <tr>
                                                <td>मातृभाषा</td>
                                                <td  id="bride_mother_tongue"></td>
                                                <td  id="groom_mother_tongue"></td>
                                            </tr>
                                            <tr>
                                                <td>बाजेको नाम</td>
                                                <td  id="bride_grandfather_name"></td>
                                                <td  id="groom_grandfather_name"></td>
                                            </tr>
                                            <tr>
                                                <td>बाबुको नाम</td>
                                                <td  id="bride_father_name"></td>
                                                <td  id="groom_father_name"></td>
                                            </tr>
                                            <tr>
                                                <td>पूर्व वैवाहिक स्थिति</td>
                                                <td id="bride_pre_marrige_status"></td>
                                                <td id="groom_pre_marrige_status"></td>
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
        var url = "/api/fetch-marriage/" + id;

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

                $('#bride_name').html(response.data.bride_name);
                $('#groom_name').html(response.data.groom_name);
                $('#bride_dob').html(response.data.bride_dob);
                $('#groom_dob').html(response.data.groom_dob);
                $('#bride_birth_country').html(response.data.bride_birth_country);
                $('#groom_birth_country').html(response.data.groom_birth_country);
                $('#bride_citizenship_number').html(response.data.bride_citizenship_number);
                $('#groom_citizenship_number').html(response.data.groom_citizenship_number);

                $('#bride_citizenship_date').html(response.data.bride_citizenship_date);
                $('#groom_citizenship_date').html(response.data.groom_citizenship_date);
                $('#bride_citizenship_district').html(response.data.bride_citizenship_district);
                $('#groom_citizenship_district').html(response.data.groom_citizenship_district);
                $('#bride_temp_address').html(response.data.bride_temp_address);
                $('#groom_temp_address').html(response.data.groom_temp_address);
                $('#bride_education').html(response.data.bride_education);
                $('#groom_education').html(response.data.groom_education);
                $('#bride_religion').html(response.data.bride_religion);
                $('#groom_religion').html(response.data.groom_religion);
                $('#bride_mother_tongue').html(response.data.bride_mother_tongue);
                $('#groom_mother_tongue').html(response.data.groom_mother_tongue);
                $('#bride_grandfather_name').html(response.data.bride_grandfather_name);
                $('#groom_grandfather_name').html(response.data.groom_grandfather_name);
                $('#bride_father_name').html(response.data.bride_father_name);
                $('#groom_father_name').html(response.data.groom_father_name);
                $('#groom_grandfather_name').html(response.data.groom_grandfather_name);
                $('#bride_pre_marrige_status').html(response.data.bride_pre_marrige_status);
                $('#groom_pre_marrige_status').html(response.data.groom_pre_marrige_status);




                $('#relative_name').html(response.data.relative_name);
                $('#relationship').html(response.data.relationship);
                $('#relative_address').html(response.data.relative_address);
                $('#date').html(response.data.date);
                var img = response.data.file;
                // console.log(response.data.file);
                var half_src = "{{ asset('storage') }}{{ '/' }}";
                var src = half_src.concat(img, '');
                $('#related_file').attr('src', src);

                var id = response.data.id;
                var route = "{{ route('marriage.printdetail', 'id') }}";
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
