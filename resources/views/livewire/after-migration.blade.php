<div class="row">
    <div class="form-group col-md-4">
        <label for="">प्रदेश</label>
        <select class="custom-select" name="migration_province" wire:model="province">
            <option value="" class="m-5">प्रदेश छान्न्नुहोस्। </option>
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
        @error('migration_province')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-md-4">
        <label for="">जिल्ला </label>
        <select class="custom-select" name="migration_district" wire:model="district">
            <option value="" class="m-5">जिल्ला छान्न्नुहोस्। </option>
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
        @error('migration_district')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="">नगरपालिका </label>

        <select class="custom-select" name="migration_municipality" wire:model="municipality">
            <option value="" class="m-5">नगरपालिका छान्न्नुहोस्। </option>
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
        @error('migration_municipality')
            <small class="text-danger">{{ $message }}</small>
        @enderror

    </div>

    <div class="form-group col-md-4">
        <label for="">साबिकको गा.वि.स.</label>
        <input type="text" class="form-control" name="migration_vdc" id="migration_vdc" wire:model="vdc">
        @error('migration_vdc')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
