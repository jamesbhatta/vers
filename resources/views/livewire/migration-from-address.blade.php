{{-- <h3>{{$death}}</h3> --}}
<div class="row">
    <div class="form-group col-md-4">
        <label for=""><span class="text-danger">*</span>&nbspप्रदेश</label>
        <select class="custom-select" name="province" wire:model="province">
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
        @error('province')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-md-4">
        <label for=""><span class="text-danger">*</span>&nbspजिल्ला </label>
        <select class="custom-select" name="district" wire:model="district">
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
        @error('district')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
  
    <div class="form-group col-md-4">
        <label for=""><span class="text-danger">*</span>&nbspनगरपालिका </label>
        <select class="custom-select" name="municipality" wire:model="municipality">
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
        @error('municipality')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-md-4">
        <label for="">साबिकको ठेगाना </label>
        <input type="text" class="form-control" name="vdc" id="vdc">

        @error('vdc')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
