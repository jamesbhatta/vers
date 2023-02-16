@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="p-3">
            <div class="container-fluid font-noto">
                <nav aria-label="breadcrumb" class="d-flex justify-content-between  rounded">

                    <div class="my-breadcrumb">
                        <a class="first-breadcrumb" href="{{ route('death.index') }}">User Profile</a>
                        <a class="sub-breadcrumb" href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        <a class="final-item ml-3" href="">User Profile</a>
                    </div>
                </nav>
                <label class="font-weight-bold pt-3 pb-3 border-bottom col-12" style="font-size: 20px;padding:0">User Profile</label>
                @if (session()->has('success'))
                    <div class="mt-3 alert alert-success" id="my_alert" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                    <div class="d-flex justify-content-center mt-5">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    My Profile
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('user.profile.update',$user) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="">Name:</label>
                                            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Email:</label>
                                            <input type="text" name="email" class="form-control" value="{{ $user->email }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Username:</label>
                                            <input type="text" name="username" class="form-control" value="{{ $user->username }}">
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" type="submit" class="btn bg-success text-white" value="Update">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
    <script>
        function myDelete() {
            if (!confirm("Are You Sure to delete this")) {
                event.preventDefault();
            }
        }
    </script>
@endsection
