<div class="row">
    <div class="form-group col-3">
        <label for="">प्रदेश</label>
        <select class="custom-select" name="after_province" wire:model="province">
            <option class="m-5">प्रदेश छान्न्नुहोस्। </option>
            @php
                $provinces = '';
            @endphp
            @foreach ($aftermigration ?? '' as $municipality)
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
        @error('after_province')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-3">
        <label for="">जिल्ला </label>
        <select class="custom-select" name="after_district" wire:model="district">
            <option class="m-5">जिल्ला छान्न्नुहोस्। </option>
            @php
                $districts = '';
            @endphp
            @foreach ($aftermigration ?? '' as $municipality)
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
        @error('after_district')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group col-3">
        <label for="">नगरपालिका </label>

        <select class="custom-select" name="after_municipality" wire:model="municipality">
            <option class="m-5">नगरपालिका छान्न्नुहोस्। </option>
            @php
                $municipalitys = '';
            @endphp
            @foreach ($aftermigration ?? '' as $municipality)
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
        @error('after_municipality')
            <small class="text-danger">{{ $message }}</small>
        @enderror

    </div>

    <div class="form-group col-3">
        <label for="">साबिकको ठेगाना</label>
        {{-- <input type="text" clasrol" /> --}}
        <select class="custom-select" name="after_vdc" wire:model="vdc">
            <option class="m-5">साबिकको ठेगाना छान्न्नुहोस्। </option>

            @foreach ($vdcs ?? '' as $vdc)
                <option value="{{ $vdc->vdc }}">
                    {{ $vdc->vdc }}</option>
            @endforeach
        </select>
        {{-- @error('vdc')
            <small class="text-danger">{{ $message }}</small>
        @enderror --}}
    </div>
</div>
