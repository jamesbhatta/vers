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
                <hr>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span><i class="bi bi-x-circle-fill"></i></span>
                        </button>
                    </div>
                @endif
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
                                    <input type="text" class="form-control" id="nepali-datepicker1" placeholder=" दर्ता मिति"
                                        name="entry_date" value="{{ $old->entry_date }}">
                                @else
                                    <input type="text" class="form-control" id="nepali-datepicker1" placeholder=" दर्ता मिति"
                                        name="entry_date">
                                @endisset
                            </div>
                            <div class="col-lg-2">
                                @isset($old)
                                    <input type="text" class="form-control" id="nepali-datepicker2" placeholder=" बसाई सराईको मिति" name="migration_date"
                                        value="{{ $old->migration_date }}">
                                @else
                                    <input type="text" class="form-control" id="nepali-datepicker2" placeholder=" बसाई सराईको मिति" name="migration_date">
                                @endisset
                            </div>

                            <div class="col-lg-1">
                                <input type="submit" class="btn btn-info bg-info" value="Filter">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div class="box mt-1">
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
                                        <a href="{{ route('migration.show', $migrationCertificate->id) }}"
                                            class="action-btn text-primary"><i class="fa fa-eye"></i></a>
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
                                        <a href="{{route('migration.show', $migrationCertificate)}}"
                                            class="action-btn text-primary" id="btnPrint"><i class="fa fa-print" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        function myDelete() {
            if (!confirm("Are You Sure to delete this")) {
                event.preventDefault();
            }
        }
    </script>
@endsection
