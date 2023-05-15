@extends('layouts.app')
@section('content')
    <body style="background-color: #252627">
        <div class="container justify-content-center" style="margin-top: 6%;">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="container" style="background-color: #4064aa; border-radius: 25px;">
                        <div class="row justify-content-center">
                            <div class="col-md-12 p-4 text-center text-white font-weight-bold">
                                <h3 class="h4">व्यक्तिगत घटना दर्ता प्रणाली</h3>
                                <h3 class="h4">Vital Event Registration System</h3>
                            </div>

                            <div class="col-md-6 py-5" style="background-color:#1d4188; border-radius: 0px 0px 0px 25px;">
                                <div class="text-center text-white font-weight-bold">
                                    <div class="d-flex justify-content-center">
                                        <img class="img-responsive p-2"
                                            src="{{ asset('assets/image/nep-gov-logo-sm.png') }}" style="height: 100px;">
                                    </div>
                                    @php
                                        $mySetting = App\Mysetting::first();
                                    @endphp
                                    @if ($mySetting)
                                        <h1 class="h4">
                                            {{ $mySetting->default_municipality }}<br>{{ $mySetting->default_province }},
                                            <span class="capitalize">{{ $mySetting->default_district }}</span>
                                        </h1>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6 p-5" style="background-color: white; border-radius: 0px 0px 25px 0px;">
                                <div class="text-center">
                                    <h6 class="py-3">Login</h6>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <input id="username" type="text"
                                                class="form-control @error('username') is-invalid @enderror" name="username"
                                                value="{{ old('username') }}" required autocomplete="username" autofocus
                                                placeholder="Username">

                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password" placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div>
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                        <div class="form-group mt-3">
                                            <button type="submit" class="btn btn-dark px-4"
                                                style="background-color:#1d4188">{{ __('Login') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
