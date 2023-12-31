@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-2">
                <div>
                    @include('alerts.all')
                </div>
                @hasanyrole('super-admin|admin')
                    <div class="gery lighten-5 py-4">
                        <a href="{{ route('user.index') }}"><i class="fa fa-arrow-left mr-2"></i>Back to users</a>
                    </div>
                @endhasanyrole
                <div class="card z-depth-0">
                    <div class="card-body">
                        <h2 class="h3 h2-responsive text-uppercase text-center pb-2">Change Password of {{ $user->name }}</h2>
                        <hr>
                        <form action="{{ route('password.change', $user) }}" method="POST" class="form mt-4">
                            @csrf
                            @method('put')
                            @hasanyrole('super-admin|admin')
                            @else
                                <div class="form-group">
                                    <label>Old Password</label>
                                    <input type="password" name="password" class="form-control" autofocus>
                                </div>
                            @endhasanyrole
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" name="password" class="form-control" autofocus>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>
                            <div class="p-3 text-right" style="background-color:#f9fafb">
                                <button class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light"
                                    type="submit" style="background-color:#374f67; color: #fff;">Update Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
