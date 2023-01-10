@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="p-3">
            <div class="container-fluid">
                <nav aria-label="breadcrumb" class="d-flex justify-content-between">
                    {{-- <div class="mx-3">
                        <p style="font-size: 20px">@lang('navigation.death-notice-form')</p>
                    </div> --}}
                    <div class="my-breadcrumb">
                        <a class="first-breadcrumb" href="{{ route('death.index') }}">मृत्यु दर्ता</a>
                        <a class="sub-breadcrumb" href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        <a class="final-item ml-3">@lang('navigation.death-notice-form')</a>
                    </div>
                    <div>
                        <a href="{{ route('death.create') }}" class="btn btn-success"><i
                                class="fas fa-plus-circle mr-2"></i>@lang('navigation.add_new')</a>
                    </div>
                </nav>
                <label class="font-weight-bold pb-2 border-bottom col-12" style="font-size: 20px;padding:0"></label>

                <div class="card p-5 mt-2">
                    <h3 class="text-center pb-5 font-weight-bold">मृत्युको सुचना फारम</h3>
                    <div class="row mt-5">
                        <div class="col-xl-4">
                            <table class="my_table col-12">
                                <tr>
                                    <th></th>
                                    <th>नाम</th>
                                </tr>
                                <tr>
                                    <td>प्रदेश</td>
                                    <td>{{ $death->province }}</td>
                                </tr>
                                <tr>
                                    <td>जिल्ला</td>
                                    <td>{{ $death->district }}</td>
                                </tr>
                                <tr>
                                    <td>ग.पा. / न.पा</td>
                                    <td>{{ $death->municipality }}</td>
                                </tr>
                            </table>

                        </div>

                        <div class="col-xl-4"></div>

                        <div class="col-xl-4">
                            <table class="my_table col-12">
                                <tr>
                                    <th></th>
                                    <th>नाम</th>
                                </tr>
                                <tr>
                                    <td>स्थानीय पञ्जिकाधिकारी</td>
                                    <td class="myText">{{ $death->administrator }}</td>
                                </tr>
                                <tr>
                                    <td>दर्ता न.</td>
                                    <td>{{ $death->reg_number }}</td>
                                </tr>
                                <tr>
                                    <td>दर्ता मिति</td>
                                    <td>{{ $death->entry_date }}</td>
                                </tr>
                            </table>

                        </div>

                        <label class="col-12 text-center mt-5">मृतकको विवरण</label>

                        <div class="col-12">
                            <table class="my_table col-12">
                                <tr>
                                    <td class="text-center">क</td>
                                    <td>नाम</td>
                                    <td class="myText">{{ $death->name }}</td>
                                    <td class="text-center">ख</td>
                                    <td>लिङ्ग</td>
                                    <td>{{ $death->gender }}</td>
                                </tr>
                                <tr>
                                    <td class="text-center">ग</td>
                                    <td>उमेर</td>
                                    <td id="age"></td>
                                    {{-- <td>{{ $death->age( $death->dob) }}</td> --}}
                                    <td class="text-center">घ</td>
                                    <td>मरेको मिति</td>
                                    <td>{{ $death->death_date }}</td>
                                </tr>
                                <tr>
                                    <td class="text-center">ङ</td>
                                    <td>मरेको ठाउँ</td>
                                    <td class="myText">{{ $death->death_place }}</td>
                                    <td class="text-center">च</td>
                                    <td class="myText">जन्म भएको देश</td>
                                    <td class="myText">{{ $death->birth_country }}</td>
                                </tr>
                                <tr>
                                    <td class="text-center">छ</td>
                                    <td>नागरिकता (ना. प्र. न.)</td>
                                    <td>{{ $death->citizenship_number }}</td>
                                    <td class="text-center">ज</td>
                                    <td >मृतकको स्थाई ठेगाना</td>
                                    <td class="myText">{{ $death->address }}</td>
                                </tr>
                                <tr>
                                    <td class="text-center">झ</td>
                                    <td>वैवाहिक स्थिति</td>
                                    <td>{{ $death->marital_status }}</td>
                                    <td class="text-center">ञ</td>
                                    <td>शिक्षा</td>
                                    <td>{{ $death->education }}</td>
                                </tr>
                                <tr>
                                    <td class="text-center">ट</td>
                                    <td>मातृभाषा</td>
                                    <td class="myText">{{ $death->mother_tongue }}</td>
                                    <td class="text-center">ठ</td>
                                    <td>धर्म</td>
                                    <td>{{ $death->religion }}</td>
                                </tr>
                                <tr>
                                    <td class="text-center">ड</td>
                                    <td>हजुरबुबाको नाम</td>
                                    <td class="myText">{{ $death->grandfather_name }}</td>
                                    <td class="text-center">ढ</td>
                                    <td>बुबाको नाम</td>
                                    <td class="myText">{{ $death->father_name }}</td>
                                </tr>
                                <tr>
                                    <td class="text-center">ण</td>
                                    <td>पति/पत्नीको नाम</td>
                                    <td class="myText">{{ $death->spouse }}</td>
                                    <td class="text-center">त</td>
                                    <td>मृत्युको कारण</td>
                                    <td>{{ $death->cause_death }}</td>
                                </tr>

                            </table>

                        </div>

                        <label class="col-12 text-center mt-5">साचीको विवरण</label>

                        <div class="col-12">
                            <table class="my_table col-12">
                                <tr>
                                    <td>क</td>
                                    <td>नाम</td>
                                    <td class="myText">{{ $death->relative_name }}</td>
                                </tr>
                                <tr>
                                    <td>ख</td>
                                    <td>मृतक संगको सम्बन्ध</td>
                                    <td class="myText">{{ $death->relationship }}</td>
                                </tr>
                                <tr>
                                    <td>ग</td>
                                    <td >ठेगाना</td>
                                    <td class="myText">{{ $death->relative_address }}</td>
                                </tr>
                                <tr>
                                    <td>घ</td>
                                    <td>मिति</td>
                                    <td>{{ $death->date }}</td>
                                </tr>
                            </table>

                        </div>

                    </div>
                    <div class="col-12">
                        <h3 class="text-center h3 p-5 font-weight-bold ">सम्बन्धित फाइल</h3>

                        <img src="{{ asset('storage') }}{{ '/' }}{{ $death->file }}" class="img-fluid "
                            alt="सम्बन्धित फाइल फेला परेन" style="width:70%;position:relative;left:15%">

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
