@extends('layouts.print')
@section('content')
    <div class="bg-white">
        <div class="container">
            <h1 class="h2 text-center py-5 font-weight-bold">जन्मको सूचना फाराम </h1>
            <div class="col-12">
                <table class="my_table col-12" id="myTable">
                    <tr>
                        <td>प्रदेश</td>
                        <td id="province"> {{ $birth->province }}</td>
                        <td>स्थानीय पञ्जिकाधिकारी</td>
                        <td id="administrator">{{ $birth->administrator }}</td>
                    </tr>
                    <tr>
                        <td>जिल्ला</td>
                        <td id="district">{{ $birth->district }}</td>
                        <td>दर्ता न.</td>
                        <td id="reg_number">{{ $birth->reg_number }}</td>
                    </tr>
                    <tr>
                        <td>ग.पा. / न.पा</td>
                        <td id="municipality">{{ $birth->municipality }}</td>
                        <td>दर्ता मिति</td>
                        <td id="entry_date">{{ $birth->entry_date }}</td>
                    </tr>
                </table>
            </div>
            <label class="col-12 text-center mt-3 font-weight-bold">नवजात शिशुको व्यक्तिगत
                विवरण</label>

            <div class="col-xl-12">
                <table class="my_table col-12">
                    <tr>
                        <td>नाम</td>
                        <td id="name">{{ $birth->name }}</td>
                    </tr>
                    <tr>
                        <td>जन्म मिति</td>
                        <td>{{ $birth->dob }}</td>
                    </tr>
                    <tr>
                        <td>जन्म स्थान(घर,अस्पताल,प्रसुती गृह)</td>
                        <td id="birth_place">{{ $birth->birth_place }}</td>
                    </tr>
                    <tr>
                        <td>लिङ्ग</td>
                        <td id="gender">{{ $birth->gender }}</td>
                    </tr>
                    <tr>
                        <td>जन्मेको किसिम</td>
                        <td id="birth_type">{{ $birth->birth_type }}</td>
                    </tr>
                    <tr>
                        <td>कुनै पनि शारीरिक विकृति</td>
                        <td id="physical_disable">{{ $birth->physical_disable }}</td>
                    </tr>
                    <tr>
                        <td>नवजात शिशुको हजुरबुबाको नाम</td>
                        <td id="grandfather_name">{{ $birth->grandfather_name }}</td>
                    </tr>
                </table>
            </div>
            <label class="col-12 text-center mt-3 font-weight-bold">नवजात शिशुको आमा-बाबुको
                विवरण</label>

            <div class="col-xl-12">
                <table class="my_table col-12">
                    <tr>
                        <th>विवरण</th>
                        <th>बाबुको विवरण</th>
                        <th>आमाको विवरण</th>
                    </tr>
                    <tr>
                        <td>नाम</td>
                        <td id="father_name">{{ $birth->father_name }}</td>
                        <td id="mother_name">{{ $birth->mother_name }}</td>
                    </tr>
                    <tr>
                        <td>स्थायी ठेगाना</td>
                        <td id="father_parmanent_address">{{ $birth->father_parmanent_address }}</td>
                        <td id="mother_parmanent_address">{{ $birth->mother_parmanent_address }}</td>
                    </tr>
                    <tr>
                        <td>अस्थायी ठेगाना</td>
                        <td id="father_temporary_address">{{ $birth->father_temporary_address }}</td>
                        <td id="mother_temporary_address">{{ $birth->mother_temporary_address }}</td>
                    </tr>
                    <tr>
                        <td>शिशु जन्मिदाको उमेर</td>
                        <td id="father_age_while_baby_born">{{ $birth->father_age_while_baby_born }}</td>
                        <td id="mother_age_while_baby_born">{{ $birth->mother_age_while_baby_born }}</td>
                    </tr>
                    <tr>
                        <td>जन्म भएको देश</td>
                        <td id="father_country_where_baby_born">{{ $birth->father_country_where_baby_born }}</td>
                        <td id="mother_country_where_baby_born">{{ $birth->mother_country_where_baby_born }}</td>
                    </tr>
                    <tr>
                        <td>नागरिकता(ना.प्र.नं.)</td>
                        <td id="father_citizenship_number">{{ $birth->father_citizenship_number }}</td>
                        <td id="mother_citizenship_number">{{ $birth->mother_citizenship_number }}</td>
                    </tr>
                    <tr>
                        <td>शिक्षा</td>
                        <td id="father_education">{{ $birth->father_education }}</td>
                        <td id="mother_education">{{ $birth->mother_education }}</td>
                    </tr>
                    <tr>
                        <td>धर्म</td>
                        <td id="father_religion">{{ $birth->father_religion }}</td>
                        <td id="mother_religion">{{ $birth->mother_religion }}</td>
                    </tr>
                    <tr>
                        <td>मातृभाषा</td>
                        <td id="father_mother_toung">{{ $birth->father_mother_toung }}</td>
                        <td id="mother_mother_toung">{{ $birth->mother_mother_toung }}</td>
                    </tr>
                    <tr>
                        <td>पेशा</td>
                        <td id="father_occupation">{{ $birth->father_occupation }}</td>
                        <td id="mother_occupation">{{ $birth->mother_occupation }}</td>
                    </tr>
                    <tr>
                        <td>यो शिशु समेत गरी हाल सम्म जन्मेको सन्तान संख्या</td>
                        <td id="father_baby_number">{{ $birth->father_baby_number }}</td>
                        <td id="mother_baby_number">{{ $birth->mother_baby_number }}</td>
                    </tr>
                    <tr>
                        <td>यो शिशु समेत गरी जीवित सन्तान संख्या</td>
                        <td id="father_alive_baby_number">{{ $birth->father_alive_baby_number }}</td>
                        <td id="mother_alive_baby_number">{{ $birth->mother_alive_baby_number }}</td>
                    </tr>
                    <tr>
                        <td>शिशु जन्मदा मदत गर्ने व्यक्ति</td>
                        <td id="father_helper">{{ $birth->father_helper }}</td>
                        <td id="mother_helper">{{ $birth->mother_helper }}</td>
                    </tr>
                    <tr>
                        <td>विवाहा भएको साल</td>
                        <td id="father_marige_date">{{ $birth->father_marige_date }}</td>
                        <td id="mother_marige_date">{{ $birth->mother_marige_date }}</td>
                    </tr>
                </table>

            </div>
            <label class="col-12 text-center mt-3 font-weight-bold">साक्षीको विवरण</label>
            <div class="col-12">
                <table class="my_table col-12">
                    <tr>
                        <td>क</td>
                        <td>नाम</td>
                        <td id="relative_name">{{ $birth->relative_name }}</td>
                    </tr>
                    <tr>
                        <td>ख</td>
                        <td>नवजात शिशुसंगको सम्बन्ध</td>
                        <td id="relationship">{{ $birth->relationship }}</td>
                    </tr>
                    <tr>
                        <td>ग</td>
                        <td>ठेगाना</td>
                        <td id="relative_address">{{ $birth->relative_address }}</td>
                    </tr>
                   
                </table>
            </div>
        </div>
    </div>
@endsection
