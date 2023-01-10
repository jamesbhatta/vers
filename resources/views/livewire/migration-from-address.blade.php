{{-- <h3>{{$death}}</h3> --}}
<div class="row">
    <div class="form-group col-3">
        <label for="">प्रदेश</label>
        <select class="custom-select" name="before_province" wire:model="province">
            <option class="m-5" value="">प्रदेश छान्न्नुहोस्। </option>
            @php
                $provinces = '';
            @endphp
            @foreach ($addresses ?? '' as $address)
                @php

                    if ($provinces == $address->province) {
                        continue;
                    }
                    $provinces = $address->province;

                @endphp
                <option value="{{ $address->province }}"
                    {{ $address->province == $address->province ? 'selected' : '' }}>
                    {{ $address->province }}</option>
            @endforeach
        </select>
        @error('before_province')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group col-3">
        <label for="">जिल्ला </label>
        <select class="custom-select" name="before_district" wire:model="district">
            <option class="m-5" value="">जिल्ला छान्न्नुहोस्। </option>
            @php
                $districts = '';
            @endphp
            @foreach ($addresses ?? '' as $address)
                @php
                    if ($districts == $address->district) {
                        continue;
                    }
                    $districts = $address->district;

                @endphp
                @if ($province == $address->province)
                    <option value="{{ $address->district }}"
                        {{ $address->district == $address->district ? 'selected' : '' }}>
                        {{ $address->district }}</option>
                        @endif
                @endforeach
        </select>
        @error('before_district')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-3">
        <label for="">साबिकको ठेगाना </label>
        {{-- <input type="text" clasrol" /> --}}
        <select class="custom-select" name="before_vdc" wire:model="vdc">
            <option class="m-5" value="">साबिकको ठेगाना छान्न्नुहोस्। </option>
            @foreach ($vdcs ?? '' as $vdc)
                <option value="{{ $vdc->vdc }}" {{ $vdc->vdc == $address->vdc ? 'selected' : '' }}>
                    {{ $vdc->vdc }}</option>
            @endforeach
        </select>
        @error('vdc')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-3">
        <label for="">नगरपालिका </label>
        <select class="custom-select" name="before_municipality" wire:model="municipality">
            <option class="m-5" value="">नगरपालिका छान्न्नुहोस्। </option>
            @php
                $municipalitys = '';
            @endphp
            @foreach ($addresses ?? '' as $address)
                @php
                    if ($municipalitys == $address->municipality) {
                        continue;
                    }
                    $municipalitys = $address->municipality;

                @endphp
                @if ($district == $address->district)
                    <option value="{{ $address->municipality }}"
                        {{ $address->municipality == $address->municipality ? 'selected' : '' }}>
                        {{ $address->municipality }}</option>
                @endif
            @endforeach
        </select>
        @error('before_municipality')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
