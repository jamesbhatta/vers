@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="p-3">
            <div class="container-fluid">
                <nav aria-label="breadcrumb" class="d-flex justify-content-between">
                    <div class="mx-3">
                        <p style="font-size: 27px">@lang('navigation.migration-notice-form')</p>
                    </div>
                    <div class="my-breadcrumb">
                        <a class="breadcrumb-item" href="{{ route('dashboard') }}">@lang('navigation.dashboard')</a>
                        <a class="breadcrumb-item" href="{{ route('migration.index') }}">@lang('navigation.migration-notice-form')</a>
                        <a class="breadcrumb-item active"
                            aria-current="page">{{ $migrationCertificate->id ? 'अपडेट गर्नुहोस्' : 'सृजना गर्नुहोस्' }}</a>
                    </div>
                </nav>
                <hr>
                <div class="box mt-5 p-3">
                    <form
                        action="{{ $migrationCertificate->id ? route('migration.update', $migrationCertificate) : route('migration.store') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($migrationCertificate->id)
                            @method('PUT')
                        @endisset
                        <div class="card  p-3">
                            <h3 class="text-left h5 font-weight-bold p-1">बसाईसराई दर्ता विवरण</h3>
                            <hr>
                            <div class="col-lg-12 mt-3" style="line-height: 3px">
                                <livewire:municipality :death="$migrationCertificate" />
                                <x-darta :death="$migrationCertificate" />
                            </div>
                        </div>
                        {{-- कहाँ बाट सरी आएको --}}
                        <div class="card mt-2 p-3">
                            <h3 class="text-left h5 font-weight-bold p-1">क. कहाँ बाट सरी आएको</h3>
                            <hr>
                            <div class="row mt-3" style="line-height: 3px">
                                <div class="col-lg-12">
                                    <livewire:migration-from-address :migrationFromAddress="$migrationCertificate"/>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="form-group col-lg-3">
                                    <label for="">गाउँ/टोलको नाम</label>
                                    <div class="input-group">
                                        <input type="text" name="before_village" placeholder="@lang('navigation.village-toll-name')"
                                            class="form-control"
                                            value="{{ old('before_village', $migrationCertificate->before_village) }}" />
                                    </div>
                                    @error('before_village')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-3">
                                    <label>वडा नं.</label>
                                    <div class="input-group">
                                        <input type="text" name="before_ward" class="form-control"
                                            placeholder="वडा नं."
                                            value="{{ old('before_ward', $migrationCertificate->before_ward) }}" />
                                    </div>
                                    @error('before_ward')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-3">
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
                                <div class="form-group col-lg-3">
                                    <label> बसाई सराईको कारण</label>
                                    <div class="input-group">
                                        <input type="text" name="migration_reason" class="form-control"
                                            placeholder="@lang('navigation.reason')"
                                            value="{{ old('migration_reason', $migrationCertificate->migration_reason) }}" />
                                    </div>
                                    @error('migration_reason')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-lg-3">
                                <label> बसाई सराईको मिति </label>
                                <div class="input-group">
                                    <input type="text" id="nepali-datepicker5" name="migration_date"
                                        value="{{ old('migration_date', $migrationCertificate->migration_date) }}" class="form-control"
                                        placeholder="मिति चयन गर्नुहोस्" />
                                </div>
                                @error('migration_date')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="card mt-3 p-3">
                            <h3 class="h5 font-weight-bold p-1">ख. कहाँ सरी जाने </h3>
                            <hr>
                            <div class="row mt-3">
                                <div class="col-lg-12">
                                    <livewire:after-migration :afterMigration="$migrationCertificate" />
                                </div>
                                <div class="col-lg-12 d-flex">
                                    <div class="form-group col-lg-3">
                                        <label for="">गाउँ/टोलको नाम</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="@lang('navigation.village-toll-name')"
                                                name="after_village"
                                                value="{{ old('after_village', $migrationCertificate->after_village) }}" />
                                        </div>
                                        @error('after_village')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="">वडा नं.</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="वडा नं."
                                                name="after_ward"
                                                value="{{ old('after_ward', $migrationCertificate->after_ward) }}" />
                                        </div>
                                        @error('after_ward')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="">घर नं.</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" placeholder="@lang('navigation.houseno')"
                                                name="after_houseno"
                                                value="{{ old('after_houseno', $migrationCertificate->after_houseno) }}" />
                                        </div>
                                        @error('after_houseno')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-3">
                            <x-sachi-form :death="$migrationCertificate" />
                        </div>
                        <button type="submit"
                            class="btn btn-primary ml-3 mb-2">{{ $migrationCertificate->id ? 'Update' : 'Submit' }}</button>
                    </form>
                </div>
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
@endsection
