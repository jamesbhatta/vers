@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="p-3">
            <div class="container-fluid font-noto">

                <nav aria-label="breadcrumb" class="d-flex justify-content-between  rounded">

                    <div class="my-breadcrumb">
                        <a class="first-breadcrumb" href="{{ route('vdc.index') }}">गाउँ विकास समिति</a>
                        <a class="sub-breadcrumb" href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        <a class="final-item ml-3">गाउँ विकास समिति</a>
                    </div>

                </nav>
                <label class="font-weight-bold pb-2 border-bottom col-12" style="font-size: 20px;padding:0"></label>
                @if (session()->has('success'))
                    <div class="mt-3 alert alert-success" id="my_alert" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif

                <div class="row mt-3">
                    <div class="col-xl-5 col-lg-12 mb-3">
                        <div class="box p-3">
                            <form action="{{ $vdc->id ?  route('vdc.update',$vdc) : route('vdc.store')}}" method="POST">
                                @csrf
                                @isset($vdc->id)
                                    @method('PUT')
                                @endisset
                                <div class="form-group">
                                    <label>गाउँ विकास समिति नाम</label>
                                    <input type="text" name="vdc" value="{{ old('vdc',$vdc->vdc) }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="p-3 text-right" style="background-color:#f9fafb">
                                        <button class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light"
                                            type="submit"
                                            style="background-color:#374f67; color: #fff;">{{ $vdc->id ? 'Update' : 'Save' }}</button>
                                    </div>
                                    {{-- <input type="submit" class="btn btn-success" value="{{ $vdc->id ? 'Update' : 'Save' }}"> --}}
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-xl-7 col-lg-12">
                        <div class="box p-3">
                            <table class="table table-responsive-sm" id="myTable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>VDC</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vdcs as $vdc)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $vdc->vdc }}</td>
                                            <td>
                                                <a class="action-btn text-primary" href="{{ route('vdc.edit', $vdc) }}"><i
                                                        class="far fa-edit"></i></a>
                                                <form action="{{ route('vdc.delete', $vdc) }}" method="post"
                                                    onsubmit="return confirm('के तपाईँ निश्चित हुनुहुन्छ?')"
                                                    class="form-inline d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="action-btn text-danger"><i
                                                            class="far fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
