@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="p-3">
            <div class="container-fluid">
                <nav aria-label="breadcrumb" class="d-flex justify-content-between  rounded">
                    <div class="my-breadcrumb">
                        <a class="first-breadcrumb" href="{{ route('birth.index') }}">जन्म दर्ता</a>
                        <a class="sub-breadcrumb" href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        <a class="final-item ml-3" href="">@lang('navigation.birth-notice-form')</a>
                    </div>

                </nav>
                <label class="font-weight-bold pb-2 border-bottom col-12" style="font-size: 20px;padding:0"></label>
                @if (session()->has('success'))
                    <div class="mt-3 alert alert-success" id="my_alert" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif

                <form action="{{ $birth->id ? route('birth.update', $birth) : route('birth.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @isset($birth->id)
                        @method('PUT')
                    @endisset
                    <div class="box mt-2 px-3 pt-3">

                        <h4 class="font-weight-bold pb-3">ठेगानाको विवरण</h4>

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
                            <livewire:municipality :death="$birth" :book="$book_id" />
                        </div>
                        <h4 class="font-weight-bold py-3">नवजात शिशु दर्ता विवरण </h4>
                        <div class="card p-3">
                            <div class="row">
                                <div class=" col-md-4 mb-3">
                                    <label><span class="text-danger">*</span> दर्ता न.</label>
                                    <input type="text" class="form-control" name="reg_number"
                                        value="{{ old('reg_number', $birth->reg_number) }}">
                                    @error('reg_number')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4 mb-3">
                                    <label><span class="text-danger">*</span> दर्ता मिति</label>
                                    <input type="text" name="entry_date" id="darta_miti" class="form-control"
                                        value="{{ old('entry_date', $birth->entry_date) }}" />
                                    @error('entry_date')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4 class="font-weight-bold py-3">नवजात शिशुको व्यक्तिगत विवरण </h4>
                        <div class="card p-3">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label><span class="text-danger">*</span> नाम,थर </label>
                                    <input type="text" name="name" value="{{ old('name', $birth->name) }}"
                                        class="form-control myText" />
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label for=""><span class="text-danger">*</span> जन्म मिति</label>
                                    <div class="input-group mb-2">
                                        <input type="text" id="dob" name="dob" class="form-control"
                                            value="{{ old('dob', $birth->dob) }}" />
                                    </div>
                                    @error('dob')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>


                                <div class="form-group col-md-4">
                                    <label for=""><span class="text-danger">*</span> लिङ्ग</label>
                                    <div class="input-group mb-2">
                                        <select class="custom-select" name="gender">
                                            <option class="m-5" selected disabled value="">छान्न्नुहोस्। </option>
                                            <div>
                                                <option value="पुरुष"
                                                    {{ $birth->gender == 'पुरुष' || old('gender') == 'पुरुष' ? 'selected' : '' }}>
                                                    पुरुष</option>
                                                <option value="महिला"
                                                    {{ $birth->gender == 'महिला' || old('gender') == 'महिला' ? 'selected' : '' }}>
                                                    महिला</option>
                                                <option value="अन्य"
                                                    {{ $birth->gender == 'अन्य' || old('gender') == 'अन्य' ? 'selected' : '' }}>
                                                    अन्य</option>
                                            </div>
                                        </select>
                                    </div>
                                    @error('gender')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label for=""><span class="text-danger">*</span> जन्म स्थान</label>
                                    <select class="custom-select" name="birth_place">
                                        <option selected disabled class="m-5">छान्न्नुहोस्। </option>
                                        <div>
                                            <option
                                                {{ $birth->birth_place == 'घर' || old('birth_place') == 'घर' ? 'selected' : '' }}
                                                value="घर">घर</option>
                                            <option
                                                {{ $birth->birth_place == 'अस्पताल' || old('birth_place') == 'अस्पताल' ? 'selected' : '' }}
                                                value="अस्पताल">अस्पताल</option>
                                            <option
                                                {{ $birth->birth_place == 'प्रसुति गृह' || old('birth_place') == 'प्रसुति गृह' ? 'selected' : '' }}
                                                value="प्रसुति गृह">प्रसुति गृह</option>
                                        </div>
                                    </select>
                                    @error('birth_place')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label for=""><span class="text-danger">*</span> जन्मेको किसिम</label>
                                    <select class="custom-select" name="birth_type">
                                        <div>
                                            <option
                                                {{ $birth->birth_type == 'सिङ्गो' || old('birth_type') == 'सिङ्गो' ? 'selected' : '' }}
                                                value="सिङ्गो">सिङ्गो</option>
                                            <option
                                                {{ $birth->birth_type == 'जुम्ल्याहा' || old('birth_type') == 'जुम्ल्याहा' ? 'selected' : '' }}
                                                value="जुम्ल्याहा">जुम्ल्याहा </option>
                                        </div>
                                    </select>
                                    @error('birth_type')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label><span class="text-danger">*</span> कुनै पनि शारीरिक विकृति </label>
                                    <div class="input-group mb-2">
                                        <select name="physical_disable" class="custom-select">
                                            <option
                                                {{ $birth->physical_disable == 'छैन' || old('physical_disable') == 'छैन' ? 'selected' : '' }}
                                                value="छैन">छैन</option>
                                            <option
                                                {{ $birth->physical_disable == 'छ' || old('physical_disable') == 'छ' ? 'selected' : '' }}
                                                value="छ">छ</option>
                                        </select>
                                    </div>
                                    @error('physical_disable')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for=""><span class="text-danger">*</span> हजुरबुबाको नाम</label>
                                    <div class="input-group mb-2">

                                        <input type="text" name="grandfather_name"
                                            value="{{ old('grandfather_name', $birth->grandfather_name) }}"
                                            class="form-control myText" id="grandfather_name" />
                                    </div>
                                    @error('grandfather_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <hr>

                        <h4 class="font-weight-bold mt-3 pb-3">नवजात शिशुको बाबुको विवरण </h4>

                        <div class="card p-3">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label><span class="text-danger">*</span> नाम,थर </label>
                                    <input type="text" class="form-control myText" name="father_name"
                                        value="{{ old('father_name', $birth->father_name) }}" id="father_name" />
                                    @error('father_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for=""><span class="text-danger">*</span> स्थायी ठेगाना </label>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control myText" name="father_parmanent_address"
                                            id="father_parmanent_address"
                                            value="{{ old('father_parmanent_address', $birth->father_parmanent_address) }}" />
                                    </div>
                                    @error('father_parmanent_address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">अस्थायी ठेगाना </label>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control myText" name="father_temporary_address"
                                            id="father_temporary_address"
                                            value="{{ old('father_temporary_address', $birth->father_temporary_address) }}" />
                                    </div>
                                    @error('father_temporary_address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for=""> शिशु जन्मिदाको उमेर </label>
                                    <div class="input-group mb-2">
                                        <input type="number" class="form-control" name="father_age_while_baby_born"
                                            value="{{ old('father_age_while_baby_born', $birth->father_age_while_baby_born) }}" />
                                    </div>
                                    @error('father_age_while_baby_born')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <x-country-form :label="'जन्म भएको देश'" :name="'father_country_where_baby_born'" :id="'father_country_where_baby_born'"
                                        :usercountry="$birth" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label>नागरिकता(ना.प्र.नं.) </label>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" name="father_citizenship_number"
                                            value="{{ old('father_citizenship_number', $birth->father_citizenship_number) }}" />
                                    </div>
                                    @error('father_citizenship_number')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label> शिक्षा</label>
                                    <select class="custom-select" name="father_education" id="father_education">
                                        <option selected disabled class="m-5" value="">छान्न्नुहोस्।
                                        </option>
                                        <div>
                                            <option value="निरक्षर"
                                                {{ $birth->father_education == 'निरक्षर' || old('father_education') == 'निरक्षर' ? 'selected' : '' }}>
                                                निरक्षर
                                            </option>
                                            <option value="साधरण"
                                                {{ $birth->father_education == 'साधरण' || old('father_education') == 'साधरण' ? 'selected' : '' }}>
                                                साधरण
                                            </option>
                                            <option value="एस.एल.सी"
                                                {{ $birth->father_education == 'एस.एल.सी' || old('father_education') == 'एस.एल.सी' ? 'selected' : '' }}>
                                                एस.एल.सी
                                            </option>
                                            <option value="प्रमाणपत्र"
                                                {{ $birth->father_education == 'प्रमाणपत्र' || old('father_education') == 'प्रमाणपत्र' ? 'selected' : '' }}>
                                                प्रमाणपत्र
                                            </option>
                                            <option value="स्नातक"
                                                {{ $birth->father_education == 'स्नातक' || old('father_education') == 'स्नातक' ? 'selected' : '' }}>
                                                स्नातक
                                            </option>
                                            <option value="स्नातकोत्तर"
                                                {{ $birth->father_education == 'स्नातकोत्तर' || old('father_education') == 'स्नातकोत्तर' ? 'selected' : '' }}>
                                                स्नातकोत्तर</option>
                                            <option value="विद्या वारिधि"
                                                {{ $birth->father_education == 'विद्या वारिधि' || old('father_education') == 'विद्या वारिधि' ? 'selected' : '' }}>
                                                विद्या वारिधि
                                            </option>
                                        </div>
                                    </select>

                                    @error('father_education')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label for=""><span class="text-danger">*</span> धर्म</label>
                                    <select class="custom-select" name="father_religion" id="father_religion">
                                        {{-- <option class="m-5" value="">छान्न्नुहोस्।
                                        </option> --}}
                                        <div>
                                            <option
                                                {{ $birth->father_religion == 'हिन्दु' || old('father_religion') == 'हिन्दु' ? 'selected' : '' }}
                                                value="हिन्दु">हिन्दु</option>
                                            <option
                                                {{ $birth->father_religion == 'बौद्ध' || old('father_religion') == 'बौद्ध' ? 'selected' : '' }}
                                                value="बौद्ध">बौद्ध </option>
                                            <option
                                                {{ $birth->father_religion == 'क्रिश्चियन' || old('father_religion') == 'क्रिश्चियन' ? 'selected' : '' }}
                                                value="क्रिश्चियन">क्रिश्चियन </option>
                                            <option
                                                {{ $birth->father_religion == 'मुस्लिम' || old('father_religion') == 'मुस्लिम' ? 'selected' : '' }}
                                                value="मुस्लिम">मुस्लिम </option>
                                            <option
                                                {{ $birth->father_religion == 'अन्य' || old('father_religion') == 'अन्य' ? 'selected' : '' }}
                                                value="अन्य">अन्य</option>
                                        </div>
                                    </select>
                                    @error('father_religion')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4 ">
                                    <x-mother-tongue :name="'father_mother_toung'" :id="'father_mother_toung'" :userdata="$birth" />
                                </div>


                                <div class="form-group col-md-4">
                                    <label for=""><span class="text-danger">*</span> पेशा</label>
                                    <select class="custom-select" name="father_occupation" id="father_occupation">
                                        {{-- <option selected disabled class="m-5" value="">छान्न्नुहोस्।
                                        </option> --}}
                                        <option
                                            {{ $birth->father_occupation == 'कृषि' || old('father_occupation') == 'कृषि' ? 'selected' : '' }}
                                            value="कृषि">कृषि </option>
                                        <option
                                            {{ $birth->father_occupation == 'सरकारी सेवा' || old('father_occupation') == 'सरकारी सेवा' ? 'selected' : '' }}
                                            value="सरकारी सेवा">सरकारी सेवा</option>
                                        <option
                                            {{ $birth->father_occupation == 'गैर सरकारी सेवा' || old('father_occupation') == 'गैर सरकारी सेवा' ? 'selected' : '' }}
                                            value="गैर सरकारी सेवा">गैर सरकारी सेवा </option>

                                        <option
                                            {{ $birth->father_occupation == 'व्यवसाय' || old('father_occupation') == 'व्यवसाय' ? 'selected' : '' }}
                                            value="व्यवसाय">व्यवसाय </option>
                                        <option
                                            {{ $birth->father_occupation == 'अन्य' || old('father_occupation') == 'अन्य' ? 'selected' : '' }}
                                            value="अन्य">अन्य</option>

                                    </select>
                                    @error('father_occupation')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label> हाल सम्म जन्मेको सन्तान संख्या </label>
                                    <div class="input-group mb-2">
                                        <input type="number" class="form-control" name="father_baby_number"
                                            id="father_baby_number"
                                            value="{{ old('father_baby_number', $birth->father_baby_number) }}" />
                                    </div>
                                    @error('father_baby_number')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for=""> यो शिशु समेत गरी जीवित सन्तान
                                        संख्या</label>
                                    <div class="input-group mb-2">
                                        <input type="number" class="form-control" name="father_alive_baby_number"
                                            id="father_alive_baby_number"
                                            value="{{ old('father_alive_baby_number', $birth->father_alive_baby_number) }}" />
                                    </div>
                                    @error('father_alive_baby_number')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label> शिशु जन्मदा मदत गर्ने व्यक्ति</label>
                                    <div class="input-group mb-2">
                                        {{-- <input type="text" class="form-control" name="father_helper"
                                            value="{{ old('father_helper', $birth->father_helper) }}" /> --}}
                                        <select class="custom-select" name="father_helper" id="father_helper">
                                            <option selected disabled class="m-5" value="">छान्न्नुहोस्।
                                            </option>
                                            <div>
                                                <option
                                                    {{ $birth->father_helper == 'घरको मानिस' || old('father_helper') == 'घरको मानिस' ? 'selected' : '' }}
                                                    value="घरको मानिस">घरको मानिस </option>
                                                <option
                                                    {{ $birth->father_helper == 'सुडिनी' || old('father_helper') == 'सुडिनी' ? 'selected' : '' }}
                                                    value="सुडिनी">सुडिनी </option>
                                                <option
                                                    {{ $birth->father_helper == 'नर्स' || old('father_helper') == 'नर्स' ? 'selected' : '' }}
                                                    value="नर्स">नर्स </option>
                                                <option
                                                    {{ $birth->father_helper == 'डाक्टर' || old('father_helper') == 'डाक्टर' ? 'selected' : '' }}
                                                    value="डाक्टर">डाक्टर </option>
                                            </div>
                                        </select>
                                    </div>
                                    @error('father_helper')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label for=""><span class="text-danger">*</span> विवाहा भएको साल </label>
                                    <div class="input-group mb-2">

                                        <input type="text" class="form-control" id="marrage_year"
                                            name="father_marige_date"
                                            value="{{ old('father_marige_date', $birth->father_marige_date) }}" />
                                    </div>
                                    @error('father_marige_date')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- <button class="btn btn-primary ml-4">Submit</button> --}}


                        <hr>

                        <div class="d-flex align-items-center gap-3">
                            <h4 class="font-weight-bold mt-3 pb-3">नवजात शिशुको आमाको विवरण </h4>
                            <div class="form-check" id="chkbox">
                                <input class="form-check-input" type="checkbox" value="" id="chk-as-father">
                                <label class="form-check-label" for="chk-as-father">
                                    Same as father's record ?
                                </label>
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label><span class="text-danger">*</span> नाम,थर </label>
                                    <input type="text" class="form-control myText" name="mother_name"
                                        value="{{ old('mother_name', $birth->mother_name) }}" id="mother_name" />
                                    @error('mother_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for=""><span class="text-danger">*</span> स्थायी ठेगाना </label>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control myText" name="mother_parmanent_address"
                                            id="mother_parmanent_address"
                                            value="{{ old('mother_parmanent_address', $birth->mother_parmanent_address) }}" />
                                    </div>
                                    @error('mother_parmanent_address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="">अस्थायी ठेगाना </label>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control myText" name="mother_temporary_address"
                                            id="mother_temporary_address"
                                            value="{{ old('mother_temporary_address', $birth->mother_temporary_address) }}" />
                                    </div>
                                    @error('mother_temporary_address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for=""> शिशु जन्मिदाको उमेर </label>
                                    <div class="input-group mb-2">
                                        <input type="number" class="form-control" name="mother_age_while_baby_born"
                                            id="mother_age_while_baby_born"
                                            value="{{ old('mother_age_while_baby_born', $birth->mother_age_while_baby_born) }}" />
                                    </div>
                                    @error('mother_age_while_baby_born')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <x-country-form :label="'जन्म भएको देश'" :name="'mother_country_where_baby_born'" :id="'mother_country_where_baby_born'"
                                        :usercountry="$birth" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label>नागरिकता(ना.प्र.नं.) </label>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" name="mother_citizenship_number"
                                            value="{{ old('mother_citizenship_number', $birth->mother_citizenship_number) }}" />
                                    </div>
                                    @error('mother_citizenship_number')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label> शिक्षा</label>
                                    <select class="custom-select" name="mother_education" id="mother_education">
                                        <option selected class="m-5" value="">छान्न्नुहोस्।
                                        </option>
                                        <div>
                                            <option value="निरक्षर"
                                                {{ $birth->mother_education == 'निरक्षर' || old('mother_education') == 'निरक्षर' ? 'selected' : '' }}>
                                                निरक्षर
                                            </option>
                                            <option value="साधरण"
                                                {{ $birth->mother_education == 'साधरण' || old('mother_education') == 'साधरण' ? 'selected' : '' }}>
                                                साधरण
                                            </option>
                                            <option value="एस.एल.सी"
                                                {{ $birth->mother_education == 'एस.एल.सी' || old('mother_education') == 'एस.एल.सी' ? 'selected' : '' }}>
                                                एस.एल.सी
                                            </option>
                                            <option value="प्रमाणपत्र"
                                                {{ $birth->mother_education == 'प्रमाणपत्र' || old('mother_education') == 'प्रमाणपत्र' ? 'selected' : '' }}>
                                                प्रमाणपत्र
                                            </option>
                                            <option value="स्नातक"
                                                {{ $birth->mother_education == 'स्नातक' || old('mother_education') == 'स्नातक' ? 'selected' : '' }}>
                                                स्नातक
                                            </option>
                                            <option value="स्नातकोत्तर"
                                                {{ $birth->mother_education == 'स्नातकोत्तर' || old('mother_education') == 'स्नातकोत्तर' ? 'selected' : '' }}>
                                                स्नातकोत्तर</option>
                                            <option value="विद्या वारिधि"
                                                {{ $birth->mother_education == 'विद्या वारिधि' || old('mother_education') == 'विद्या वारिधि' ? 'selected' : '' }}>
                                                विद्या वारिधि
                                            </option>
                                        </div>
                                    </select>

                                    @error('mother_education')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label for=""><span class="text-danger">*</span> धर्म</label>
                                    <select class="custom-select" name="mother_religion" id="mother_religion">
                                        <option selected disabled class="m-5" value="">छान्न्नुहोस्।
                                        </option>
                                        <div>
                                            <option
                                                {{ $birth->mother_religion == 'हिन्दु' || old('mother_religion') == 'हिन्दु' ? 'selected' : '' }}
                                                value="हिन्दु">हिन्दु</option>
                                            <option
                                                {{ $birth->mother_religion == 'बौद्ध' || old('mother_religion') == 'बौद्ध' ? 'selected' : '' }}
                                                value="बौद्ध">बौद्ध </option>
                                            <option
                                                {{ $birth->mother_religion == 'क्रिश्चियन' || old('mother_religion') == 'क्रिश्चियन' ? 'selected' : '' }}
                                                value="क्रिश्चियन">क्रिश्चियन </option>
                                            <option
                                                {{ $birth->mother_religion == 'मुस्लिम' || old('mother_religion') == 'मुस्लिम' ? 'selected' : '' }}
                                                value="मुस्लिम">मुस्लिम </option>
                                            <option
                                                {{ $birth->mother_religion == 'अन्य' || old('mother_religion') == 'अन्य' ? 'selected' : '' }}
                                                value="अन्य">अन्य</option>
                                        </div>
                                    </select>
                                    @error('mother_religion')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <x-mother-tongue :name="'mother_mother_toung'" :id="'mother_mother_toung'" :userdata="$birth" />
                                </div>


                                <div class="form-group col-md-4">
                                    <label for=""><span class="text-danger">*</span> पेशा</label>
                                    <select class="custom-select" name="mother_occupation" id="mother_occupation">
                                        <option selected disabled class="m-5" value="">छान्न्नुहोस्।
                                        </option>
                                        <div>
                                            <option
                                                {{ $birth->mother_occupation == 'सरकारी सेवा' || old('mother_occupation') == 'सरकारी सेवा' ? 'selected' : '' }}
                                                value="सरकारी सेवा">सरकारी सेवा</option>
                                            <option
                                                {{ $birth->mother_occupation == 'गैर सरकारी सेवा' || old('mother_occupation') == 'गैर सरकारी सेवा' ? 'selected' : '' }}
                                                value="गैर सरकारी सेवा">गैर सरकारी सेवा </option>
                                            <option
                                                {{ $birth->mother_occupation == 'कृषि' || old('mother_occupation') == 'कृषि' ? 'selected' : '' }}
                                                value="कृषि">कृषि </option>
                                            <option
                                                {{ $birth->mother_occupation == 'व्यवसाय' || old('mother_occupation') == 'व्यवसाय' ? 'selected' : '' }}
                                                value="व्यवसाय">व्यवसाय </option>
                                            <option
                                                {{ $birth->mother_occupation == 'अन्य' || old('mother_occupation') == 'अन्य' ? 'selected' : '' }}
                                                value="अन्य">अन्य</option>
                                        </div>
                                    </select>
                                    @error('mother_occupation')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label> हाल सम्म जन्मेको सन्तान संख्या </label>
                                    <div class="input-group mb-2">
                                        <input type="number" class="form-control" name="mother_baby_number"
                                            id="mother_baby_number"
                                            value="{{ old('mother_baby_number', $birth->mother_baby_number) }}" />
                                    </div>
                                    @error('mother_baby_number')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for=""> यो शिशु समेत गरी जीवित सन्तान
                                        संख्या</label>
                                    <div class="input-group mb-2">
                                        <input type="number" class="form-control" name="mother_alive_baby_number"
                                            id="mother_alive_baby_number"
                                            value="{{ old('mother_alive_baby_number', $birth->mother_alive_baby_number) }}" />
                                    </div>
                                    @error('mother_alive_baby_number')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label><span class="text-danger">*</span> शिशु जन्मदा मदत गर्ने व्यक्ति</label>
                                    <div class="input-group mb-2">
                                        {{-- <input type="text" class="form-control" name="mother_helper"
                                            value="{{ old('mother_helper', $birth->mother_helper) }}" /> --}}

                                        <select class="custom-select" name="mother_helper" id="mother_helper">
                                            <option selected disabled class="m-5" value="">छान्न्नुहोस्।
                                            </option>
                                            <div>
                                                <option
                                                    {{ $birth->mother_helper == 'घरको मानिस' || old('mother_helper') == 'घरको मानिस' ? 'selected' : '' }}
                                                    value="घरको मानिस">घरको मानिस </option>
                                                <option
                                                    {{ $birth->mother_helper == 'सुडिनी' || old('mother_helper') == 'सुडिनी' ? 'selected' : '' }}
                                                    value="सुडिनी">सुडिनी </option>
                                                <option
                                                    {{ $birth->mother_helper == 'नर्स' || old('mother_helper') == 'नर्स' ? 'selected' : '' }}
                                                    value="नर्स">नर्स </option>
                                                <option
                                                    {{ $birth->mother_helper == 'डाक्टर' || old('mother_helper') == 'डाक्टर' ? 'selected' : '' }}
                                                    value="डाक्टर">डाक्टर </option>
                                            </div>
                                        </select>
                                    </div>
                                    @error('mother_helper')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for=""><span class="text-danger">*</span> विवाहा भएको साल </label>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" id="marrage_year1"
                                            name="mother_marige_date" id="mother_marige_date"
                                            value="{{ old('mother_marige_date', $birth->mother_marige_date) }}" />
                                    </div>
                                    @error('mother_marige_date')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <hr>

                        <h4 class="font-weight-bold mt-3 ">नवजात शिशुको साक्षी विवरण </h4>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="">नवजात शिशुको संगको नाता</label>
                                <select id="relationship" name="relationship" class="custom-select myText"
                                    value="{{ old('relationship', $birth->relationship) }}" onchange="withnessSelect()">
                                    <option value="" disabled selected>छान्नुहोस्</option>
                                    @foreach ($withnessRelationships as $withnessRelationship)
                                        <option value="{{ $withnessRelationship->relationship }}"
                                            {{ $birth->relationship == $withnessRelationship->relationship || old('relationship') == $withnessRelationship->relationship ? 'selected' : '' }}>
                                            {{ $withnessRelationship->relationship }}</option>
                                    @endforeach
                                </select>

                                @error('relationship')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label><span class="text-danger ">*</span> साक्षीको नाम </label>

                                <input type="text" name="relative_name" class="form-control myText"
                                    value="{{ old('relative_name', $birth->relative_name) }}" id="relative_name">
                                @error('relative_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for=""><span class="text-danger">*</span> साक्षीको ठेगाना</label>
                                <div class="input-group mb-2">

                                    <input type="text" name="relative_address" class="form-control myText"
                                        value="{{ old('relative_address', $birth->relative_address) }}"
                                        id="relative_address" />
                                </div>
                                @error('relative_address')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="d-flex align-items-center col-12">
                                <div class="form-group col-xl-6">
                                    <label for="">फाइल (max size: 2 MB | jpeg, png, jpg, pdf)</label>
                                    <div class="input-group mb-2">

                                        <input type="file" name=file class="file-brows" id="fileInput" />
                                    </div>
                                    @error('file')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-xl-6">
                                    @if ($birth->file)
                                        <a href="{{ asset('storage/' . $birth->file) }}" target="_blank">
                                            <div><i class="fas fa-file-image" style="font-size: 100px;"></i></div>
                                            <div>View File</div>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- <x-sachi-form :death="$birth" :relation="'नवजात शिशु'" /> --}}
                        <div id="selectedValue"></div>
                        <div class="card mt-3 p-3">
                            <div class="row">
                                <div class="form-group col-xl-12">
                                    <label for="">कैफियत</label>
                                    <div class="input-group mb-2">

                                        <textarea id="summernote" name="description">{{ old('description', $birth->description) }}</textarea>
                                    </div>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="p-3 text-right" style="background-color:#f9fafb">
                                <button class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light"
                                    type="submit"
                                    style="background-color:#374f67; color: #fff;">{{ $birth->id ? 'Update' : 'Save' }}</button>
                            </div>
                        </div>
                    </div>


            </div>
            </form>
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

    @push('script')
        <script>
            $(document).ready(function() {
                $('input[id="chk-as-father"]').click(function() {
                    // alert("fsdfs");
                    if ($(this).prop("checked") == true) {
                        $("#mother_parmanent_address").val($("#father_parmanent_address").val());
                        $("#mother_temporary_address").val($("#father_temporary_address").val());
                        $("#mother_occupation").val($("#father_occupation").val());
                        $("#mother_baby_number").val($("#father_baby_number").val());
                        $("#mother_alive_baby_number").val($("#father_alive_baby_number").val());
                        $("#marrage_year1").val($("#marrage_year").val());
                        $("#mother_religion").val($("#father_religion").val()).change();
                        $("#mother_education").val($("#father_education").val()).change();
                        $("#mother_helper").val($("#father_helper").val()).change();
                        $("#mother_mother_toung").val($("#father_mother_toung").val()).change();
                        $("#mother_country_where_baby_born").val($("#father_country_where_baby_born").val())
                            .change();
                    } else {
                        $("#mother_parmanent_address").val("");
                        $("#mother_temporary_address").val("");
                        $("#mother_occupation").val("");
                        $("#mother_baby_number").val("");
                        $("#mother_alive_baby_number").val("");
                        $("#marrage_year1").val("");
                        $("#mother_religion").val("").change();
                        $("#mother_education").val("").change();
                        $("#mother_helper").val("").change();
                        $("#mother_mother_toung").val("").change();
                        $("#mother_country_where_baby_born").val("").change();
                    }
                });
            });

            $(document).ready(function() {
                function relationship() {
                    var selectElement = document.getElementById("mySelect");
                    var selectedOption = selectElement.options[selectElement.selectedIndex].text;
                    document.getElementById("selectedValue").textContent = selectedOption;
                }
            });
        </script>
    @endpush
    @push('script')
        <script>
            function withnessSelect() {
                var relationship = document.getElementById("relationship").value;
                var father_name = document.getElementById("father_name").value;
                var mother_name = document.getElementById("mother_name").value;
                var mother_parmanent_address = document.getElementById("mother_parmanent_address").value;

                var father_parmanent_address = document.getElementById("father_parmanent_address").value;

                var grandfather_name = document.getElementById("grandfather_name").value;


                var relative_name = document.getElementById("relative_name");
                var relative_address = document.getElementById("relative_address");

                console.log(father_name);

                console.log(father_name.value);
                if (relationship === "बुवा") {
                    console.log(father_name);
                    document.getElementById("relative_name").value = father_name;
                    document.getElementById("relative_address").value = father_parmanent_address;

                } else if (relationship === "आमा") {
                    relative_name.value = mother_name;
                    relative_address.value = mother_parmanent_address;
                } else if (relationship === "हजुर बुबा") {
                    relative_name.value = grandfather_name;
                    relative_address.value = father_parmanent_address;
                } else {
                    relative_name.value = "";
                    relative_address.value = "";
                }
            }
        </script>
    @endpush
@endsection
