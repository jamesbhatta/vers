@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="p-3">
            <div class="container-fluid">
                <nav aria-label="breadcrumb" class="d-flex justify-content-between  rounded">

                    <div class="my-breadcrumb">
                        <a class="first-breadcrumb" href="{{ route('marriage.index') }}">विवाह दर्ता</a>
                        <a class="sub-breadcrumb" href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        <a class="final-item ml-3">@lang('navigation.marriage-notice-form')</a>
                    </div>
                    <div>
                        <a href="{{ route('marriage.create') }}" class="btn btn-success"><i
                                class="fas fa-plus-circle mr-2"></i>@lang('navigation.add_new')</a>
                    </div>
                </nav>
                <label class="font-weight-bold pb-2 border-bottom col-12" style="font-size: 20px;padding:0"></label>

                <div class="card p-5 mt-3">
                    <h3 class=" h5 text-center pb-5 font-weight-bold">विवाहको सुचना फारम</h3>
                    <div class="pb-5 row mt-5">
                        <div class="col-xl-12">
                            <table class="my_table col-12">

                                <tr>
                                    <td>प्रदेश</td>
                                    <td>{{ $marriage->province }}</td>
                                    <td rowspan="3"></td>
                                    <td>स्थानीय पञ्जिकाधिकारी</td>
                                    <td class="myText">{{ $marriage->administrator }}</td>
                                </tr>
                                <tr>
                                    <td>जिल्ला</td>
                                    <td>{{ $marriage->district }}</td>
                                    <td>दर्ता न.</td>
                                    <td>{{ $marriage->reg_number }}</td>
                                </tr>
                                <tr>
                                    <td>ग.पा. / न.पा</td>
                                    <td>{{ $marriage->municipality }}</td>
                                    <td>दर्ता मिति</td>
                                    <td>{{ $marriage->entry_date }}</td>
                                </tr>
                            </table>

                        </div>
                        <div class="col-xl-12 mt-3">
                            <h5 class="h5 font-weight-bold text-center p-3">दुलाहा-दुलहीको विवरण</h5>
                            <table class="my_table col-12">
                                <tr>
                                    <th>विवरण</th>
                                    <th>दुलाहाको विवरण</th>
                                    <th>दुलहीको विवरण</th>
                                </tr>
                                <tr>
                                    <td>नाम,थर</td>
                                    <td class="myText">{{ $marriage->bride_name }}</td>
                                    <td class="myText">{{ $marriage->groom_name }}</td>
                                </tr>
                                <tr>
                                    <td>जन्म मिति</td>
                                    <td>{{ $marriage->bride_dob }}</td>
                                    <td>{{ $marriage->groom_dob }}</td>
                                </tr>
                                <tr>
                                    <td>जन्म भएको देश</td>
                                    <td class="myText">{{ $marriage->bride_birth_country }}</td>
                                    <td class="myText">{{ $marriage->groom_birth_country }}</td>
                                </tr>
                                <tr>
                                    <td>नागरिकता (ना.प्र.नं)</td>
                                    <td>{{ $marriage->bride_citizenship_number }}</td>
                                    <td>{{ $marriage->groom_citizenship_number }}</td>
                                </tr>
                                <tr>
                                    <td>नागरिकता जारी मिति</td>
                                    <td>{{ $marriage->bride_citizenship_date}}</td>
                                    <td>{{ $marriage->groom_citizenship_date}}</td>
                                </tr>
                                <tr>
                                    <td>नागरिकता लिएको जिल्ला</td>
                                    <td class="myText">{{ $marriage->bride_citizenship_district}}</td>
                                    <td class="myText">{{ $marriage->groom_citizenship_district}}</td>
                                </tr>
                                <tr>
                                    <td>स्थाई ठेगाना</td>
                                    <td class="myText">{{ $marriage->bride_temp_address}}</td>
                                    <td class="myText">{{ $marriage->groom_temp_address}}</td>
                                </tr>
                                <tr>
                                    <td>शिक्षा</td>
                                    <td>{{ $marriage->bride_education}}</td>
                                    <td>{{ $marriage->groom_education}}</td>
                                </tr>
                                <tr>
                                    <td>धर्म</td>
                                    <td>{{ $marriage->bride_religion}}</td>
                                    <td>{{ $marriage->groom_religion}}</td>
                                </tr>
                                <tr>
                                    <td>मातृभाषा</td>
                                    <td class="myText">{{ $marriage->bride_mother_tongue}}</td>
                                    <td class="myText">{{ $marriage->groom_mother_tongue}}</td>
                                </tr>
                                <tr>
                                    <td>बाजेको नाम</td>
                                    <td class="myText">{{ $marriage->bride_grandfather_name}}</td>
                                    <td class="myText">{{ $marriage->groom_grandfather_name}}</td>
                                </tr>
                                <tr>
                                    <td>बाबुको नाम</td>
                                    <td class="myText">{{ $marriage->bride_father_name}}</td>
                                    <td class="myText">{{ $marriage->groom_father_name}}</td>
                                </tr>
                                <tr>
                                    <td>पूर्व वैवाहिक स्थिति</td>
                                    <td>{{ $marriage->bride_pre_marrige_status}}</td>
                                    <td>{{ $marriage->groom_pre_marrige_status}}</td>
                                </tr>

                            </table>
                        </div>
                        <div class="col-xl-12 mt-3">
                            <h5 class="h5 font-weight-bold text-center p-3">साची विवरण</h5>

                            <table class="my_table col-12">
                                <tr>
                                    <td>नाम</td>
                                    <td class="myText">{{ $marriage->relative_name }}</td>
                                </tr>
                                <tr>
                                    <td>नवजात शिशुसंगको सम्बन्ध</td>
                                    <td class="myText">{{ $marriage->relationship }}</td>
                                </tr>
                                <tr>
                                    <td>ठेगाना</td>
                                    <td class="myText">{{ $marriage->relative_address }}</td>
                                </tr>
                                <tr>
                                    <td>मिति</td>
                                    <td>{{ $marriage->date }}</td>
                                </tr>
                            </table>
                        </div>

                    </div>

                    <div class="mt-4">
                        <h3 class=" h5 text-center pb-5 font-weight-bold">सम्बन्धित फाइल</h3>
                        <img src="{{ asset('storage') }}{{ '/' }}{{ $marriage->file }}" class="img-fluid "
                            alt="सम्बन्धित फाइल फेला परेन" style="width:70%;position:relative;left:15%">

                    </div>



                </div>
                <hr>
                <div class="mt-4">
                    {{-- <h3 class=" h5 text-center pb-5 font-weight-bold">सम्बन्धित फाइल</h3>
                        <img src="{{ asset('storage') }}{{ '/' }}{{ $death->file }}" class="img-fluid "
                            alt="" style="width:70%;position:relative;left:15%"> --}}

                </div>
            </div>


        </div>
    </div>
    </div>
@endsection
