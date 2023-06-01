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

        .cards-footer {
            background-color: rgba(255, 255, 255, 0.5);
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card bg-primary">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <h3 class="h3 text-white">{{ $birth }}</h3> <label class="text-white">जम्मा जन्मको
                                    सूचना
                                    फाराम</label>
                            </div>
                            <div class="col-4"><span class="card-icon"><i data-v-b3c5cf30=""
                                        class="fas fa-baby fa-3x"></i></span>
                            </div>


                        </div>
                    </div>
                    <div class="cards-footer">
                        <label class="my-2 col-12 text-white">जन्म दर्ता किताब - {{ $birthBook }}</i>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-danger">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h3 class="h3 text-white">{{ $death }}</h3> <label class="text-white">जम्मा मृत्युको
                                    सूचना
                                    फाराम</label>
                            </div>
                            <div class="col-4"><span class="card-icon"><i data-v-b3c5cf30=""
                                        class="fas fa-bolt fa-3x"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="cards-footer">
                        <label class="my-2 col-12 text-white">मृत्यु दर्ता किताब - {{ $deathBook }}</i>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h3 class="h3 text-white">{{ $marriage }}</h3> <label class="text-white">जम्मा विवाहको
                                    सूचना
                                    फाराम</label>
                            </div>
                            <div class="col-4"><span class="card-icon"><i data-v-b3c5cf30=""
                                        class="fas fa-restroom fa-3x"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="cards-footer">
                        <label class="my-2 col-12 text-white">विवाह दर्ता किताब - {{ $marriageBook }}</i>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h3 class="h3 text-white">{{ $migrationCertificate }}</h3> <label class="text-white">जम्मा
                                    बसाईसराई सूचना फाराम</label>
                            </div>
                            <div class="col-4"><span class="card-icon"><i data-v-b3c5cf30=""
                                        class="fas fa-exchange-alt fa-3x"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="cards-footer">
                        <label class="my-2 col-12 text-white">बसाईसराई दर्ता किताब -
                            {{ $migrationCertificateBook }}</i>
                        </label>
                    </div>
                </div>
            </div>

        </div>
        <div class="p-3 mt-4">
            <h3 class="h3 font-weight-bold text-center">व्यक्तिगत घटना दर्ता प्रणाली</h3>
            <h3 class="h3 font-weight-bold text-center">Vital Event Registration System</h3>
            <br>
            @if (App\Mysetting::first())
                <h1 class="h4 font-weight-bold text-uppercase text-center mt-1">
                    {{ App\Mysetting::first()->default_province }}
                </h1>
                <h2 class="h5 font-weight-bold text-uppercase text-center">
                    {{ App\Mysetting::first()->default_district }}
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
    <script>
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
