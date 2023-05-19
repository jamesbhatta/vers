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
                                            {{ $migrationCertificate->type == 'बसाई सरी आएको' ? 'selected' : '' }}>बसाई सरी
                                            आएको
                                        </option>
                                        <option class="m-5" value="बसाई सरी जाने"
                                            {{ $migrationCertificate->type == 'बसाई सरी जाने' ? 'selected' : '' }}>बसाई सरी
                                            जाने
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

                        <h4 class="font-weight-bold mt-3">साक्षी विवरण</h4>
                        <x-sachi-form :death="$migrationCertificate" :relation="'बसाई सराई गर्ने '" />
                        <div class="p-3 text-right mt-2">
                            <button class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light"
                                type="submit"
                                style="background-color:#374f67; color: #fff;">{{ $migrationCertificate->id ? 'Update' : 'Save' }}</button>
                        </div>
                    </div>
                </form>
                @if ($migrationCertificate->id)
                    <div class="box mt-2 p-5">
                        <form
                            action="{{ $family->id ? route('family.update', $family) : route('family.store', $migrationCertificate) }}"
                            method="POST">
                            @if ($family->id)
                                @method('put')
                            @endif
                            @csrf
                            <div class="pb-2 d-flex justify-content-between">
                                <h3 class="text-center">बसाई सर्ने परिवारका सदस्यहरुको नाम/बसाई सराई व्यक्तिको </h3>
                            </div>
                            <div class="wrapper mt-1">
                                <div class="row" id="survey_options">
                                    <div class="form-group col-md-4">
                                        <label><span class="text-danger">*</span>&nbsp;नाम,थर </label>
                                        <input type="text" class="form-control myText" name="name"
                                            value="{{ old('name', $family->name) }}" />
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for=""><span class="text-danger">*</span>&nbsp;जन्मस्थान</label>
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control myText" name="birthplace"
                                                value="{{ old('birthplace', $family->birthplace) }}" />
                                        </div>
                                        @error('birthplace')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for=""><span class="text-danger">*</span>&nbsp;लिङ्ग </label>
                                        <select class="custom-select" name="gender">
                                            <option selected disabled class="m-5">छान्न्नुहोस्। </option>
                                            <div>
                                                <option value="महिला"
                                                    {{ $family->gender == 'महिला' || old('gender') == 'महिला' ? 'selected' : '' }}>
                                                    महिला</option>
                                                <option value="पुरुष"
                                                    {{ $family->gender == 'पुरुष' || old('gender') == 'पुरुष' ? 'selected' : '' }}>
                                                    पुरुष</option>
                                                <option value="अन्य"
                                                    {{ $family->gender == 'अन्य' || old('gender') == 'अन्य' ? 'selected' : '' }}>
                                                    अन्य </option>
                                            </div>
                                        </select>
                                        @error('gender')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">नागरिकता न.</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="citizenship"
                                                value="{{ old('citizenship', $family->citizenship) }}"
                                                class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">स्थायी ठेगाना</label>
                                        <input class="form-control myText" name="permanent_address"
                                            placeholder="स्थायी ठेगाना"
                                            value="{{ old('permanent_address', $family->permanent_address) }}" />
                                        @error('permanent_address')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">अस्थायी ठेगाना</label>
                                        <input class="form-control myText" name="temporary_address"
                                            placeholder="अस्थायी ठेगाना"
                                            value="{{ old('temporary_address', $family->temporary_address) }}" />
                                        @error('temporary_address')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">&nbsp;शैक्षिक योग्यता</label>
                                        <div class="input-group mb-2">
                                            <select class="custom-select" name="education">
                                                <option selected class="m-5" value="">छान्न्नुहोस्।
                                                </option>
                                                <div>
                                                    <option value="निरक्षर"
                                                        {{ $family->education == 'निरक्षर' || old('education') == 'निरक्षर' ? 'selected' : '' }}>
                                                        निरक्षर
                                                    </option>
                                                    <option value="साधरण"
                                                        {{ $family->education == 'साधरण' || old('education') == 'साधरण' ? 'selected' : '' }}>
                                                        साधरण
                                                    </option>
                                                    <option value="एस.एल.सी"
                                                        {{ $family->education == 'एस.एल.सी' || old('education') == 'एस.एल.सी' ? 'selected' : '' }}>
                                                        एस.एल.सी
                                                    </option>
                                                    <option value="प्रमाणपत्र"
                                                        {{ $family->education == 'प्रमाणपत्र' || old('education') == 'प्रमाणपत्र' ? 'selected' : '' }}>
                                                        प्रमाणपत्र
                                                    </option>
                                                    <option value="स्नातक"
                                                        {{ $family->education == 'स्नातक' || old('education') == 'स्नातक' ? 'selected' : '' }}>
                                                        स्नातक
                                                    </option>
                                                    <option value="स्नातकोत्तर"
                                                        {{ $family->education == 'स्नातकोत्तर' || old('education') == 'स्नातकोत्तर' ? 'selected' : '' }}>
                                                        स्नातकोत्तर</option>
                                                    <option value="विद्या वारिधि"
                                                        {{ $family->education == 'विद्या वारिधि' || old('education') == 'विद्या वारिधि' ? 'selected' : '' }}>
                                                        विद्या वारिधि
                                                    </option>
                                                </div>
                                            </select>
                                        </div>
                                        @error('education')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>&nbsp;धर्म</label>
                                        <select class="custom-select" name="religion">
                                            <option selected disabled class="m-5" value="">छान्न्नुहोस्।
                                            </option>
                                            <div>
                                                <option
                                                    {{ $family->religion == 'हिन्दु' || old('religion') == 'हिन्दु' ? 'selected' : '' }}
                                                    value="हिन्दु">हिन्दु</option>
                                                <option
                                                    {{ $family->religion == 'बौद्ध' || old('religion') == 'बौद्ध' ? 'selected' : '' }}
                                                    value="बौद्ध">बौद्ध </option>
                                                <option
                                                    {{ $family->religion == 'क्रिश्चियन' || old('religion') == 'क्रिश्चियन' ? 'selected' : '' }}
                                                    value="मुस्लिम">क्रिश्चियन </option>
                                                <option
                                                    {{ $family->religion == 'मुस्लिम' || old('religion') == 'मुस्लिम' ? 'selected' : '' }}
                                                    value="मुस्लिम">मुस्लिम </option>
                                                <option
                                                    {{ $family->religion == 'अन्य' || old('religion') == 'अन्य' ? 'selected' : '' }}
                                                    value="अन्य">अन्य</option>
                                            </div>
                                        </select>
                                        @error('religion')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label>&nbsp;उमेर </label>
                                        <div class="input-group mb-2">
                                            <input type="number" name="age" class="form-control myText"
                                                value="{{ old('age', $family->age) }}" />
                                        </div>
                                        @error('age')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label for="">&nbsp;मातृभाषा </label>
                                        <select class="custom-select" name="mothertongue">
                                            <option selected disabled class="m-5">छान्न्नुहोस्। </option>
                                            <div>
                                                <option value="थारु"
                                                    {{ $family->mothertongue == 'थारु' || old('mothertongue') == 'थारु' ? 'selected' : '' }}>
                                                    थारु </option>
                                                <option value="नेपाली"
                                                    {{ $family->mothertongue == 'नेपाली' || old('mothertongue') == 'नेपाली' ? 'selected' : '' }}>
                                                    नेपाली </option>
                                                <option value="अन्य"
                                                    {{ $family->mothertongue == 'अन्य' || old('mothertongue') == 'अन्य' ? 'selected' : '' }}>
                                                    अन्य </option>
                                            </div>
                                        </select>
                                        @error('mothertongue')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-group col-lg-4">
                                    <label>कैफियत </label>
                                    <div class="input-group mb-2">
                                        <input type="text" name="description" class="form-control myText" />
                                    </div>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    </div> --}}
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input type="submit" class=" btn btn-dark bg-dark text-right"
                                        value="{{ $family->id ? 'Update' : 'Submit' }}" />
                                </div>

                        </form>
                    </div>

                    <div class="box mt-3 ">
                        <div class="box__body">
                            <table class="table table-responsive-sm m-3" id="myTable">
                                <thead class="thead-light">
                                    <tr class="text-uppercase">
                                        <th>#</th>
                                        <th>नाम,थर</th>
                                        <th> जन्मस्थान </th>
                                        <th>नागरिकता न.</th>
                                        <th> ठेगाना </th>
                                        <th>उमेर</th>
                                        <th>शैक्षिक योग्यता</th>
                                        <th class="text-right">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($families as $family)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $family->name }}</td>
                                            <td>{{ $family->birthplace }}</td>
                                            <td>{{ $family->citizenship }}</td>
                                            <td> {{ $family->address }}</td>
                                            <td>{{ $family->age }}</td>
                                            <td>{{ $family->education }}</td>
                                            <td class="text-nowrap text-right">
                                                <a href="{{ route('family.edit', [$family, $family->migration_certificate_id]) }}"
                                                    class="action-btn text-primary"><i class="fa fa-edit"></i></a>
                                                <span class="mx-2"></span>
                                                <form action="{{ route('family.delete', $family) }}" method="post"
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
                @endif
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
            var selectElement = document.getElementById("mySelect");
            var selectedOption = selectElement.options[selectElement.selectedIndex].text;
            document.getElementById("selectedValue").textContent = selectedOption;
 

            function showSelectedValue() {
                var selectElement = document.getElementById("mySelect");
                var selectedOption = selectElement.options[selectElement.selectedIndex].text;
                document.getElementById("selectedValue").textContent = selectedOption;
            }
        </script>
    @endpush
@endsection
