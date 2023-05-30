@extends('layouts.print')
@section('content')
    <div class="modal-content">
        <h1 class="h2 text-center py-5 font-weight-bold">विवाहको सूचना फाराम </h1>
        <div class="container">
            <div class="col-12">
                <table class="my_table col-12">
                    <tr>
                        <td>प्रदेश</td>
                        <td id="province">{{ $marriage->province }}</td>
                        <td>स्थानीय पञ्जिकाधिकारी</td>
                        <td id="administrator">{{ $marriage->administrator }}</td>
                    </tr>
                    <tr>
                        <td>जिल्ला</td>
                        <td id="district">{{ $marriage->district }}</td>
                        <td>दर्ता न.</td>
                        <td id="reg_number">{{ $marriage->reg_number }}</td>
                    </tr>
                    <tr>
                        <td>गा.पा. / न.पा</td>
                        <td id="municipality">{{ $marriage->municipality }}</td>
                        <td>दर्ता मिति</td>
                        <td id="entry_date">{{ $marriage->entry_date }}</td>
                    </tr>
                </table>
            </div>
            <label class="col-12 text-center mt-5 font-weight-bold">सामाजिक परम्परा अनुसार विवाह
                दर्ता कानुन ऐन २०२८ अनुसार मिति <span id="marriage_date">{{ $marriage->marriage_date }}</span> मा <span
                    id="marriage_address">{{ $marriage->marriage_address }}</span> मा विवाह सम्पन्न भएको हुनाले निम्न लिखित
                विवरण
                खुलाई सूचना दिन आएको छु । कानुन अनुसार दर्ता गरिपाऊ ।</label>

            <label class="col-12 text-center mt-5 font-weight-bold">दुलाहा-दुलहीको विवरण</label>


            <div class="col-xl-12">
                <table class="my_table col-12" id="myTable">
                    <tr>
                        <th>विवरण</th>
                        <th>दुलाहाको विवरण</th>
                        <th>दुलहीको विवरण</th>
                    </tr>
                    <tr>
                        <td>नाम,थर</td>
                        <td id="bride_name">{{ $marriage->bride_name }}</td>
                        <td id="groom_name">{{ $marriage->groom_name }}</td>
                    </tr>
                    <tr>
                        <td>जन्म मिति</td>
                        <td id="bride_dob">{{ $marriage->bride_dob }}</td>
                        <td id="groom_dob">{{ $marriage->groom_dob }}</td>
                    </tr>
                    <tr>
                        <td>जन्म भएको देश</td>
                        <td id="bride_birth_country">{{ $marriage->bride_birth_country }}</td>
                        <td id="groom_birth_country">{{ $marriage->groom_birth_country }}</td>
                    </tr>
                    <tr>
                        <td>नागरिकता (ना.प्र.नं)</td>
                        <td id="bride_citizenship_number">{{ $marriage->bride_citizenship_number }}</td>
                        <td id="groom_citizenship_number">{{ $marriage->groom_citizenship_number }}</td>
                    </tr>
                    <tr>
                        <td>नागरिकता जारी मिति</td>
                        <td id="bride_citizenship_date">{{ $marriage->bride_citizenship_date }}</td>
                        <td id="groom_citizenship_date">{{ $marriage->groom_citizenship_date }}</td>
                    </tr>
                    <tr>
                        <td>नागरिकता लिएको जिल्ला</td>
                        <td id="bride_citizenship_district">{{ $marriage->bride_citizenship_district }}</td>
                        <td id="groom_citizenship_district">{{ $marriage->groom_citizenship_district }}</td>
                    </tr>
                    <tr>
                        <td>स्थाई ठेगाना</td>
                        <td id="bride_temp_address">{{ $marriage->bride_temp_address }}</td>
                        <td id="groom_temp_address">{{ $marriage->groom_temp_address }}</td>
                    </tr>
                    <tr>
                        <td>शिक्षा</td>
                        <td id="bride_education">{{ $marriage->bride_education }}</td>
                        <td id="groom_education">{{ $marriage->groom_education }}</td>
                    </tr>
                    <tr>
                        <td>धर्म</td>
                        <td id="bride_religion">{{ $marriage->bride_religion }}</td>
                        <td id="groom_religion">{{ $marriage->groom_religion }}</td>
                    </tr>
                    <tr>
                        <td>मातृभाषा</td>
                        <td id="bride_mother_tongue">{{ $marriage->bride_mother_tongue }}</td>
                        <td id="groom_mother_tongue">{{ $marriage->groom_mother_tongue }}</td>
                    </tr>
                    <tr>
                        <td>बाजेको नाम</td>
                        <td id="bride_grandfather_name">{{ $marriage->bride_grandfather_name }}</td>
                        <td id="groom_grandfather_name">{{ $marriage->groom_grandfather_name }}</td>
                    </tr>
                    <tr>
                        <td>बाबुको नाम</td>
                        <td id="bride_father_name">{{ $marriage->bride_father_name }}</td>
                        <td id="groom_father_name">{{ $marriage->groom_father_name }}</td>
                    </tr>
                    <tr>
                        <td>पूर्व वैवाहिक स्थिति</td>
                        <td id="bride_pre_marrige_status">{{ $marriage->bride_pre_marrige_status }}</td>
                        <td id="groom_pre_marrige_status">{{ $marriage->groom_pre_marrige_status }}</td>
                    </tr>

                </table>
            </div>

            <label class="col-12 text-center mt-5 font-weight-bold">यसमा लेखेको विवरण साचो हो, झुठा ठहरे कानुन बमोजिम साहुला बुझाउला भनि
                सहिछाप गर्ने, सूचकको विवरण </label>
            <div class="col-12 mb-4">
                <table class="my_table col-12">
                    <tbody>
                        <tr>
                            <th>
                                नाम
                            </th>
                            <td id="bride_name">{{ $marriage->bride_name }}</td>
                            <td id="groom_name">{{ $marriage->groom_name }}</td>
                        </tr>
                        <tr>
                            <tr>
                                <th>ठेगाना</th>
                                <td id="bride_temp_address">{{ $marriage->bride_temp_address }}</td>
                                <td id="groom_temp_address">{{ $marriage->groom_temp_address }}</td>
                            </tr>
                        </tr>
                        <tr>
                            <tr>
                                <th>मिति</th>
                             <td>{{ $marriage->entry_date }}</td>
                             <td>{{ $marriage->entry_date }}</td>
                            </tr>
                        </tr>

                    </tbody>

                </table>

            </div>
        </div>
    </div>
@endsection
