@extends('layouts.app')

@section('breadcrumb')
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">ड्यासबोर्ड</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('navigation.settings')</li>
        </ol>
    </nav>
@endsection


@push('styles')
    <style>
        select {
            height: calc(1.5em + 1rem + 4px) !important;
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="my-4"></div>

        @include('alerts.success')

        <form action="{{ route('settings.sync') }}" method="POST" class="form font-noto">
            @csrf

            @component('settings.group',
                [
                    'title' => 'Application Settings',
                    'description' => 'General application setting',
                ])
                <div>
                    @component('settings.input',
                        [
                            'label' => 'App Name',
                            'name' => 'app_name',
                            'description' => 'The application name in Nepali',
                            'class' => 'myText',
                        ])
                    @endcomponent
                    <div class="my-3"></div>
                    @component('settings.input',
                        [
                            'label' => 'App Name (English)',
                            'name' => 'app_name_en',
                            'description' => 'The application name in English',
                            'class' => '',
                        ])
                    @endcomponent
                </div>
            @endcomponent


        </form>
    </div>

    <div class="">
        <div class="container pb-5" style="border-bottom: 1px dashed #ccc">

            @include('alerts.success')

            <div class="row">
                <div class="col-xl-5 col-lg-5 d-block mb-3" style="line-height: 10px">
                    <label style="font-size: 18px;font-weight:bold">पञ्जिकाधिकारी</label><br>
                    <span style="font-size: 15px">General registars setting</span>
                </div>
                <div class="col-xl-7 col-lg-7 ">
                    <div class="box p-3">

                        <form action="{{ route('settings.registaar') }}" method="POST">
                            @csrf
                            {{-- @method('PUT') --}}


                            <label style="font-weight: bold">नाम</label> <br>
                            <div class="d-flex gap-3">
                                <input type="text" class="form-control myText" name="name" value="{{ $registaar->name }}">
                                <button class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light"
                                    type="submit" style="background-color:#374f67; color: #fff;">Save</button>
                            </div>

                        </form>

                        {{-- @if ($registaars->count() != null) --}}
                        <table class="table mt-3">
                            {{-- <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col" class="text-right">Action</th>
                                    </tr>
                                </thead> --}}
                            <tbody>
                                @foreach ($registaars as $registaar)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="myText">{{ $registaar->name }}</td>
                                        <td class="text-nowrap text-right pr-5">
                                            <a class="action-btn text-primary"
                                                href="{{ route('settings.registaar.edit', $registaar) }}"><i
                                                    class="far fa-edit"></i></a>
                                            <form action="{{ route('settings.registaar.delete', $registaar) }}"
                                                method="post" onsubmit="return confirm('के तपाईँ निश्चित हुनुहुन्छ?')"
                                                class="form-inline d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="action-btn text-danger"><i
                                                        class="far fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- @endif --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="pt-5">
        <div class="">
            <div class="container pb-5" style="border-bottom: 1px dashed #ccc">

                @include('alerts.success')

                <div class="row">
                    <div class="col-xl-5 col-lg-5 d-block mb-3" style="line-height: 10px">
                        <label style="font-size: 18px;font-weight:bold">देशको नाम</label><br>
                        <span style="font-size: 15px">General country setting</span>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="box p-3">

                            <form action="{{ $country->id ? route('country.update', $country) : route('country.store') }}"
                                method="POST">
                                @csrf
                                {{-- @method('PUT') --}}
                                @isset($country->id)
                                    @method('PUT')
                                @endisset


                                <label style="font-weight: bold">देशको नाम</label> <br>
                                <div class="d-flex gap-3">
                                    <input type="text" class="form-control myText" name="name" value="{{ $country->name }}">
                                    <button class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light"
                                        type="submit"
                                        style="background-color:#374f67; color: #fff;">{{ $country->id ? 'Update' : 'Save' }}</button>
                                </div>

                            </form>

                            {{-- @if ($registaars->count() != null) --}}
                            <table class="table mt-3">
                                <tbody>
                                    @foreach (App\Country::orderBy('id', 'desc')->get() as $country)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="myText">{{ $country->name }}</td>
                                            <td class="text-nowrap text-right pr-5">
                                                <a class="action-btn text-primary"
                                                    href="{{ route('country.edit', $country) }}"><i
                                                        class="far fa-edit"></i></a>
                                                <form action="{{ route('country.destroy', $country) }}" method="post"
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
                                </tbody>
                            </table>
                            {{-- @endif --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="pt-5">
        <div class="">
            <div class="container pb-5" style="border-bottom: 1px dashed #ccc">

                @include('alerts.success')

                <div class="row">
                    <div class="col-xl-5 col-lg-5 d-block mb-3" style="line-height: 10px">
                        <label style="font-size: 18px;font-weight:bold">मातृभाषा</label><br>
                        <span style="font-size: 15px">General mother tongue setting</span>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="box p-3">

                            <form action="{{ $motherTongue->id ? route('moyhertongue.update', $motherTongue) : route('moyhertongue.store') }}" method="POST">
                                @csrf
                                @isset($motherTongue->id)
                                    @method('PUT')
                                @endisset


                                <label style="font-weight: bold">मातृभाषा</label> <br>
                                <div class="d-flex gap-3">
                                    <input type="text" class="form-control myText" name="name"
                                        value="{{ $motherTongue->name }}">
                                    <button class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light"
                                        type="submit"
                                        style="background-color:#374f67; color: #fff;">{{ $motherTongue->id ? 'Update' : 'Save' }}</button>
                                </div>

                            </form>

                            {{-- @if ($registaars->count() != null) --}}
                            <table class="table mt-3">
                                <tbody>
                                    @foreach (App\MotherTongue::orderBy('id', 'desc')->get() as $motherTongue)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="myText">{{ $motherTongue->name }}</td>
                                            <td class="text-nowrap text-right pr-5">
                                                <a class="action-btn text-primary"
                                                    href="{{ route('moyhertongue.edit', $motherTongue->id) }}"><i
                                                        class="far fa-edit"></i></a>
                                                <form action="{{ route('moyhertongue.destroy', $motherTongue->id) }}"
                                                    method="post"
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
                                </tbody>
                            </table>
                            {{-- @endif --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @livewire('default-form')
    {{-- <hr style="background-color:#ccc"> --}}


@endsection
