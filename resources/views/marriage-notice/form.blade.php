@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="p-3">
            <div class="container-fluid">
                <nav aria-label="breadcrumb" class="d-flex justify-content-between  rounded">

                    <div class="my-breadcrumb">
                        <a class="first-breadcrumb" href="{{ route('death.index') }}">विवाह दर्ता</a>
                        <a class="sub-breadcrumb" href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        <a class="final-item ml-3" href="">@lang('navigation.marriage-notice-form')</a>
                    </div>

                </nav>
                <label class="font-weight-bold pb-2 border-bottom col-12" style="font-size: 20px;padding:0"></label>
                @if (session()->has('success'))
                    <div class="mt-3 alert alert-success" id="my_alert" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="box mt-2 p-3">

                    <form action="{{ $marriage->id ? route('marriage.update', $marriage) : route('marriage.store') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($marriage->id)
                            @method('PUT')
                        @endisset
                        <h4 class="font-weight-bold pb-3">ठेगाना </h4>
                        {{-- @livewire('municipality', ['death' => $birth]) --}}

                        <div class="card p-3">
                            @php
                                $book_id = '';
                            @endphp
                            @isset($_GET['book_id'])
                                @php
                                    $book_id = $_GET['book_id'];
                                    
                                @endphp
                            @endisset
                            <livewire:municipality :death="$marriage" :book="$book_id" />
                        </div>
                        <h4 class="font-weight-bold py-3">विवाह दर्ता विवरण </h4>
                        <div class="card p-3">
                            <div class="row">
                                <div class=" col-md-4 mb-3">
                                    <label><span class="text-danger">*</span> दर्ता न.</label>
                                    <input type="text" class="form-control" name="reg_number"
                                        value="{{ old('reg_number', $marriage->reg_number) }}">
                                    @error('reg_number')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4 mb-3">
                                    <label><span class="text-danger">*</span> दर्ता मिति</label>
                                    <input type="text" name="entry_date" id="darta_miti" class="form-control"
                                        value="{{ old('entry_date', $marriage->entry_date) }}" />
                                    @error('entry_date')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- <x-darta :death="$marriage" /> --}}
                </div>
                <hr>
                <h4 class="font-weight-bold py-3">दुलाहाको विवरण</h4>
                <div class="card p-3">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label><span class="text-danger">*</span> नाम,थर </label>
                            <input type="text" class="form-control myText" name="bride_name"
                                value="{{ old('bride_name', $marriage->bride_name) }}" />
                            @error('bride_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for=""> जन्म मिति</label>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" name="bride_dob"
                                    value="{{ old('bride_dob', $marriage->bride_dob) }}" id="nepali-datepicker" />
                            </div>
                            @error('bride_dob')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <x-country-form :label="'जन्म भएको देश'" :name="'bride_birth_country'" :id="'bride_birth_country'" :usercountry="$marriage" />
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">नागरिकता (ना.प्र.नं) </label>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" name="bride_citizenship_number"
                                    value="{{ old('bride_citizenship_date', $marriage->bride_citizenship_date) }}" />
                            </div>
                            @error('bride_citizenship_date')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for="">नागरिकता जारी मिति </label>
                            <div class="input-group mb-2">
                                <input type="text" id="nepali-datepicker1" class="form-control"
                                    name="bride_citizenship_date"
                                    value="{{ old('bride_citizenship_date', $marriage->bride_citizenship_date) }}" />
                            </div>
                            @error('bride_citizenship_date')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label>नागरिकता लिएको जिल्ला </label>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control myText" name="bride_citizenship_district"
                                    value="{{ old('bride_citizenship_district', $marriage->bride_citizenship_district) }}" />
                            </div>
                            @error('bride_citizenship_district')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label><span class="text-danger">*</span> स्थाई ठेगाना </label>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control myText" name="bride_temp_address"
                                    value="{{ old('bride_temp_address', $marriage->bride_temp_address) }}" />
                            </div>
                            @error('bride_temp_address')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for=""> शिक्षा</label>

                            <select class="custom-select" name="bride_education">
                                <option selected class="m-5" value="">छान्न्नुहोस्। </option>
                                <div>
                                    <option value="निरक्षर"
                                        {{ $marriage->bride_education == 'निरक्षर' || old('bride_education') == 'निरक्षर' ? 'selected' : '' }}>
                                        निरक्षर
                                    </option>
                                    <option value="साधारण"
                                        {{ $marriage->bride_education == 'साधारण' || old('bride_education') == 'साधारण' ? 'selected' : '' }}>
                                        साधारण
                                    </option>
                                    <option value="एस.एल.सी."
                                        {{ $marriage->bride_education == 'एस.एल.सी.' || old('bride_education') == 'एस.एल.सी.' ? 'selected' : '' }}>
                                        एस.एल.सी.
                                    </option>
                                    <option value="रमाणपत्र"
                                        {{ $marriage->bride_education == 'प्रमाणपत्र' || old('bride_education') == 'प्रमाणपत्र' ? 'selected' : '' }}>
                                        प्रमाणपत्र</option>
                                    <option value="स्नातक"
                                        {{ $marriage->bride_education == 'स्नातक' || old('bride_education') == 'स्नातक' ? 'selected' : '' }}>
                                        स्नातक
                                    </option>
                                    <option value="स्नातकोत्तर"
                                        {{ $marriage->bride_education == 'स्नातकोत्तर' || old('bride_education') == 'स्नातकोत्तर' ? 'selected' : '' }}>
                                        स्नातकोत्तर </option>
                                    <option value="विद्यावारिधि"
                                        {{ $marriage->bride_education == 'विद्यावारिधि' || old('bride_education') == 'विद्यावारिधि' ? 'selected' : '' }}>
                                        विद्यावारिधि </option>
                                </div>
                            </select>
                            @error('bride_education')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label> धर्म </label>
                            <select class="custom-select" name="bride_religion">
                                <option selected class="m-5" value="">छान्न्नुहोस्। </option>
                                <div>
                                    <option value="हिन्दु"
                                        {{ $marriage->bride_religion == 'हिन्दु' || old('bride_religion') == 'हिन्दु' ? 'selected' : '' }}>
                                        हिन्दु
                                    </option>
                                    <option value="बौद्ध"
                                        {{ $marriage->bride_religion == 'बौद्ध' || old('bride_religion') == 'बौद्ध' ? 'selected' : '' }}>
                                        बौद्ध
                                    </option>
                                    <option value="क्रिश्चियन"
                                        {{ $marriage->bride_religion == 'क्रिश्चियन' || old('bride_religion') == 'क्रिश्चियन' ? 'selected' : '' }}>
                                        क्रिश्चियन </option>
                                    <option value="मुस्लिम"
                                        {{ $marriage->bride_religion == 'मुस्लिम' || old('bride_religion') == 'मुस्लिम' ? 'selected' : '' }}>
                                        मुस्लिम
                                    </option>
                                    <option value="अन्य"
                                        {{ $marriage->bride_religion == 'अन्य' || old('bride_religion') == 'अन्य' ? 'selected' : '' }}>
                                        अन्य
                                    </option>
                                </div>
                            </select>
                            @error('bride_religion')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <x-mother-tongue :name="'bride_mother_tongue'" :id="'bride_mother_tongue'" :userdata="$marriage" />

                        </div>
                        <div class="form-group col-md-4">
                            <label><span class="text-danger">*</span> बाजेको नाम</label>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control myText" name="bride_grandfather_name"
                                    value="{{ old('bride_grandfather_name', $marriage->bride_grandfather_name) }}" />
                            </div>
                            @error('bride_grandfather_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for=""><span class="text-danger">*</span> बाबुको नाम </label>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control myText" name="bride_father_name"
                                    value="{{ old('bride_father_name', $marriage->bride_father_name) }}" />
                            </div>
                            @error('bride_father_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label><span class="text-danger">*</span> पूर्व वैवाहिक स्थिति </label>
                            <select class="custom-select" name="bride_pre_marrige_status">
                                
                                <div>
                                    <option value="अविवाहित"
                                        {{ $marriage->bride_pre_marrige_status == 'अविवाहित' || old('bride_pre_marrige_status') == 'अविवाहित' ? 'selected' : '' }}>
                                        अविवाहित</option>
                                    <option value="विवाहित"
                                        {{ $marriage->bride_pre_marrige_status == 'विवाहित' || old('bride_pre_marrige_status') == 'विवाहित' ? 'selected' : '' }}>
                                        विवाहित</option>
                                </div>
                            </select>
                            @error('bride_pre_marrige_status')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr>

                <h4 class="font-weight-bold mt-3 pb-3">दुलहीको विवरण</h4>
                <div class="card p-3">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label><span class="text-danger">*</span> नाम,थर </label>
                            <input type="text" class="form-control myText" name="groom_name"
                                value="{{ old('groom_name', $marriage->groom_name) }}" />
                            @error('groom_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for=""> जन्म मिति</label>
                            <div class="input-group mb-2">
                                <input type="text" id="nepali-datepicker2" class="form-control" name="groom_dob"
                                    value="{{ old('groom_dob', $marriage->groom_dob) }}" />
                            </div>
                            @error('groom_dob')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <x-country-form :label="'जन्म भएको देश'" :name="'groom_birth_country'" :id="'groom_birth_country'" :usercountry="$marriage" />

                        </div>
                        <div class="form-group col-md-4">
                            <label for="">नागरिकता (ना.प्र.नं) </label>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" name="groom_citizenship_number"
                                    value="{{ old('groom_citizenship_number', $marriage->groom_citizenship_number) }}" />
                            </div>
                            @error('groom_citizenship_number')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for="">नागरिकता जारी मिति </label>
                            <div class="input-group mb-2">
                                <input type="text" id="nepali-datepicker3" class="form-control"
                                    name="groom_citizenship_date"
                                    value="{{ old('groom_citizenship_date', $marriage->groom_citizenship_date) }}" />
                            </div>
                            @error('groom_citizenship_date')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label>नागरिकता लिएको जिल्ला </label>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control myText" name="groom_citizenship_district"
                                    value="{{ old('groom_citizenship_district', $marriage->groom_citizenship_district) }}" />
                            </div>
                            @error('groom_citizenship_district')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label><span class="text-danger">*</span> स्थाई ठेगाना </label>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control myText" name="groom_temp_address"
                                    value="{{ old('groom_temp_address', $marriage->groom_temp_address) }}" />
                            </div>
                            @error('groom_temp_address')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for=""> शिक्षा</label>

                            <select class="custom-select" name="groom_education">
                                <option selected class="m-5" value="">छान्न्नुहोस्। </option>
                                <div>
                                    <option value="निरक्षर"
                                        {{ $marriage->groom_education == 'निरक्षर' || old('groom_education') == 'निरक्षर' ? 'selected' : '' }}>
                                        निरक्षर
                                    </option>
                                    <option value="साधारण"
                                        {{ $marriage->groom_education == 'साधारण' || old('groom_education') == 'साधारण' ? 'selected' : '' }}>
                                        साधारण
                                    </option>
                                    <option value="एस.एल.सी."
                                        {{ $marriage->groom_education == 'एस.एल.सी.' || old('groom_education') == 'एस.एल.सी.' ? 'selected' : '' }}>
                                        एस.एल.सी.
                                    </option>
                                    <option value="रमाणपत्र"
                                        {{ $marriage->groom_education == 'प्रमाणपत्र' || old('groom_education') == 'प्रमाणपत्र' ? 'selected' : '' }}>
                                        प्रमाणपत्र</option>
                                    <option value="स्नातक"
                                        {{ $marriage->groom_education == 'स्नातक' || old('groom_education') == 'स्नातक' ? 'selected' : '' }}>
                                        स्नातक
                                    </option>
                                    <option value="स्नातकोत्तर"
                                        {{ $marriage->groom_education == 'स्नातकोत्तर' || old('groom_education') == 'स्नातकोत्तर' ? 'selected' : '' }}>
                                        स्नातकोत्तर </option>
                                    <option value="विद्यावारिधि"
                                        {{ $marriage->groom_education == 'विद्यावारिधि' || old('groom_education') == 'विद्यावारिधि' ? 'selected' : '' }}>
                                        विद्यावारिधि </option>
                                </div>
                            </select>
                            @error('groom_education')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label> धर्म </label>
                            <select class="custom-select" name="groom_religion">
                                <option selected class="m-5" value="">छान्न्नुहोस्। </option>
                                <div>
                                    <option value="हिन्दु"
                                        {{ $marriage->groom_religion == 'हिन्दु' || old('groom_religion') == 'हिन्दु' ? 'selected' : '' }}>
                                        हिन्दु
                                    </option>
                                    <option value="बौद्ध"
                                        {{ $marriage->groom_religion == 'बौद्ध' || old('groom_religion') == 'बौद्ध' ? 'selected' : '' }}>
                                        बौद्ध
                                    </option>
                                    <option value="क्रिश्चियन"
                                        {{ $marriage->groom_religion == 'क्रिश्चियन' || old('groom_religion') == 'क्रिश्चियन' ? 'selected' : '' }}>
                                        क्रिश्चियन </option>
                                    <option value="मुस्लिम"
                                        {{ $marriage->groom_religion == 'मुस्लिम' || old('groom_religion') == 'मुस्लिम' ? 'selected' : '' }}>
                                        मुस्लिम
                                    </option>
                                    <option value="अन्य"
                                        {{ $marriage->groom_religion == 'अन्य' || old('groom_religion') == 'अन्य' ? 'selected' : '' }}>
                                        अन्य
                                    </option>
                                </div>
                            </select>
                            @error('groom_religion')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <x-mother-tongue :name="'groom_mother_tongue'" :id="'groom_mother_tongue'" :userdata="$marriage" />
                        </div>
                        <div class="form-group col-md-4">
                            <label><span class="text-danger">*</span> बाजेको नाम</label>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control myText" name="groom_grandfather_name"
                                    value="{{ old('groom_grandfather_name', $marriage->groom_grandfather_name) }}" />
                            </div>
                            @error('groom_grandfather_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for=""><span class="text-danger">*</span> बाबुको नाम </label>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control myText" name="groom_father_name"
                                    value="{{ old('groom_father_name', $marriage->groom_father_name) }}" />
                            </div>
                            @error('groom_father_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label><span class="text-danger">*</span> पूर्व वैवाहिक स्थिति </label>
                            <select class="custom-select" name="groom_pre_marrige_status">
                                
                                <div>
                                    <option value="अविवाहित"
                                        {{ $marriage->groom_pre_marrige_status == 'अविवाहित' || old('groom_pre_marrige_status') == 'अविवाहित' ? 'selected' : '' }}>
                                        अविवाहित</option>
                                    <option value="विवाहित"
                                        {{ $marriage->groom_pre_marrige_status == 'विवाहित' || old('groom_pre_marrige_status') == 'विवाहित' ? 'selected' : '' }}>
                                        विवाहित</option>
                                </div>
                            </select>
                            @error('groom_pre_marrige_status')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <hr>
                <h4 class="font-weight-bold mt-3">साक्षी विवरण </h4>
                {{-- <div class="row"> --}}
                <x-sachi-form :death="$marriage" />
                <div class="card mt-3 p-3">
                    <div class="row">
                        <div class="form-group col-xl-12">
                            <label for="">कैफियत</label>
                            <div class="input-group mb-2">
                                <textarea id="summernote" name="description">{{ old('description', $marriage->description) }}</textarea>
                            </div>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="p-3 text-right" style="background-color:#f9fafb">
                        <button class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light"
                            type="submit"
                            style="background-color:#374f67; color: #fff;">{{ $marriage->id ? 'Update' : 'Save' }}</button>
                    </div>

                </div>

                {{-- </div>
                        </div> --}}

            </div>

        </div>
    </div>
    </div>
@endsection
