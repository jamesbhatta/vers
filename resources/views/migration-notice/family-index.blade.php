@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="p-3">
            <div class="container-fluid font-noto">
                <nav aria-label="breadcrumb" class="d-flex justify-content-between rounded">
                    <div class="my-breadcrumb">
                        <a class="first-breadcrumb" href="{{ route('migration.index') }}">बसाईसराई दर्ता</a>
                        <a class="sub-breadcrumb" href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                        <a class="final-item ml-3" href="">@lang('navigation.migration-notice-form')</a>
                    </div>
                </nav>
                <label class="font-weight-bold pb-4 border-bottom col-12" style="font-size: 20px;padding:0"></label>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span><i class="bi bi-x-circle-fill"></i></span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header d-flex justify-content-between" style="cursor: pointer" id="cardHeader">
                        <h5 style="font-size: 20px">@lang('navigation.find-out-migration')</h5>
                        <h5 style="font-size: 20px"><i class="fas fa-chevron-down"></i></h5>
                    </div>
                    <div class="card-body" id="cardBody">
                        <form action="{{ route('family.filter') }}" method="get">

                            <div class="pb-2 d-flex justify-content-between">
                                <h3 class="text-center">बसाई सर्ने परिवारका सदस्यहरुको नाम/बसाई सराई व्यक्तिको </h3>
                            </div>
                            <div class="wrapper mt-1">
                                <div class="row" id="survey_options">
                                    <x-relationship-select />
                                    <div class="form-group col-md-4">
                                        <label>नाम,थर </label>
                                        <input type="text" class="form-control myText" name="name" />
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">जन्मस्थान</label>
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control myText" name="birthplace" />
                                        </div>
                                        @error('birthplace')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">लिङ्ग </label>
                                        <select class="custom-select" name="gender">
                                            <option selected class="m-5" value="">छान्न्नुहोस्।
                                            </option>
                                            <option value="पुरुष">
                                                पुरुष</option>
                                            <option value="महिला">
                                                महिला</option>

                                            <option value="अन्य">
                                                अन्य </option>

                                        </select>
                                        @error('gender')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">नागरिकता न.</label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="citizenship" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">स्थायी ठेगाना</label>
                                        <input class="form-control myText" name="permanent_address"
                                            placeholder="स्थायी ठेगाना" value="" />
                                        @error('permanent_address')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">अस्थायी ठेगाना</label>
                                        <input class="form-control myText" name="temporary_address"
                                            placeholder="अस्थायी ठेगाना" />
                                        @error('temporary_address')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">&nbsp;शैक्षिक योग्यता</label>
                                        <div class="input-group mb-2">
                                            <select class="custom-select" name="education">
                                                <option selected class="m-5" value="">छान्न्नुहोस्।
                                                </option>
                                                <div>
                                                    <option value="निरक्षर">
                                                        निरक्षर
                                                    </option>
                                                    <option value="साधरण">
                                                        साधरण
                                                    </option>
                                                    <option value="एस.एल.सी">
                                                        एस.एल.सी
                                                    </option>
                                                    <option value="प्रमाणपत्र">
                                                        प्रमाणपत्र
                                                    </option>
                                                    <option value="स्नातक">
                                                        स्नातक
                                                    </option>
                                                    <option value="स्नातकोत्तर">
                                                        स्नातकोत्तर</option>
                                                    <option value="विद्या वारिधि">
                                                        विद्या वारिधि
                                                    </option>
                                                </div>
                                            </select>
                                        </div>
                                        @error('education')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>&nbsp;धर्म</label>
                                        <select class="custom-select" name="religion">

                                            <option value="">छान्नुहोस्</option>
                                            <option value="हिन्दु">हिन्दु</option>
                                            <option value="बौद्ध">बौद्ध </option>
                                            <option value="मुस्लिम">क्रिश्चियन </option>
                                            <option value="मुस्लिम">मुस्लिम </option>
                                            <option value="अन्य">अन्य</option>

                                        </select>
                                        @error('religion')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label>&nbsp;उमेर </label>
                                        <div class="input-group mb-2">
                                            <input type="number" name="age" class="form-control myText" />
                                        </div>
                                        @error('age')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label for="">&nbsp;मातृभाषा </label>
                                        <select class="custom-select" name="mothertongue">
                                            <option value="">छान्नुहोस्</option>
                                            <option value="नेपाली">
                                                नेपाली </option>
                                            <option value="थारु">
                                                थारु </option>

                                            <option value="अन्य">
                                                अन्य </option>

                                        </select>
                                        @error('mothertongue')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                </div>
                                <input type="submit" class=" btn btn-success bg-success" value="Search" />

                        </form>
                    </div>
                </div>

                <div class="box mt-3">
                    <div class="box__body">
                        <div class="table-responsive">
                            <table class="table table-responsive-sm m-3" style="white-space: nowrap">
                                <thead class="thead-light">
                                    <tr class="text-uppercase">
                                        <th>#</th>
                                        <th>बसाईसराई</th>

                                        <th>नाम,थर</th>
                                        <th>लिङ्ग</th>
                                        <th>नाता / सम्बन्ध</th>
                                        <th> जन्मस्थान </th>
                                        <th>नागरिकता न.</th>
                                        <th> ठेगाना </th>
                                        <th>उमेर</th>
                                        <th>शैक्षिक योग्यता</th>
                                        <th class="text-right">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($families as $family)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>
                                                <div>
                                                    किताब कोड :{{ $family->migrationCertificate->book->code ?? '' }}
                                                </div>


                                                <div>दर्ता नं. :{{ $family->migrationCertificate->reg_number }}</div>

                                                <div>दर्ता मिति: {{ $family->migrationCertificate->entry_date }}</div>
                                                <div>
                                                    गा.वि.स./वार्ड नं. :
                                                    {{ $family->migrationCertificate->vdc }}-{{ $family->migrationCertificate->ward_num }}
                                                </div>
                                            </td>

                                            <td>{{ $family->name }}</td>
                                            <td>{{ $family->gender }}</td>
                                            <td>{{ $family->relationship }}</td>
                                            <td>{{ $family->birthplace }}</td>
                                            <td>{{ $family->citizenship }}</td>
                                            <td> {{ $family->permanent_address }}</td>
                                            <td>{{ $family->age }}</td>
                                            <td>{{ $family->education }}</td>
                                            <td class="text-nowrap text-right">
                                                <a href="{{ route('migration.add-family', $family->migrationCertificate->id) }}"
                                                    class="action-btn text-primary" data-toggle="tooltip"
                                                    data-placement="top" title="Add Family"><i
                                                        class="fas fa-plus-circle "></i></a>
                                                @if ($family->migrationCertificate->file)
                                                    <a href="{{ asset('storage/' . $family->migrationCertificate->file) }}"
                                                        data-toggle="tooltip" data-placement="top" title="File view"
                                                        target="_blank"><i class="fas fa-file-image"></i>
                                                    </a>
                                                @endif
                                                <a href="{{ route('migration.show', $family->migrationCertificate) }}"
                                                    class="action-btn text-primary show" target="_blank"><i
                                                        class="fa fa-eye"></i></a>
                                                <a href="{{ route('migration.edit', $family->migrationCertificate->id) }}"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="Edit migration notice" class="action-btn text-primary"><i
                                                        class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">No Data Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-sm text-gray-700 leading-5">
                                    {!! __('Showing') !!}
                                    @if ($families->firstItem())
                                        <span class="font-medium">{{ $families->firstItem() }}</span>
                                        {!! __('to') !!}
                                        <span class="font-medium">{{ $families->lastItem() }}</span>
                                    @else
                                        {{ $families->count() }}
                                    @endif
                                    {!! __('of') !!}
                                    <span class="font-medium">{{ $families->total() }}</span>
                                    {!! __('results') !!}
                                </p>
                            </div>
                            <div>
                                {{ $families->links() }}
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
