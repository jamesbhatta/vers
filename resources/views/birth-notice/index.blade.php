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
                                            <td>{{ $birth->book->code ?? "" }}</td>
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
                                                <a href="{{route('birth.show',$birth)}}" class="action-btn text-primary show" target="_blank" ><i class="far fa-eye"></i></a>
                                                {{-- <a class="action-btn text-primary show" style="cursor: pointer"
                                                    data-toggle="modal" data-target=".bd-example-modal-lg"
                                                    id="{{ $birth->id }}" data-toggle="modal"
                                                    data-target=".bd-example-modal-lg"><i class="far fa-eye"></i></a> --}}
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
                            {{ $births->links() }}
                    </div>
                 

                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/mdb/js/jquery.min.js') }}"></script>

@push('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="/vendor/datatables/buttons.server-side.js"></script>
    {{-- {!! $dataTable->scripts() !!} --}}
@endpush
