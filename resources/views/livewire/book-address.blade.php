<section class="row w-100 ml-1">
    <div class="col-xl-6">
        <div class="form-group">
            <label for="">Province</label>
            <select name="province" class="custom-select" id="" wire:model="province">
                <option class="m-5" value="">प्रदेश छान्न्नुहोस्। </option>
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
                    <option value="{{ $municipality->province }}">
                        {{ $municipality->province }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="form-group">
            <label for="">District</label>
            <select class="custom-select" name="district" wire:model="district">
                <option class="m-5" value="">जिल्ला छान्न्नुहोस्। </option>
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
                        <option value="{{ $municipality->district }}">
                            {{ $municipality->district }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="form-group">
            <label for="">Municipality</label>
            <select class="custom-select" name="municipality" wire:model="municipality">
                <option class="m-5" value="">नगरपालिका छान्न्नुहोस्। </option>
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
        </div>
    </div>
    {{-- {{ $book }} --}}
    <div class="col-xl-6">
        <div class="form-group">
            <label for="">Ward no.</label>
            <input type="text" name="ward_no" class="form-control" id="" wire:model="ward_number">
        </div>
    </div>
    <div class="col-xl-6">
        <div class="form-group">
            <label for="">Old Address</label>
            <select name="vdc" class="custom-select" id="" wire:model="vdc">
                @foreach ($vdcs as $vdc)
                <option value="{{ $vdc->vdc }}">{{ $vdc->vdc }}</option>
            @endforeach
            </select>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="form-group">
            <label for="">Registar</label>
            <select name="registaar" class="custom-select" id="" wire:model="registaar">
                @foreach ($registars as $registaar)
                    <option value="{{ $registaar->name }}">{{ $registaar->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

</section>
