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
                        <div class="mx-4">

                            <form action="{{ route('death.listprint') }}" method="GET" target="_blank" role="search">
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

                                @isset($_GET['user_id'])
                                    <input type="hidden" name="user_id" value="{{ $_GET['user_id'] }}">
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
                                        class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light d-flex btn-print"
                                        type="submit" style="background-color:#17A2B8; color: #fff;"><i
                                            class="fas fa-print mr-2 mt-1"></i> Print</button>
                                </div>
                            </form>
                        </div>


                        {{-- Filtered data in Excel --}}
                        {{-- <form action="{{ route('death.excel') }}" method="GET" role="search">
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

                            @isset($_GET['user_id'])
                                <input type="hidden" name="user_id" value="{{ $_GET['user_id'] }}">
                            @endisset

                            @isset($_GET['book_id'])
                                <input type="hidden" name="book_id" value="{{ $_GET['book_id'] }}">
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
                        <div>

                            <a href="{{ route('death.create') }}"
                                class="btn bg-success text-white my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light d-flex"
                                style="height:42px"><i class="fas fa-plus-circle mr-2 mt-1"></i>@lang('navigation.add_new')</a>

                        </div>

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
                                <div class="mb-2 col-md-3">
                                    <input type="text" class="form-control" placeholder="दर्ता न." name="reg_number">
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

                                    <input type="text" class="form-control myText" placeholder="नाम" name="name">
                                </div>
                                <div class="mb-2 col-md-3">
                                    <input type="text" class="form-control" id="nepali-datepicker"
                                        placeholder="जन्म मिति" name="dob">
                                </div>
                                <div class="mb-2 col-md-3">
                                    <input type="text" class="form-control" id="nepali-datepicker1"
                                        placeholder=" मरेको मिति" name="death_date">
                                </div>
                                <div class="mb-2 col-md-3">
                                    <input type="text" class="form-control myText" placeholder=" बुबाको नाम"
                                        name="father_name">
                                </div>
                                <div class="mb-2 col-md-3">
                                    <input type="text" class="form-control myText" placeholder="हजुरबुबाको नाम"
                                        name="grandfather_name">
                                </div>
                                <div class="mb-2 col-md-3">
                                    <x-book-select :bookType="'मृत्यु दर्ता'" />
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

                <div class="card mt-3 p-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light" style="white-space: nowrap;">
                                <tr class="text-uppercase">
                                    <th>#</th>
                                    <th>किताब कोड</th>
                                    <th>दर्ता न.</th>
                                    <th>दर्ता मिति</th>
                                    <th>नाम,थर</th>
                                    <th>उमेर</th>
                                    <th>मरेको मिति</th>
                                    <th>मरेको ठाउँ</th>
                                    <th>मृत्युको कारण</th>
                                    <th>वैवाहिक स्थिति</th>
                                    <th>बुबाको नाम</th>
                                    <th>हजुर-बुबाको नाम</th>
                                    <th>Entry By</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($deaths as $death)
                                    <tr style="white-space: nowrap;">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $death->book->code }}</td>
                                        <td>{{ $death->reg_number }}</td>
                                        <td>{{ $death->entry_date }}</td>
                                        <td>{{ $death->name }}</td>
                                        <td>{{ $death->age }}</td>
                                        <td>{{ $death->death_date }}</td>
                                        <td>{{ $death->death_place }}</td>
                                        <td>{{ $death->cause_death }}</td>
                                        <td>{{ $death->marital_status }}</td>
                                        <td>{{ $death->father_name }}</td>
                                        <td>{{ $death->grandfather_name }}</td>
                                        <td>{{ $death->user->name }}</td>
                                        <td class="text-right">

                                            <a href="{{ route('death.show', $death) }}"
                                                class="action-btn text-primary show" target="_blank"><i
                                                    class="far fa-eye"></i></a>
                                            @if ($death->file)
                                                <a href="{{ asset('storage/' . $death->file) }}" data-toggle="tooltip"
                                                    data-placement="top" title="File view" target="_blank"><i
                                                        class="fas fa-file-image"></i>
                                                </a>
                                            @endif
                                            <a class="action-btn text-primary" data-toggle="tooltip" data-placement="top"
                                                title="Edit birth notice" href="{{ route('death.edit', $death->id) }}"><i
                                                    class="far fa-edit"></i></a>
                                            <form action="{{ route('death.delete', $death->id) }}" method="post"
                                                onsubmit="return confirm('के तपाईँ निश्चित हुनुहुन्छ?')"
                                                class="form-inline d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="action-btn text-danger"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="Delete death notice"><i class="far fa-trash-alt"></i></button>
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
                                @if ($deaths->firstItem())
                                    <span class="font-medium">{{ $deaths->firstItem() }}</span>
                                    {!! __('to') !!}
                                    <span class="font-medium">{{ $deaths->lastItem() }}</span>
                                @else
                                    {{ $deaths->count() }}
                                @endif
                                {!! __('of') !!}
                                <span class="font-medium">{{ $deaths->total() }}</span>
                                {!! __('results') !!}
                            </p>
                        </div>
                        <div>
                            {{ $deaths->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
