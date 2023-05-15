@extends('layouts.app')

@push('styles')
    <style>
        #dashboard {
            min-height: 100vh;
            padding: 1rem;
        }

        a.bg-white {
            color: #1f2d3d !important;
        }

        .cards div a:hover {
            background-color: #1c4267;
            color: white;
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="p-3 mt-5">
            {{-- <div class="card p-3 mb-5 border-0">
                <h3>Welcome {{ Auth::user()->name }},</h3>
                <label>In {{ __('app.full_name') }}</label>
                <h1 class="font-weight-bold text-uppercase">{{ App\Mysetting::first()->default_province }}</h1>
                <h2 class="font-weight-bold text-uppercase">{{ App\Mysetting::first()->default_district }}</h2>
                <h3 class="font-weight-bold text-uppercase">{{ App\Mysetting::first()->default_municipality }}</h3>
            </div> --}}
            {{-- <div class="row pb-5">

                <div class="row d-flex col-12 ml-2">
                    <div class="col-xl-3 col-lg-3">
                        <a href="{{ route('birth.index') }}" class="card text-decoration-none text-white bg-success p-3">
                            <div class="d-block">
                                <div class="d-flex">
                                    <div><i class="fas fa-users fa-3x"></i></div>
                                    <div class="pt-1 col-10 text-right"><label class="px-2 col-12 "
                                            style="font-size: 35px;">{{ App\Birth::count() }}</label></div>
                                </div>
                                <div class="font-weight-bold text-uppercase mt-2">कुल जन्म दर्ता</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <a href="{{ route('marriage.index') }}" class="card text-decoration-none text-white bg-warning p-3">
                            <div class="d-block">
                                <div class="d-flex">
                                    <div><i class="fas fa-users fa-3x"></i></div>
                                    <div class="pt-1 col-10 text-right"><label class="px-2 col-12 "
                                            style="font-size: 35px;">{{ App\Marriage::count() }}</label></div>
                                </div>
                                <div class="font-weight-bold text-uppercase mt-2">कुल विवाह दर्ता</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <a href="{{ route('death.index') }}" class="card text-decoration-none text-white bg-danger p-3">
                            <div class="d-block">
                                <div class="d-flex">
                                    <div><i class="fas fa-users fa-3x"></i></div>
                                    <div class="pt-1 col-10 text-right"><label class="px-2 col-12 "
                                            style="font-size: 35px;">{{ App\Death::count() }}</label></div>
                                </div>
                                <div class="font-weight-bold text-uppercase mt-2">कुल मृत्यु दर्ता</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <a href="{{ route('migration.index') }}"
                            class="card text-decoration-none text-white bg-[#4338ca] p-3">
                            <div class="d-block">
                                <div class="d-flex">
                                    <div><i class="fas fa-users fa-3x"></i></div>
                                    <div class="pt-1 col-10 text-right"><label class="px-2 col-12 "
                                            style="font-size: 35px;">{{ App\MigrationCertificate::count() }}</label></div>
                                </div>
                                <div class="font-weight-bold text-uppercase mt-2">कुल बसाईसराई दर्ता</div>
                            </div>
                        </a>
                    </div>

                </div>
            </div> --}}
            {{-- <div class="box p-3" style="width: 50%">
                <canvas id="myChart"></canvas>
            </div> --}}
            <h3 class="h3 font-weight-bold text-center">व्यक्तिगत घटना दर्ता प्रणाली</h3>
            <h3 class="h3 font-weight-bold text-center">Vital Event Registration System</h3>
            <br>
            @if (App\Mysetting::first())
                <h1 class="h4 font-weight-bold text-uppercase text-center mt-1">
                    {{ App\Mysetting::first()->default_province }}
                </h1>
                <h2 class="h5 font-weight-bold text-uppercase text-center">{{ App\Mysetting::first()->default_district }}
                </h2>
                <h3 class="h6 font-weight-bold text-uppercase text-center">
                    {{ App\Mysetting::first()->default_municipality }}
                </h3>
            @endif
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
    <!-- Chartisan -->
    {{-- <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script> --}}

    {{-- <script src="{{ asset('assets/table2excel/dist/jquery.table2excel.js') }}"></script> --}}
    <script>
        // $(function() {
        //     $("#js-export-business-by-type-table-btn").click(function(e) {
        //         var table = $('#js-business-by-type-table');
        //         if (table && table.length) {
        //             var preserveColors = (table.hasClass('table2excel_with_colors') ? true : false);
        //             $(table).table2excel({
        //                 exclude: ".noExl",
        //                 name: "Business By Type",
        //                 filename: "business-by-type-" + new Date().toISOString().replace(
        //                     /[\-\:\.]/g, "") + ".xls",
        //                 fileext: ".xls",
        //                 exclude_img: true,
        //                 exclude_links: true,
        //                 exclude_inputs: true,
        //                 preserveColors: preserveColors
        //             });
        //         }
        //     });

        // });
        var currentYear = NepaliFunctions.GetCurrentBsYear();
        var baisakh = currentYear + '-03' + '-07';
        // console.log(baisakh);
        var test = "{{ App\Death::where('entry_date', '"+baisakh+"')->count() }}";
        console.log(test);
        new Chart(document.getElementById('myChart'), {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                        label: '# of Votes',
                        data: [test, 19, 3, 5, 2, 3],
                        borderWidth: 1,
                        borderColor: '#ff8080',
                        backgroundColor: "rgba(0,0,0,0)"
                    },
                    {
                        label: '# of Votes',
                        data: [15, 1, 17, 12, 5, 8],
                        borderWidth: 1,
                        borderColor: '#84e19a',
                        backgroundColor: "rgba(0,0,0,0)"
                    }
                ]


            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endpush
