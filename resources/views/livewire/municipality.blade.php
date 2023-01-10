<div class="row">
    <div class="form-group col-xl-3 col-lg-4 col-md-6">
        <label for=""><span class="text-danger">*</span> प्रदेश</label>
        <select class="custom-select" name="province" wire:model="province">
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
                <option value="{{ $municipality->province }}"
                    {{ $municipality->province == $death->province ? 'selected' : '' }}>
                    {{ $municipality->province }}</option>
            @endforeach
        </select>
        @error('province')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group col-xl-3 col-lg-4 col-md-6">
        <label for=""><span class="text-danger">*</span> जिल्ला </label>

        {{-- <input type="text" clasrol" /> --}}
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
                    <option value="{{ $municipality->district }}"
                        {{ $municipality->district == $death->district ? 'selected' : '' }}>
                        {{ $municipality->district }}</option>
                @endif
            @endforeach
        </select>
        @error('district')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-xl-3 col-lg-4 col-md-6">
        <label for="">साबिकको ठेगाना </label>
        {{-- <input type="text" clasrol" /> --}}
        <select class="custom-select" name="vdc" wire:model="vdc">
            <option class="m-5" value="">साबिकको ठेगाना छान्न्नुहोस्। </option>

            @foreach ($vdcs ?? '' as $vdc)
                <option value="{{ $vdc->vdc }}" {{ $vdc->vdc == $death->vdc ? 'selected' : '' }}>
                    {{ $vdc->vdc }}</option>
            @endforeach
        </select>
        @error('vdc')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-xl-3 col-lg-4 col-md-6">
        <label for=""><span class="text-danger">*</span> नगरपालिका </label>

        {{-- <input type="text" clasrol" /> --}}
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
                    <option value="{{ $municipality->municipality }}"
                        {{ $municipality->municipality == $death->municipality ? 'selected' : '' }}>
                        {{ $municipality->municipality }}</option>
                @endif
            @endforeach
        </select>
        @error('municipality')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

</div>