@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="p-3">
            <div class="container-fluid font-noto">
                {{-- <hr> --}}
                <label class="font-weight-bold pb-2 border-bottom col-12" style="font-size: 20px;padding:0"></label>
                @if (session()->has('success'))
                    <div class="mt-2 alert alert-success" id="my_alert" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-xl-4">
                        <form
                            action="{{ $withnessRelationship->id ? route('withness-relationship.update', $withnessRelationship->id) : route('withness-relationship.store') }}"
                            method="POST">
                            @csrf
                            @isset($withnessRelationship->id)
                                @method('PUT')
                            @endisset

                            <div class="box mt-3">
                                <div class="box__body" style="width: 100%;">

                                    <div class="form-group">
                                        <label>नाता / सम्बन्ध</label>
                                        <input type="text" name="relationship"
                                            value="{{ old('relationship', $withnessRelationship->relationship) }}"
                                            class="form-control">
                                        @error('relationship')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>


                                    <input type="submit" value="{{ $withnessRelationship->id ? 'Update' : 'Save' }}"
                                        class="btn bg-info text-white">


                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-8">
                        <div class="box mt-3">
                            <div class="box__body" style="width: 100%;overflow-x:scroll">
                                <table class="table table-responsive-sm" id="myTable">
                                    <th>Relationship</th>
                                    <th>Action</th>
                                    @foreach ($withnessRelationships as $withnessRelationship)
                                        <tr>
                                            <td>{{ $withnessRelationship->relationship }}</td>
                                            <td class="text-nowrap text-right">

                                                <a class="action-btn text-primary"
                                                    href="{{ route('withness-relationship.edit', $withnessRelationship) }}"><i
                                                        class="far fa-edit"></i></a>
                                                <form
                                                    action="{{ route('withness-relationship.delete', $withnessRelationship) }}"
                                                    method="post" onsubmit="return confirm('के तपाईँ निश्चित हुनुहुन्छ?')"
                                                    class="form-inline d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="action-btn text-danger"><i
                                                            class="far fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
