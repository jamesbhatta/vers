@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="p-2">
            <div class="container-fluid">
                <nav aria-label="breadcrumb" class="d-flex justify-content-between">
                    <div class="my-breadcrumb">
                        <a class="first-breadcrumb" href="{{ route('marriage.index') }}">विवाह दर्ता</a>
                        <a class="sub-breadcrumb" href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        <a class="breadcrumb-item ml-4" href="{{ route('marriage.index') }}">@lang('navigation.marriage-notice-form')</a>
                        <a
                            class="breadcrumb-item">{{ $marriage->migrationCertificate ? 'अपडेट गर्नुहोस्' : 'साक्षी थप्नुहोस्' }}</a>
                    </div>
                </nav>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span><i class="bi bi-x-circle-fill"></i></span>
                        </button>
                    </div>
                @endif
                <div class="box mt-2 p-5">
                    <form action="{{ $marriageWithness->id ? route('marriageWithness.update', $marriageWithness) : route('marriageWithness.store', $marriage) }}" method="POST">
                       @if ($marriageWithness->id)
                            @method('put')
                       @endif
                        @csrf
                        <div class="pb-2 d-flex justify-content-between">
                            <h3 class="text-center">यसमा लेखेको विवरण साचो हो, झुठा ठहरे कानुन बमोजिम साहुला बुझाउला भनि
                                सहिछाप गर्ने, सूचकको विवरण </h3>
                        </div>
                        <div class="wrapper mt-1">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label><span class="text-danger ">*</span> साक्षीको नाम </label>

                                    <input type="text" name="relative_name" class="form-control myText"
                                        value="{{ old('relative_name', $marriageWithness->relative_name) }}">
                                    @error('relative_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for=""><span class="text-danger">*</span> साक्षीको ठेगाना</label>
                                    <div class="input-group mb-2">

                                        <input type="text" name="relative_address" class="form-control myText"
                                            value="{{ old('relative_address', $marriageWithness->relative_address) }}" />
                                    </div>
                                    @error('relative_address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">दुलाह-दुलही संगको नाता</label>
                                    <input list="relationships" id="relationship" name="relationship"
                                        class="form-control myText"
                                        value="{{ old('relationship', $marriageWithness->relationship) }}">
                                    <datalist id="relationships">
                                        <option value="हजुर बुबा">
                                        <option value="बुवा">
                                        <option value="आमा">
                                    </datalist>


                                    @error('relationship')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>



                                <div class="form-group col-md-4">
                                    <label for=""> साक्षी मिति</label>
                                    <div class="input-group mb-2">

                                        <input type="text" name="date" id="sachi_nepali_datepicker"
                                            value="{{ old('date', $marriageWithness->date) }}" class="form-control" />
                                    </div>
                                    @error('date')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                            </div>
                            <input type="submit" class=" btn btn-success bg-success"
                                value="{{ $marriageWithness->id ? 'Update' : 'Submit' }}" />

                    </form>
                </div>
                <div class="box mt-3 ">
                    <div class="box__body">
                        <table class="table table-responsive-sm m-3">
                            <thead class="thead-light">
                                <tr class="text-uppercase">
                                    <th>#</th>
                                    <th>नाम,थर</th>
                                    <th>ठेगाना </th>
                                    <th>दुलाह / दुलही संगको नाता</th>
                                    <th>साक्षी मिति</th>
                                    <th class="text-right">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($marriageWithnesss as $marriageWithness)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $marriageWithness->relative_name }}</td>
                                        <td>{{ $marriageWithness->relative_address }}</td>
                                        <td>{{ $marriageWithness->relationship }}</td>
                                        <td> {{ $marriageWithness->date }}</td>
                                        <td class="text-nowrap text-right">
                                            <a href="{{ route('marriageWithness.edit', [$marriage, $marriageWithness]) }}"
                                                class="action-btn text-primary"><i class="fa fa-edit"></i></a>
                                            <span class="mx-2"></span>
                                            <form action="{{ route('marriageWithness.delete', $marriageWithness) }}" method="post"
                                                onsubmit="return confirm('के तपाईँ निश्चित हुनुहुन्छ?')"
                                                class="form-inline d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="action-btn text-danger"><i
                                                        class="far fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">No Data Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <style>
                .custom-select {
                    height: 43px;
                    font-size: 15px;
                }

                .btn-primary {
                    color: #fff;
                    background-color: #337ab7;
                    border-color: #2e6da4;
                    height: 37px;
                    margin-top: 27px;
                }
            </style>
        </div>
    </div>
@endsection
