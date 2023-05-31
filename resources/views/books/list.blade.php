@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="p-3">
            <div class="container-fluid font-noto">
                <nav aria-label="breadcrumb" class="d-flex justify-content-between">

                    <div class="my-breadcrumb">
                        <a class="first-breadcrumb" href="{{ route('book.index') }}">पुस्तक</a>
                        <a class="sub-breadcrumb" href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        <a class="final-item ml-3">पुस्तक</a>
                    </div>
                    <div>
                        <a href="{{ route('book.create') }}"
                            class="btn bg-success text-white my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light d-flex"
                            style="height:42px"><i class="fas fa-plus-circle mr-2 mt-1"></i>@lang('navigation.add_new')</a>
                    </div>
                </nav>
                {{-- <hr> --}}
                <label class="font-weight-bold pb-2 border-bottom col-12" style="font-size: 20px;padding:0"></label>
                @if (session()->has('success'))
                    <div class="mt-2 alert alert-success" id="my_alert" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif


                <div class="row">

                    <div class="col-xl-12">
                        <div class="box mt-3">
                            <div class="box__body">
                                {{-- {!! $dataTable->table() !!} --}}
                                <table class="table table-responsive-sm"  style="white-space: nowrap;">
                                    <thead class="thead-light">
                                        <tr class="text-uppercase">
                                            <th>#</th>
                                            <th>किताब कोड</th>
                                            <th>किताब प्रकार</th>
                                            <th>पञ्जिकाधिकारी</th>
                                            <th>देखी</th>
                                            <th>सम्म</th>
                                            <th>कुल रेकर्ड</th>
                                            <th>सूचना फाराम</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($books as $book)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $book->code }}</td>
                                                <td>{{ $book->book_type }}</td>
                                                <td>{{ $book->registaar }}</td>
                                                <td>{{ $book->from }}</td>
                                                <td>{{ $book->to }}</td>
                                                <td>
                                                    @if ($book->book_type == 'जन्म दर्ता')
                                                        {{ \App\Birth::where('book_id', $book->id)->count() }}
                                                    @elseif($book->book_type == 'मृत्यु दर्ता')
                                                        {{ \App\Death::where('book_id', $book->id)->count() }}
                                                    @elseif($book->book_type == 'विवाह दर्ता')
                                                        {{ \App\Marriage::where('book_id', $book->id)->count() }}
                                                    @elseif($book->book_type == 'बसाईसराई दर्ता')
                                                    {{ \App\MigrationCertificate::where('book_id', $book->id)->count() }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($book->book_type == 'जन्म दर्ता')
                                                        <a href="{{ route('birth.create') }}?book_id={{ $book->id }}"
                                                            class="btn btn-info">Add</a>
                                                    @elseif($book->book_type == 'मृत्यु दर्ता')
                                                        <a href="{{ route('death.create') }}?book_id={{ $book->id }}"
                                                            class="btn btn-info">Add</a>
                                                    @elseif($book->book_type == 'विवाह दर्ता')
                                                        <a href="{{ route('marriage.create') }}?book_id={{ $book->id }}"
                                                            class="btn btn-info">Add</a>
                                                    @elseif($book->book_type == 'बसाईसराई दर्ता')
                                                        <a href="{{ route('migration.create') }}?book_id={{ $book->id }}"
                                                            class="btn btn-info">Add</a>
                                                    @endif
                                                </td>
                                                <td class="text-nowrap text-right">

                                                    <a class="action-btn text-primary"
                                                        href="{{ route('book.edit', $book->id) }}"><i
                                                            class="far fa-edit"></i></a>
                                                    <form action="{{ route('book.delete', $book->id) }}" method="post"
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
                                        {{-- @foreach ($births as $birth)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $birth->reg_number }}</td>
                                                <td>{{ $birth->name }}</td>
                                                <td>{{ $birth->gender }}</td>
                                                <td>{{ $birth->dob }}</td>
                                                <td>{{ $birth->father_name }}</td>
                                                <td>{{ $birth->mother_name }}</td>
                                                <td>{{ $birth->grandfather_name }}</td>
                                                <td>{{ $birth->birth_place }}</td>

                                                <td class="text-nowrap text-right">

                                                    <a class="action-btn text-primary show" style="cursor: pointer"
                                                        id="{{ $birth->id }}" data-toggle="modal"
                                                        data-target=".bd-example-modal-lg"><i class="far fa-eye"></i></a>
                                                    <a class="action-btn text-primary"
                                                        href="{{ route('birth.edit', $birth->id) }}"><i
                                                            class="far fa-edit"></i></a>
                                                    <form action="{{ route('birth.delete', $birth->id) }}" method="post"
                                                        onsubmit="return confirm('के तपाईँ निश्चित हुनुहुन्छ?')"
                                                        class="form-inline d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="action-btn text-danger"><i
                                                                class="far fa-trash-alt"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
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

    $(document).on('click', '.btn_print', function() {
        var prtContent = document.getElementById("my_data");
        var WinPrint = window.open();
        WinPrint.document.write(prtContent.outerHTML);
        WinPrint.document.close();
        WinPrint.foc    us();
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
