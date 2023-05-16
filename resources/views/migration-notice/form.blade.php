@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="p-3">
            <div class="container-fluid">
                {{-- <nav aria-label="breadcrumb" class="d-flex justify-content-between rounded"> --}}
                <nav aria-label="breadcrumb" class="d-flex justify-content-between rounded">
                    <div class="my-breadcrumb">
                        <a class="first-breadcrumb" href="{{ route('migration.index') }}">बसाईसराई दर्ता</a>
                        <a class="sub-breadcrumb" href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        <a class="sub-breadcrumb ml-4">@lang('navigation.migration-notice-form')</a>
                        <a class="breadcrumb-item active ml-4"
                            aria-current="page">{{ $migrationCertificate->id ? 'अपडेट गर्नुहोस्' : 'सृजना गर्नुहोस्' }}</a>
                    </div>
                </nav>
                {{-- </nav> --}}
                <label class="font-weight-bold pb-2 border-bottom col-12" style="font-size: 20px;padding:0"></label>

                <form
                    action="{{ $migrationCertificate->id ? route('migration.update', $migrationCertificate) : route('migration.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($migrationCertificate->id)
                        @method('PUT')
                    @endisset
                    <div class="box mt-2 px-3 pt-3">
                        <h4 class="font-weight-bold pb-3">ठेगाना </h4>

                        <div class="card  p-3">
                            @php
                                $book_id = '';
                            @endphp
                            @isset($_GET['book_id'])
                                @php
                                    $book_id = $_GET['book_id'];
                                    
                                @endphp
                            @endisset
                            <livewire:municipality :death="$migrationCertificate" :book="$book_id" />

                        </div>
                        <h4 class="font-weight-bold py-3">बसाईसराई दर्ता विवरण </h4>
                        <div class="card p-3">
                            <div class="row">
                                <div class=" col-md-4 mb-3">
                                    <label><span class="text-danger">*</span> दर्ता न.</label>
                                    <input type="text" class="form-control" name="reg_number"
                                        value="{{ old('reg_number', $migrationCertificate->reg_number) }}">
                                    @error('reg_number')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <label><span class="text-danger">*</span> दर्ता मिति</label>
                                    <input type="text" name="entry_date" id="darta_miti" class="form-control"
                                        value="{{ old('entry_date', $migrationCertificate->entry_date) }}" />
                                    @error('entry_date')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <label><span class="text-danger">*</span>बसाईसराईको प्रकार</label>
                                    <select class="custom-select" name="type" id="mySelect"
                                        onchange="showSelectedValue()">
                                        <option selected disabled class="m-5" value="">छान्न्नुहोस्।
                                        </option>
                                        <option class="m-5" value="बसाई सरी आएको"
                                            {{ $migrationCertificate->type == 'बसाई सरी आएको' ? 'selected' : '' }}>बसाई सरी आएको
                                        </option>
                                        <option class="m-5" value="बसाई सरी जाने"
                                            {{ $migrationCertificate->type == 'बसाई सरी जाने' ? 'selected' : '' }}>बसाई सरी जाने
                                        </option>
                                    </select>
                                    @error('entry_date')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- कहाँ बाट सरी आएको --}}
                        <h4 class="font-weight-bold py-3"><span id="selectedValue"></span> ठेगाना</h4>
                        <div class="card p-3">

                            <livewire:after-migration :afterMigration="$migrationCertificate" />

                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label for=""><span class="text-danger">*</span>&nbsp;गाउँ/टोलको नाम</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control myText" placeholder="@lang('navigation.village-toll-name')"
                                            name="migration_village"
                                            value="{{ old('migration_village', $migrationCertificate->migration_village) }}" />
                                    </div>
                                    @error('migration_village')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for=""><span class="text-danger">*</span>&nbsp;वडा नं.</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" placeholder="वडा नं."
                                            name="migration_ward"
                                            value="{{ old('migration_ward', $migrationCertificate->migration_ward) }}" />
                                    </div>
                                    @error('migration_ward')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="">घर नं.</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" placeholder="@lang('navigation.houseno')"
                                            name="migration_houseno"
                                            value="{{ old('migration_houseno', $migrationCertificate->migration_houseno) }}" />
                                    </div>
                                    @error('migration_houseno')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-4">
                                    <label><span class="text-danger">*</span>&nbsp;बसाई सराईको कारण</label>
                                    <div class="input-group">
                                        <input type="text" name="migration_reason" class="form-control myText"
                                            placeholder="@lang('navigation.reason')"
                                            value="{{ old('migration_reason', $migrationCertificate->migration_reason) }}" />
                                    </div>
                                    @error('migration_reason')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-4">
                                    <label><span class="text-danger">*</span>&nbsp;बसाई सराईको मिति </label>
                                    <div class="input-group">
                                        <input type="text" id="nepali-datepicker5" name="migration_date"
                                            value="{{ old('migration_date', $migrationCertificate->migration_date) }}"
                                            class="form-control" placeholder="मिति चयन गर्नुहोस्" />
                                    </div>
                                    @error('migration_date')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        {{-- <div class="card p-3">

                            <livewire:migration-from-address :migrationFromAddress="$migrationCertificate" />
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label for=""><span class="text-danger">*</span>&nbsp;गाउँ/टोलको नाम</label>
                                    <div class="input-group">
                                        <input type="text" name="before_village" placeholder="@lang('navigation.village-toll-name')"
                                            class="form-control myText"
                                            value="{{ old('before_village', $migrationCertificate->before_village) }}" />
                                    </div>
                                    @error('before_village')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-4">
                                    <label><span class="text-danger">*</span>&nbsp;वडा नं.</label>
                                    <div class="input-group">
                                        <input type="number" name="before_ward" class="form-control" placeholder="वडा नं."
                                            value="{{ old('before_ward', $migrationCertificate->before_ward) }}" />
                                    </div>
                                    @error('before_ward')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="">घर नं.</label>
                                    <div class="input-group">
                                        <input type="number" name="before_houseno" class="form-control"
                                            placeholder="@lang('navigation.houseno')"
                                            value="{{ old('before_houseno', $migrationCertificate->before_houseno) }}" />
                                    </div>
                                    @error('before_houseno')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-4">
                                    <label><span class="text-danger">*</span>&nbsp;बसाई सराईको कारण</label>
                                    <div class="input-group">
                                        <input type="text" name="migration_reason" class="form-control myText"
                                            placeholder="@lang('navigation.reason')"
                                            value="{{ old('migration_reason', $migrationCertificate->migration_reason) }}" />
                                    </div>
                                    @error('migration_reason')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-4">
                                    <label><span class="text-danger">*</span>&nbsp;बसाई सराईको मिति </label>
                                    <div class="input-group">
                                        <input type="text" id="nepali-datepicker5" name="migration_date"
                                            value="{{ old('migration_date', $migrationCertificate->migration_date) }}"
                                            class="form-control" placeholder="मिति चयन गर्नुहोस्" />
                                    </div>
                                    @error('migration_date')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div> --}}
                        {{-- <h4 class="font-weight-bold py-3">ख. कहाँ सरी जाने</h4>

                         --}}
                        <h4 class="font-weight-bold mt-3">साक्षी विवरण</h4>

                        {{-- <div class="row p-3"> --}}
                        <x-sachi-form :death="$migrationCertificate" :relation="'बसाई सराई गर्ने '"/>
                        <div class="p-3 text-right mt-2" style="background-color:#f9fafb">
                            <button class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light"
                                type="submit"
                                style="background-color:#374f67; color: #fff;">{{ $migrationCertificate->id ? 'Update' : 'Save' }}</button>
                        </div>
                        {{-- </div> --}}
                        {{-- <button type="submit"
                            class="btn btn-primary ml-3 mb-2">{{ $migrationCertificate->id ? 'Update' : 'Submit' }}</button> --}}
                    </div>
                </form>
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

    @push('scripts')
        <script>
            function showSelectedValue() {
                var selectElement = document.getElementById("mySelect");
                var selectedOption = selectElement.options[selectElement.selectedIndex].text;
                document.getElementById("selectedValue").textContent = selectedOption;
            }
        </script>
    @endpush
@endsection
