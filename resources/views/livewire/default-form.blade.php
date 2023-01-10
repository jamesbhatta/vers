<div class="px-2">
    <div class="container pb-5" style="border-bottom: 1px dashed #ccc">
        <div class="my-4"></div>
        @include('alerts.success')

        <form action="{{ $update_id ? route('settings.sync.update', $update_id) : route('settings.sync.form') }}"
            method="POST" class="form font-noto">
            @csrf
            @isset($update_id->id)
                @method('PUT')
            @endisset
            <div class="row">
                <div class="col-xl-5 col-lg-5 d-block mb-3" style="line-height: 10px">
                    <label style="font-size: 18px;font-weight:bold">Form Default Settings</label><br>
                    <span style="font-size: 12px">General Form Default Setting</span>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="box p-3">
                        <div class="form-group col-12 pb-2">
                            <div style="line-height: 12px">
                                <label style="font-weight: bold">देश</label> <br>
                                <label style="font-size: 15px;color:#6C757D">The default selected name of
                                    country</label>
                            </div>
                            {{-- {{ $country }} --}}
                            {{-- <input type="text" class="form-control" name="country" value="{{ $country }}"> --}}
                            <select name="country" class="custom-select myText" id="">
                                <option value="" >देश छान्न्नुहोस्।</option>
                                @foreach (App\Country::get() as $my_country)
                                    <option value="{{ $my_country->name }}" {{ $my_country->name == $country ? 'selected' : '' }}>{{ $my_country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-12 pb-2">
                            <div style="line-height: 12px">
                                <label style="font-weight: bold">प्रदेश</label> <br>
                                <label style="font-size: 15px;color:#6C757D">The default selected name of
                                    province</label>
                            </div>
                            <select class="custom-select" name="default_province" wire:model="province">
                                <option class="m-5">प्रदेश छान्न्नुहोस्। </option>
                                @php
                                    $provinces = '';
                                @endphp
                                @foreach ($municipalities ?? '' as $municipality)
                                    @php

                                        if ($provinces == $municipality->province) {
                                            continue;
                                        }
                                        $provinces = $municipality->province;

                                    @endphp
                                    <option value="{{ $municipality->province }}">{{ $municipality->province }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-12">
                            <label for="">जिल्ला </label>

                            {{-- <input type="text" clasrol" /> --}}
                            <select class="custom-select" name="default_district" wire:model="district">
                                <option class="m-5">जिल्ला छान्न्नुहोस्। </option>
                                @php
                                    $districts = '';
                                @endphp
                                @foreach ($municipalities ?? '' as $municipality)
                                    @php
                                        if ($districts == $municipality->district) {
                                            continue;
                                        }
                                        $districts = $municipality->district;

                                    @endphp
                                    @if ($province == $municipality->province)
                                        <option value="{{ $municipality->district }}">{{ $municipality->district }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                            <small class="text-danger"></small>
                        </div>



                        <div class="form-group col-12 pb-2">
                            <div style="line-height: 12px">
                                <label style="font-weight: bold">नगरपालिका</label> <br>
                                <label style="font-size: 15px;color:#6C757D">The default selected name of
                                    municipality</label>
                            </div>
                            {{-- <input type="text" clasrol" /> --}}
                            <select class="custom-select" name="default_municipality" wire:model="municipality">
                                <option class="m-5">नगरपालिका छान्न्नुहोस्। </option>
                                @php
                                    $municipalitys = '';
                                @endphp
                                @foreach ($municipalities ?? '' as $municipality)
                                    @php
                                        if ($municipalitys == $municipality->municipality) {
                                            continue;
                                        }
                                        $municipalitys = $municipality->municipality;

                                    @endphp
                                    @if ($district == $municipality->district)
                                        <option value="{{ $municipality->municipality }}">
                                            {{ $municipality->municipality }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <small class="text-danger"></small>
                        </div>

                        <div class="form-group col-12 pb-2">
                            <div style="line-height: 12px">
                                <label style="font-weight: bold">पञ्जिकाधिकारी</label> <br>
                                <label style="font-size: 15px;color:#6C757D">The default selected name of
                                    country</label>
                            </div>
                            <select name="default_registaar" class="custom-select myText" wire:model="my_default_registaar">
                                <option selected value="">पञ्जिकाधिकारी छान्न्नुहोस्।</option>
                                @foreach ($registaars as $registaar)
                                    <option value="{{ $registaar->name }}">{{ $registaar->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-12 pb-2">
                            <div style="line-height: 12px">
                                <label style="font-weight: bold">मातृभाषा</label> <br>
                                <label style="font-size: 15px;color:#6C757D">The default selected name of
                                    country</label>
                            </div>
                            <select name="default_mother_tongue" class="custom-select myText" wire:model="my_default_tongue">
                                <option selected value="">मातृभाषा छान्न्नुहोस्।</option>
                                @foreach ($mothertongues as $mothertongue)
                                    <option value="{{ $mothertongue->name }}">{{ $mothertongue->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="p-3 text-right" style="background-color:#f9fafb">
                            <button class="btn my-0 rounded z-depth-0 font-16px py-2 px-4 waves-effect waves-light"
                                type="submit" style="background-color:#374f67; color: #fff;">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
