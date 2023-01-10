@extends("pdf")
@section("content")
<h1 class="font-weight-bold text-center pb-5"> मृत्युको सूचना फाराम</h1>

        <table class="table table-responsive-sm mt-5" id="myTable">
            <thead class="thead-light">
                <tr class="text-uppercase">
                    <th>#</th>
                    <th>दर्ता मिति</th>
                    <th>नाम,थर</th>
                    <th>लिङ्ग</th>
                    <th>जन्म मिति</th>
                    {{-- <th>उमेर</th> --}}
                    <th>मरेको मिति</th>
                    <th>मरेको ठाउँ</th>
                    <th>मृत्युको कारण</th>
                    <th>वैवाहिक स्थिति</th>
                    <th>हजुरबुबाको नाम</th>
                </tr>
            </thead>
            <tbody>
                @foreach (App\Death::orderBy("ID","desc")->get() as $death)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $death->entry_date }}</td>
                        <td class="myText">{{ $death->name }}</td>
                        <td class="myText">{{ $death->gender }}</td>
                        <td>{{ $death->dob }}</td>
                        <td>{{ $death->death_date }}</td>
                        <td class="myText">{{ $death->death_place }}</td>
                        <td>{{ $death->cause_death }}</td>
                        <td>{{ $death->marital_status }}</td>
                        <td>{{ $death->grandfather_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
