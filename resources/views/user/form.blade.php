@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="font-roboto">
        @section('breadcrumb')
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">ड्यासबोर्ड</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">@lang('navigation.users')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('navigation.add_user')</li>
                </ol>
            </nav>
        @endsection
        <div class="text-center">
            <h2 class="h2-responsive font-weight-bold">{{ $user->exists ? 'Edit' : 'Add New' }} User</h2>
        </div>

        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card border">
                    <div class="card-body">

                        <div class="my-3">

                            @if (Session::has('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ Session::get('error') }}
                                    <button type="button" class="close font-roboto" data-dismiss="alert"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>

                        <form action="{{ isset($user->id) ? route('user.update', $user) : route('user.store') }}"
                            method="post" class="form">
                            @csrf
                            @isset($user->id)
                                @method('PUT')
                            @endisset
                            <div class="form-group">
                                <label>User's Full Name</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ old('name', $user->name) }}">
                            </div>
                            <div class="form-group">
                                <label>User's Email</label>
                                <input type="email" name="email" class="form-control"
                                    value="{{ old('email', $user->email) }}"
                                    @isset($user->id) readonly @endisset>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control"
                                    value="{{ old('username', $user->username) }}">
                            </div>
                            <div class="form-group">
                                <label>@lang('navigation.role')</label>
                                @foreach ($roles as $role)
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="roles[]" class="custom-control-input"
                                            id="role-checkbox-{{ $role->name }}" value="{{ $role->name }}"
                                            @if ($user->hasRole($role->name)) checked @endif>
                                        <label class="custom-control-label"
                                            for="role-checkbox-{{ $role->name }}">{{ ucfirst($role->name) }}</label>
                                    </div>
                                @endforeach
                            </div>

                            {{-- <div class="form-group">
                                <label>Ward</label>
                                <select name="ward_id" class="select">
                                    <option value="">Select one...</option>
                                    @foreach ($wards as $ward)
                                        <option value="{{ $ward->id }}"
                                            {{ $ward->id == $user->ward_id ? 'selected' : '' }}>{{ $ward->ward_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div> --}}


                            @if ($user->id == null)
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control">
                                </div>
                            @endisset

                            <div class="form-group">
                                <div class="p-3 text-right" style="background-color:#f9fafb">
                                    <button
                                        class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light"
                                        type="submit"
                                        style="background-color:#374f67; color: #fff;">{{ $user->id ? 'Update' : 'Save' }}</button>
                                </div>

                            </div>

                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End of user form --}}
</div>
</div>
@endsection

@push('scripts')
<script>
    $(function() {
        $('#ward-toggler').change(function() {
            $('#ward-selector').toggleClass('d-none');;
        })
    })
</script>
@endpush
