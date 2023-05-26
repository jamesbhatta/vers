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
                        <div class="mx-4">
                            <form action="{{ route('marriage.listprint') }}" method="GET" target="_blank" role="search">
                                @isset($_GET['darta_number'])
                                    <input type="hidden" name="darta_number"
                                        value="{{ $_GET['darta_number'] ? $_GET['darta_number'] : '' }}">
                                @endisset

                                @isset($_GET['marriage_date'])
                                    <input type="hidden" name="marriage_date" value="{{ $_GET['marriage_date'] }}">
                                @endisset

                                @isset($_GET['bride_name'])
                                    <input type="hidden" name="bride_name" value="{{ $_GET['bride_name'] }}">
                                @endisset

                                @isset($_GET['groom_name'])
                                    <input type="hidden" name="groom_name" value="{{ $_GET['groom_name'] }}">
                                @endisset

                                @isset($_GET['user_id'])
                                    <input type="hidden" name="user_id" value="{{ $_GET['user_id'] }}">
                                @endisset

                                @isset($_GET['bride_father_name'])
                                    <input type="hidden" name="bride_father_name" value="{{ $_GET['bride_father_name'] }}">
                                @endisset

                                @isset($_GET['groom_father_name'])
                                    <input type="hidden" name="groom_father_name" value="{{ $_GET['groom_father_name'] }}">
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
                        </div>

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
                            <div class="row">
                                <div class="mb-2 col-md-3">

                                    <input type="text" class="form-control" placeholder="दर्ता न." name="darta_number">
                                </div>
                                <div class="mb-2 col-md-3">

                                    <input type="text" class="form-control myText" id="nepali-datepicker1"
                                        placeholder="दर्ता मिति(From)" name="from">
                                </div>
                                <div class="mb-2 col-md-3">

                                    <input type="text" class="form-control myText" id="nepali-datepicker3"
                                        placeholder="दर्ता मिति(To)" name="to">
                                </div>
                                <div class="mb-2 col-md-3">
                                    <input type="text" class="form-control" id="nepali-datepicker"
                                        placeholder="विवाह मिति" name="marriage_date">
                                </div>

                                <div class="mb-2 col-md-3">
                                    <input type="text" class="form-control myText" placeholder="दुलाहाको नाम"
                                        name="bride_name">
                                </div>
                                <div class="mb-2 col-md-3">
                                    <input type="text" class="form-control myText" placeholder="दुलहीको नाम"
                                        name="groom_name">
                                </div>
                                <div class="mb-2 col-md-3">
                                    <input type="text" class="form-control myText" placeholder="दुलहीको बाबुको नाम"
                                        name="bride_father_name">
                                </div>
                                <div class="mb-2 col-md-3">

                                    <input type="text" class="form-control myText" placeholder="दुलहीको बाबुको नाम"
                                        name="groom_father_name">
                                </div>
                                <div class="mb-2 col-md-3">
                                    <x-book-select :bookType="'विवाह दर्ता'" />
                                </div>
                                <div class="mb-2 col-md-3">
                                    <x-user-select />
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

                    <div class="box__body table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-light" style="white-space: nowrap;">
                                <tr class="text-uppercase">
                                    <th>#</th>
                                    <th>किताब कोड</th>
                                    <th>दर्ता न.</th>
                                    <th>दर्ता मिति</th>
                                    <th>बिबाह मिति</th>
                                    <th>विवाह भएको ठेगाना</th>
                                    <th>दुलाहाको नाम</th>
                                    <th>दुलाहाको बाजेको नाम</th>
                                    <th>दुलाहाको बाबुको नाम</th>
                                    <th>दुलहीको नाम</th>
                                    <th>दुलहीको बाजेको नाम</th>
                                    <th>दुलहीको बाबुको नाम</th>
                                    <th>Entry By</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($marriages as $marriage)
                                    <tr style="white-space: nowrap;">
                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $marriage->book->code ?? '' }}</td>

                                        <td>{{ $marriage->reg_number }}</td>
                                        <td>{{ $marriage->entry_date }}</td>
                                        <td>{{ $marriage->marriage_date }}</td>
                                        <td>{{ $marriage->marriage_address }}</td>
                                        <td>{{ $marriage->bride_name }}</td>
                                        <td>{{ $marriage->bride_grandfather_name }}</td>
                                        <td>{{ $marriage->bride_father_name }}</td>
                                        <td>{{ $marriage->groom_name }}</td>
                                        <td>{{ $marriage->groom_grandfather_name }}</td>
                                        <td>{{ $marriage->groom_father_name }}</td>
                                        <td>{{ $marriage->user->name }}</td>
                                        <td class="text-right" style="white-space: nowrap;">
                                            {{-- <a class="action-btn text-primary" data-toggle="tooltip" data-placement="top"
                                                title="Add withness"
                                                href="{{ route('marriageWithness.create', $marriage) }}"><i
                                                    class="fas fa-plus-circle"></i></a> --}}
                                            @if ($marriage->file)
                                                <a href="{{ asset('storage/' . $marriage->file) }}" data-toggle="tooltip"
                                                    data-placement="top" title="File view" target="_blank"><i
                                                        class="fas fa-file-image"></i>
                                                </a>
                                            @endif
                                            <a href="{{ route('marriage.show', $marriage) }}"
                                                class="action-btn text-primary show" target="_blank"><i
                                                    class="far fa-eye"></i></a>
                                            <a class="action-btn text-primary" data-toggle="tooltip" data-placement="top"
                                                title="Edit marriage notice"
                                                href="{{ route('marriage.edit', $marriage->id) }}"><i
                                                    class="far fa-edit"></i></a>
                                            <form action="{{ route('marriage.delete', $marriage->id) }}" method="post"
                                                onsubmit="return confirm('के तपाईँ निश्चित हुनुहुन्छ?')"
                                                class="form-inline d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="action-btn text-danger"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="Delete marriage notice"><i
                                                        class="far fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-sm text-gray-700 leading-5">
                                {!! __('Showing') !!}
                                @if ($marriages->firstItem())
                                    <span class="font-medium">{{ $marriages->firstItem() }}</span>
                                    {!! __('to') !!}
                                    <span class="font-medium">{{ $marriages->lastItem() }}</span>
                                @else
                                    {{ $marriages->count() }}
                                @endif
                                {!! __('of') !!}
                                <span class="font-medium">{{ $marriages->total() }}</span>
                                {!! __('results') !!}
                            </p>
                        </div>
                        <div>
                            {{ $marriages->links() }}
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
                console.log(data);
                $('#province').html(response.data.province);
                $('#administrator').html(response.data.administrator);
                $('#district').html(response.data.district);
                $('#reg_number').html(response.data.reg_number);
                $('#municipality').html(response.data.municipality);
                $('#entry_date').html(response.data.entry_date);
                $('#marriage_date').html(response.data.marriage_date);
                $('#marriage_address').html(response.data.marriage_address);

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

                family_data = "";
                var num = "";
                for (let i = 0; i < response.data.marriage_withness.length; i++) {
                    num = i + 1;
                    family_data += "<tr>";
                    family_data += "<td>" + num + "</td>";
                    family_data += "<td>" + response.data.marriage_withness[i].relative_name + "</td>";
                    family_data += "<td>" + response.data.marriage_withness[i].relationship + "</td>";
                    family_data += "<td>" + response.data.marriage_withness[i].relative_address + "</td>";
                    family_data += "<td>" + response.data.marriage_withness[i].date + "</td>";
                    family_data += "</td>";
                }

                $('#withnesss').html(family_data);

            })
            .catch((error) => console.log(error));
    });

    function show() {
        alert('sdfsf')
    }
</script>

{{-- @endpush --}}
