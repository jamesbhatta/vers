@extends('layouts.print')
@section('content')
    <div class="container">
        <h1 class="h2 text-center py-5 font-weight-bold">मृत्युको सूचना फाराम </h1>
        <div class="col-12">
            <table class="my_table col-12">
                <tr>
                    <td>प्रदेश</td>
                    <td id="province">{{ $death->province }}</td>
                    <td>स्थानीय पञ्जिकाधिकारी</td>
                    <td id="administrator" style="font-size: 18px">{{ $death->administrator }}</td>
                </tr>
                <tr>
                    <td>जिल्ला</td>
                    <td id="district">{{ $death->district }}</td>
                    <td>दर्ता न.</td>
                    <td id="reg_number">{{ $death->reg_number }}</td>
                </tr>
                <tr>
                    <td>गा.पा. / न.पा</td>
                    <td id="municipality">{{ $death->municipality }}</td>
                    <td>दर्ता मिति</td>
                    <td id="entry_date">{{ $death->entry_date }}</td>
                </tr>
            </table>
        </div>
        <label class="col-12 text-center mt-3 font-weight-bold">मृतकको विवरण</label>
        <div class="col-12">
            <table class="my_table col-12">
                <tr>
                    <td class="text-center">क</td>
                    <td style="font-size: 18px">नाम</td>
                    <td id="name">{{ $death->name }}</td>
                    <td class="text-center">ख</td>
                    <td>लिङ्ग</td>
                    <td id="gender">{{ $death->gender }}</td>
                </tr>
                <tr>
                    <td class="text-center">ग</td>
                    <td>उमेर</td>
                    <td id="age">{{ $death->age }}</td>
                    <td class="text-center">घ</td>
                    <td>मरेको मिति</td>
                    <td id="death_date">{{ $death->death_date }}</td>
                </tr>
                <tr>
                    <td class="text-center">ङ</td>
                    <td>मरेको ठाउँ</td>
                    <td id="death_place">{{ $death->death_place }}</td>
                    <td class="text-center">च</td>
                    <td>जन्म भएको देश</td>
                    <td id="birth_country">{{ $death->birth_country }}</td>
                </tr>
                <tr>
                    <td class="text-center">छ</td>
                    <td>नागरिकता (ना. प्र. न.)</td>
                    <td id="citizenship_number">{{ $death->citizenship_number }}</td>
                    <td class="text-center">ज</td>
                    <td>मृतकको स्थाई ठेगाना</td>
                    <td id="address">{{ $death->address }}</td>
                </tr>
                <tr>
                    <td class="text-center">झ</td>
                    <td>वैवाहिक स्थिति</td>
                    <td id="marital_status">{{ $death->marital_status }}</td>
                    <td class="text-center">ञ</td>
                    <td>शिक्षा</td>
                    <td id="education">{{ $death->education }}</td>
                </tr>
                <tr>
                    <td class="text-center">ट</td>
                    <td>मातृभाषा</td>
                    <td id="mother_tongue">{{ $death->mother_tongue }}</td>
                    <td class="text-center">ठ</td>
                    <td>धर्म</td>
                    <td id="religion">{{ $death->religion }}</td>
                </tr>
                <tr>
                    <td class="text-center">ड</td>
                    <td>हजुरबुबाको नाम</td>
                    <td id="grandfather_name">{{ $death->grandfather_name }}</td>
                    <td class="text-center">ढ</td>
                    <td>बुबाको नाम</td>
                    <td id="father_name">{{ $death->father_name }}</td>
                </tr>
                <tr>
                    <td class="text-center">ण</td>
                    <td>पति/पत्नीको नाम</td>
                    <td id="spouse">{{ $death->spouse }}</td>
                    <td class="text-center">त</td>
                    <td>मृत्युको कारण</td>
                    <td id="cause_death">{{ $death->cause_death }}</td>
                </tr>

            </table>

        </div>
        <label class="col-12 text-center mt-3 font-weight-bold">साक्षीको विवरण</label>
        <div class="col-12">
            <table class="my_table col-12">
                <tr>
                    <td>क</td>
                    <td>नाम</td>
                    <td id="relative_name">{{ $death->relative_name }}</td>
                </tr>
                <tr>
                    <td>ख</td>
                    <td>मृतक संगको सम्बन्ध</td>
                    <td id="relationship">{{ $death->relationship }}</td>
                </tr>
                <tr>
                    <td>ग</td>
                    <td>ठेगाना</td>
                    <td id="relative_address">{{ $death->relative_address }}</td>
                </tr>
                <tr>
                    <td>घ</td>
                    <td>मिति</td>
                    <td id="date">{{ $death->date }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
