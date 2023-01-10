@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="p-3">
            <div class="container-fluid">
                <nav aria-label="breadcrumb" class="d-flex justify-content-between  rounded">

                    <div class="my-breadcrumb">
                        <a class="first-breadcrumb" href="{{ route('birth.index') }}">जन्म दर्ता</a>
                        <a class="sub-breadcrumb" href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        <a class="final-item ml-3">@lang('navigation.birth-notice-form')</a>
                    </div>
                    <div>
                        <a href="{{ route('birth.create') }}" class="btn btn-success"><i
                                class="fas fa-plus-circle mr-2"></i>@lang('navigation.add_new')</a>
                    </div>
                </nav>
                <label class="font-weight-bold pb-2 border-bottom col-12" style="font-size: 20px;padding:0"></label>

                <div class="card p-5 mt-3">
                    <h3 class=" h5 text-center pb-5 font-weight-bold">जन्म दर्ता सुचना फारम</h3>
                    <div class="pb-5 row mt-5">
                        <div class="col-xl-12">
                            <table class="my_table col-12">

                                <tr>
                                    <td>प्रदेश</td>
                                    <td>{{ $birth->province }}</td>
                                    <td rowspan="3"></td>
                                    <td>स्थानीय पञ्जिकाधिकारी</td>
                                    <td class="myText">{{ $birth->administrator }}</td>
                                </tr>
                                <tr>
                                    <td>जिल्ला</td>
                                    <td>{{ $birth->district }}</td>
                                    <td>दर्ता न.</td>
                                    <td>{{ $birth->reg_number }}</td>
                                </tr>
                                <tr>
                                    <td>ग.पा. / न.पा</td>
                                    <td>{{ $birth->municipality }}</td>
                                    <td>दर्ता मिति</td>
                                    <td>{{ $birth->entry_date }}</td>
                                </tr>
                            </table>

                        </div>

                        <div class="col-xl-12 mt-3">
                            <h5 class="h5 font-weight-bold text-center p-3">नवजात शिशुको व्यक्तिगत विवरण</h5>
                            <table class="my_table col-12">
                                <tr>
                                    <td>नाम</td>
                                    <td class="myText">{{ $birth->name }}</td>
                                </tr>
                                <tr>
                                    <td>जन्म मिति</td>
                                    <td>{{ $birth->dob }}</td>
                                </tr>
                                <tr>
                                    <td>जन्म स्थान(घर,अस्पताल,प्रसुती गृह)</td>
                                    <td>{{ $birth->birth_place }}</td>
                                </tr>
                                <tr>
                                    <td>लिङ्ग</td>
                                    <td>{{ $birth->gender }}</td>
                                </tr>
                                <tr>
                                    <td>जन्मेको किसिम</td>
                                    <td>{{ $birth->birth_type }}</td>
                                </tr>
                                <tr>
                                    <td>कुनै पनि शारीरिक विकृति</td>
                                    <td>{{ $birth->physical_disable }}</td>
                                </tr>
                                <tr>
                                    <td>नवजात शिशुको हजुरबुबाको नाम</td>
                                    <td class="myText">{{ $birth->grandfather_name }}</td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-xl-12 mt-3">
                            <h5 class="h5 font-weight-bold text-center p-3">नवजात शिशुको बाबु-आमाको विवरण</h5>
                            <table class="my_table col-12">
                                <tr>
                                    <th>विवरण</th>
                                    <th>बाबुको विवरण</th>
                                    <th>आमाको विवरण</th>
                                </tr>
                                <tr>
                                    <td>स्थायी ठेगाना</td>
                                    <td class="myText">{{ $birth->father_parmanent_address }}</td>
                                    <td class="myText">{{ $birth->mother_parmanent_address }}</td>
                                </tr>
                                <tr>
                                    <td>अस्थायी ठेगाना</td>
                                    <td class="myText">{{ $birth->father_temporary_address }}</td>
                                    <td class="myText">{{ $birth->mother_temporary_address }}</td>
                                </tr>
                                <tr>
                                    <td>शिशु जन्मिदाको उमेर</td>
                                    <td >{{ $birth->father_age_while_baby_born }}</td>
                                    <td >{{ $birth->mother_age_while_baby_born }}</td>
                                </tr>
                                <tr>
                                    <td>जन्म भएको देश</td>
                                    <td class="myText">{{ $birth->father_country_where_baby_born }}</td>
                                    <td class="myText">{{ $birth->mother_country_where_baby_born }}</td>
                                </tr>
                                <tr>
                                    <td>नागरिकता(ना.प्र.नं.)</td>
                                    <td>{{ $birth->father_citizenship_number }}</td>
                                    <td>{{ $birth->mother_citizenship_number }}</td>
                                </tr>
                                <tr>
                                    <td>शिक्षा</td>
                                    <td>{{ $birth->father_education }}</td>
                                    <td>{{ $birth->mother_education }}</td>
                                </tr>
                                <tr>
                                    <td>धर्म</td>
                                    <td>{{ $birth->father_religion }}</td>
                                    <td>{{ $birth->mother_religion }}</td>
                                </tr>
                                <tr>
                                    <td>मातृभाषा</td>
                                    <td class="myText">{{ $birth->father_mother_toung }}</td>
                                    <td class="myText">{{ $birth->mother_mother_toung }}</td>
                                </tr>
                                <tr>
                                    <td>पेशा</td>
                                    <td class="myText">{{ $birth->father_occupation }}</td>
                                    <td class="myText">{{ $birth->mother_occupation }}</td>
                                </tr>
                                <tr>
                                    <td>यो शिशु समेत गरी हाल सम्म जन्मेको सन्तान संख्या</td>
                                    <td>{{ $birth->father_baby_number }}</td>
                                    <td>{{ $birth->mother_baby_number }}</td>
                                </tr>
                                <tr>
                                    <td>यो शिशु समेत गरी जीवित सन्तान संख्या</td>
                                    <td>{{ $birth->father_alive_baby_number }}</td>
                                    <td>{{ $birth->mother_alive_baby_number }}</td>
                                </tr>
                                <tr>
                                    <td>शिशु जन्मदा मदत गर्ने व्यक्ति</td>
                                    <td>{{ $birth->father_helper }}</td>
                                    <td>{{ $birth->mother_helper }}</td>
                                </tr>
                                <tr>
                                    <td>विवाहा भएको साल</td>
                                    <td>{{ $birth->father_marige_date }}</td>
                                    <td>{{ $birth->mother_marige_date }}</td>
                                </tr>
                            </table>

                        </div>
                        <div class="col-xl-12 mt-3">
                            <h5 class="h5 font-weight-bold text-center p-3">नवजात शिशुको साची विवरण</h5>

                            <table class="my_table col-12">
                                <tr>
                                    <td>नाम</td>
                                    <td class="myText">{{ $birth->name }}</td>
                                </tr>
                                <tr>
                                    <td>नवजात शिशुसंगको सम्बन्ध</td>
                                    <td class="myText">{{ $birth->relationship }}</td>
                                </tr>
                                <tr>
                                    <td>ठेगाना</td>
                                    <td class="myText">{{ $birth->relative_address }}</td>
                                </tr>
                                <tr>
                                    <td>मिति</td>
                                    <td>{{ $birth->date }}</td>
                                </tr>
                            </table>
                        </div>

                    </div>

                    <div class="mt-4">
                        <h3 class=" h5 text-center pb-5 font-weight-bold">सम्बन्धित फाइल</h3>
                            <img src="{{ asset('storage') }}{{ '/' }}{{ $birth->file }}" class="img-fluid "
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
