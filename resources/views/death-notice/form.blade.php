

@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="">
            <div class="container-fluid">
                <nav aria-label="breadcrumb" class="d-flex justify-content-between  rounded">

                    <div class="my-breadcrumb">
                        <a class="first-breadcrumb" href="{{ route('death.index') }}">मृत्यु दर्ता</a>
                        <a class="sub-breadcrumb" href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        <a class="final-item ml-3">@lang('navigation.death-notice-form')</a>
                    </div>
                </nav>
                <label class="font-weight-bold pb-2 border-bottom col-12" style="font-size: 20px;padding:0"></label>
                @if (session()->has('error'))
                    <div class="mt-3 alert alert-danger" id="my_alert" role="alert">
                        {{ session()->get('error') }}
                    </div>
                @endif
                <div class="box mt-2 px-3 pt-3">

                    <form action="{{ $death->id ? route('death.update', $death) : route('death.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @isset($death->id)
                            @method('PUT')
                        @endisset
                        <h4 class="font-weight-bold pb-3">मृतकको दर्ता विवरण </h4>
                        <div class="card p-3">
                            @php
                                $book_id = '';
                            @endphp
                            @isset($_GET['book_id'])
                                @php
                                    $book_id = $_GET['book_id'];

                                @endphp
                            @endisset
                            <livewire:municipality :death="$death" :book="$book_id" />

                            {{-- <x-darta :death="$death" :book="$book_id"/> --}}
                        </div>
                        <hr>

                        <h4 class="font-weight-bold py-3">मृतकको व्यक्तिगत विवरण </h4>
                        <div class="card p-3">
                            <div class="row">
                                <x-general-form :death="$death" />
                                <div class="form-group col-xl-3 col-lg-4 col-md-6">
                                    <label for=""><span class="text-danger">*</span>उमेर</label>
                                    <input type="number" name="age"  class="form-control"
                                        value="{{ old('age', $death->age) }}">
                                    @error('age')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-xl-3 col-lg-4 col-md-6">
                                    <x-mother-tongue :name="'mother_tongue'" :userdata="$death"/>
                                </div>
                                <div class="form-group col-xl-3 col-lg-4 col-md-6">
                                    <label for=""><span class="text-danger">*</span> मरेको मिति </label>
                                    <input type="text" name="death_date" id="nepali-datepicker" class="form-control"
                                        value="{{ old('death_date', $death->death_date) }}">
                                    @error('death_date')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-xl-3 col-lg-4 col-md-6">
                                    <label for=""><span class="text-danger">*</span> मरेको ठाउँ</label>
                                    <div class="input-group mb-2">

                                        <input type="text" class="form-control myText" name="death_place"
                                            value="{{ old('death_place', $death->death_place) }}" />
                                    </div>
                                    @error('death_place')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-xl-3 col-lg-4 col-md-6">
                                    <label for="">नागरिकता नम्बर</label>
                                    <div class="input-group mb-2">

                                        <input type="text" name="citizenship_number"
                                            value="{{ old('citizenship_number', $death->citizenship_number) }}"
                                            class="form-control" />
                                    </div>
                                    @error('citizenship_number')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-xl-3 col-lg-4 col-md-6">
                                    <label for="">नागरिकता जारी मिति</label>
                                    <div class="input-group mb-2">

                                        <input type="text" name="citizenship_date" id="nepali-datepicker1"
                                            value="{{ old('citizenship_date', $death->citizenship_date) }}"
                                            class="form-control" />
                                    </div>
                                    @error('citizenship_date')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-xl-3 col-lg-4 col-md-6">
                                    <label for="">नागरिकता लिएको जिल्ला</label>
                                    <div class="input-group mb-2">

                                        <input type="text" name="citizenship_district"
                                            value="{{ old('citizenship_district', $death->citizenship_district) }}"
                                            class="form-control myText" />
                                    </div>
                                    @error('citizenship_district')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-xl-3 col-lg-4 col-md-6">
                                    <label for=""><span class="text-danger">*</span> वैवाहिक स्थिति</label>
                                    <div class="input-group mb-2">

                                        <select class="custom-select" name="marital_status">
                                            <option selected class="m-5" value="">छान्न्नुहोस्।
                                            </option>
                                            <div>
                                                <option value="विवाहित"
                                                    {{ $death->marital_status == 'विवाहित' || old('marital_status') == 'विवाहित' ? 'selected' : '' }}>
                                                    विवाहित
                                                </option>
                                                <option value="अविवाहित"
                                                    {{ $death->marital_status == 'अविवाहित' || old('marital_status') == 'अविवाहित' ? 'selected' : '' }}>
                                                    अविवाहित</option>
                                            </div>
                                        </select>
                                    </div>
                                    @error('marital_status')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>






                                <div class="form-group col-xl-3 col-lg-4 col-md-6">
                                    <label for="">पति/पत्नी</label>
                                    <div class="input-group mb-2">

                                        <input type="text" name="spouse" value="{{ old('spouse', $death->spouse) }}"
                                            class="form-control myText"/>
                                    </div>
                                    @error('spouse')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>




                                <div class="form-group col-xl-3 col-lg-4 col-md-6">
                                    <label for=""><span class="text-danger">*</span> बुबाको नाम</label>
                                    <div class="input-group mb-2">

                                        <input type="text" name="father_name"
                                            value="{{ old('father_name', $death->father_name) }}" class="form-control myText" />
                                    </div>
                                    @error('father_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-xl-3 col-lg-4 col-md-6">
                                    <label for=""><span class="text-danger">*</span> मृत्युको कारण</label>
                                    <div class="input-group mb-2">

                                        {{-- <input type="text" name="cause_death"
                                            value="{{ old('cause_death', $death->cause_death) }}" class="form-control" /> --}}

                                        <select name="cause_death" class="custom-select">
                                            <option value="" selected disabled>छान्न्नुहोस्।</option>
                                            <option value="दुर्घटना"
                                                {{ $death->cause_death == 'दुर्घटना' || old('cause_death') == 'दुर्घटना' ? 'selected' : '' }}>
                                                दुर्घटना</option>
                                            <option value="झाडापखला"
                                                {{ $death->cause_death == 'झाडापखला' || old('cause_death') == 'झाडापखला' ? 'selected' : '' }}>
                                                झाडापखला</option>
                                            <option value="स्वास प्रस्वास"
                                                {{ $death->cause_death == 'स्वास प्रस्वास' || old('cause_death') == 'स्वास प्रस्वास' ? 'selected' : '' }}>
                                                स्वास प्रस्वास</option>
                                            <option value="औलो"
                                                {{ $death->cause_death == 'औलो' || old('cause_death') == 'औलो' ? 'selected' : '' }}>
                                                औलो</option>
                                            <option value="कालाज्वर"
                                                {{ $death->cause_death == 'कालाज्वर' || old('cause_death') == 'कालाज्वर' ? 'selected' : '' }}>
                                                कालाज्वर</option>
                                            <option value="मेनेनजाईटिस"
                                                {{ $death->cause_death == 'मेनेनजाईटिस' || old('cause_death') == 'मेनेनजाईटिस' ? 'selected' : '' }}>
                                                मेनेनजाईटिस</option>
                                            <option value="क्यान्सर"
                                                {{ $death->cause_death == 'क्यान्सर' || old('cause_death') == 'क्यान्सर' ? 'selected' : '' }}>
                                                क्यान्सर</option>
                                            <option value="रक्तचाप"
                                                {{ $death->cause_death == 'रक्तचाप' || old('cause_death') == 'रक्तचाप' ? 'selected' : '' }}>
                                                रक्तचाप</option>
                                            <option value="टी.वि."
                                                {{ $death->cause_death == 'टी.वि.' || old('cause_death') == 'टी.वि.' ? 'selected' : '' }}>
                                                टी.वि.</option>
                                            <option value="अन्य"
                                                {{ $death->cause_death == 'अन्य' || old('cause_death') == 'अन्य' ? 'selected' : '' }}>
                                                अन्य</option>
                                        </select>
                                    </div>
                                    @error('cause_death')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-xl-3 col-lg-4 col-md-6">
                                    <x-country-form :label="'जन्म भएको देश'" :name="'birth_country'" :usercountry="$death" />

                                </div>



                                <div class="form-group col-xl-3 col-lg-4 col-md-6">
                                    <label for="">ठेगाना</label>
                                    <div class="input-group mb-2">

                                        <input type="text" name="address"
                                            value="{{ old('address', $death->address) }}" class="form-control myText" />
                                    </div>
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-xl-3 col-lg-4 col-md-6">
                                    <label for=""><span class="text-danger">*</span> धर्म</label>
                                    <div class="input-group mb-2">

                                        <select class="custom-select" name="religion">
                                            <option class="m-5" value="">छान्न्नुहोस्। </option>
                                            <div>
                                                <option value="हिन्दु"
                                                    {{ $death->religion == 'हिन्दु' || old('religion') == 'हिन्दु' ? 'selected' : '' }}>
                                                    हिन्दु
                                                </option>
                                                <option value="मुस्लिम"
                                                    {{ $death->religion == 'मुस्लिम' || old('religion') == 'मुस्लिम' ? 'selected' : '' }}>
                                                    मुस्लिम
                                                </option>
                                                <option value="रिस्चियन"
                                                    {{ $death->religion == 'क्रिस्चियन' || old('religion') == 'क्रिस्चियन' ? 'selected' : '' }}>
                                                    क्रिस्चियन
                                                </option>
                                                <option value="बौद्ध"
                                                    {{ $death->religion == 'बौद्ध' || old('religion') == 'बौद्ध' ? 'selected' : '' }}>
                                                    बौद्ध
                                                </option>
                                                <option value="अन्य"
                                                    {{ $death->religion == 'अन्य' || old('religion') == 'अन्य' ? 'selected' : '' }}>
                                                    अन्य
                                                </option>
                                            </div>
                                        </select>
                                    </div>
                                    @error('religion')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-xl-3 col-lg-4 col-md-6">
                                    <label for=""><span class="text-danger">*</span> शिक्षा</label>
                                    <div class="input-group mb-2">

                                        <select class="custom-select" name="education">
                                            <option selected disabled class="m-5" value="">छान्न्नुहोस्।
                                            </option>
                                            <div>
                                                <option value="निरक्षर"
                                                    {{ $death->education == 'निरक्षर' || old('education') == 'निरक्षर' ? 'selected' : '' }}>
                                                    निरक्षर
                                                </option>
                                                <option value="साधरण"
                                                    {{ $death->education == 'साधरण' || old('education') == 'साधरण' ? 'selected' : '' }}>
                                                    साधरण
                                                </option>
                                                <option value="एस.एल.सी"
                                                    {{ $death->education == 'एस.एल.सी' || old('education') == 'एस.एल.सी' ? 'selected' : '' }}>
                                                    एस.एल.सी
                                                </option>
                                                <option value="प्रमाणपत्र"
                                                    {{ $death->education == 'प्रमाणपत्र' || old('education') == 'प्रमाणपत्र' ? 'selected' : '' }}>
                                                    प्रमाणपत्र
                                                </option>
                                                <option value="स्नातक"
                                                    {{ $death->education == 'स्नातक' || old('education') == 'स्नातक' ? 'selected' : '' }}>
                                                    स्नातक
                                                </option>
                                                <option value="स्नातकोत्तर"
                                                    {{ $death->education == 'स्नातकोत्तर' || old('education') == 'स्नातकोत्तर' ? 'selected' : '' }}>
                                                    स्नातकोत्तर</option>
                                                <option value="विद्या वारिधि"
                                                    {{ $death->education == 'विद्या वारिधि' || old('education') == 'विद्या वारिधि' ? 'selected' : '' }}>
                                                    विद्या वारिधि
                                                </option>
                                            </div>
                                        </select>
                                    </div>
                                    @error('education')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4 class="font-weight-bold pt-3">मृतकको साक्षी विवरण </h4>
                        {{-- <div class="row"> --}}
                        <x-sachi-form :death="$death" />


                        <div class="card mt-3 p-3">
                            <div class="row">



                                <div class="form-group col-xl-12 ">
                                    <label for="">Description</label>
                                    <div class="input-group mb-2">

                                        <textarea id="summernote" class="col-12" name="description">{{ old('description', $death->description) }}</textarea>
                                    </div>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="p-3 text-right" style="background-color:#f9fafb">
                                <button class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light"
                                    type="submit"
                                    style="background-color:#374f67; color: #fff;">{{ $death->id ? 'Update' : 'Save' }}</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
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
    @endpush
@endsection
