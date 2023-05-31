@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="p-2">
            <div class="container-fluid">
                <nav aria-label="breadcrumb" class="d-flex justify-content-between">
                    <div class="my-breadcrumb">
                        <a class="first-breadcrumb" href="{{ route('migration.index') }}">बसाईसराई दर्ता</a>
                        <a class="sub-breadcrumb" href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        <a class="breadcrumb-item ml-4" href="{{ route('migration.index') }}">@lang('navigation.migration-notice-form')</a>
                        <a
                            class="breadcrumb-item">{{ $family->migrationCertificate ? 'अपडेट गर्नुहोस्' : 'सदस्य थप्नुहोस्' }}</a>
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
                @include('migration-notice.family-input')
            </div>

        </div>
    </div>
@endsection
