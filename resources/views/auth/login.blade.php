@extends('layouts.app')

@push('styles')
    <style>
        #login-form-wrap {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        #login-form-wrap>.card {
            width: 400px;
        }
    </style>
@endpush

@section('content')
    <div id="login-form-wrap" class="d-block" style="height: 100vh;overflow:hidden">
        <div style="height: 10%"></div>
        @if (App\Mysetting::first())
            <h1 class="h3 font-weight-bold text-uppercase text-center">{{ App\Mysetting::first()->default_province }}
            </h1>
            <h2 class="h4 font-weight-bold text-uppercase text-center">{{ App\Mysetting::first()->default_district }}</h2>
            <h3 class="h5 font-weight-bold text-uppercase text-center">{{ App\Mysetting::first()->default_municipality }}
            </h3>
        @endif
        <div style="height: 10%"></div>
        <div class="col-12 d-flex justify-content-center">
            <div class="card font-roboto card-shadow z-depth-0 col-xl-3 col-lg-4 col-md-6">
                <div class="card-body pt-0 px-4 pb-4">
                    <div class="col-12 d-flex justify-content-center">
                        <img class="img-responsive rounded-circle bg-white p-2"
                            src="{{ asset('assets/image/nep-gov-logo-sm.png') }}" alt=""
                            style="height: 100px; width: 110px; margin-top: -50px">
                    </div>
                    <h2 class="h2-responsive text-center font-weight-bold my-4">{{ __('Login') }}</h2>
                    <div class="my-5"></div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" id="username" name="username"
                                class="form-control grey lighten-5 p-4  @error('username') is-invalid @enderror"
                                placeholder="Username" value="{{ old('username') }}" required autocomplete="username"
                                autofocus>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password"
                                class="form-control grey lighten-5 p-4 @error('password') is-invalid @enderror"
                                placeholder="Password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="form-group text-center">

                            <div class="p-3" style="background-color:#f9fafb">
                                <button class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light"
                                    type="submit"
                                    style="background-color:#374f67; color: #fff;">{{ __('Login') }}</button>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
