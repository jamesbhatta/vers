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

                <form action="{{ $book->id ? route('book.update', $book->id) : route('book.store') }}" method="POST">
                    @csrf
                    @isset($book->id)
                        @method('PUT')
                    @endisset
                    <div class="row">

                        <div class="col-xl-4">
                            <div class="box mt-3">
                                <div class="box__body" style="width: 100%;overflow-x:scroll">

                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label>किताब प्रकार</label>
                                                <select name="book_type" class="custom-select" id="">
                                                    <option value="">Please select Book type</option>
                                                    <option value="जन्म दर्ता"
                                                        {{ $book->book_type == 'जन्म दर्ता' ? 'selected' : '' }}>जन्म दर्ता
                                                    </option>
                                                    <option value="मृत्यु दर्ता"
                                                        {{ $book->book_type == 'मृत्यु दर्ता' ? 'selected' : '' }}>मृत्यु
                                                        दर्ता</option>
                                                    <option value="विवाह दर्ता"
                                                        {{ $book->book_type == 'विवाह दर्ता' ? 'selected' : '' }}>विवाह
                                                        दर्ता</option>
                                                    <option value="बसाईसराई दर्ता"
                                                        {{ $book->book_type == 'बसाईसराई दर्ता' ? 'selected' : '' }}>
                                                        बसाईसराई दर्ता</option>
                                                </select>
                                                @error('book_type')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label>किताब कोड</label>
                                                <input type="text" name="code" value="{{ old('code', $book->code) }}"
                                                    class="form-control">
                                                @error('code')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label>देखी</label>
                                                <input type="text" name="from" value="{{ old('from', $book->from) }}"
                                                    id="nepali-datepicker" class="form-control">
                                                @error('from')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label>सम्म</label>
                                                <input type="text" name="to" value="{{ old('to', $book->to) }}"
                                                    id="nepali-datepicker1" class="form-control">
                                                @error('to')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        {{--
                                        <input type="submit" value="Submit" class="btn bg-success"> --}}
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="box mt-3">
                                <div class="box__body" style="width: 100%;overflow-x:scroll">

                                    <div class="row">

                                        {{-- @livewire('book-address') --}}
                                        @livewire('book-address', ['book' => $book])


                                        <div class="col-12 d-flex justify-content-end mt-5">
                                            <input type="submit" value="{{ $book->id ? 'Update' : 'Save' }}"
                                                class="btn bg-info text-white">
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </form>
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
