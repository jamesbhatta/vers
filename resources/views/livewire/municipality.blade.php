<div class="row">
    <div class="form-group col-xl-4 col-lg-4 col-md-6">
        <label for=""><span class="text-danger">*</span> Book Code</label>
        @php
            $selected_book_id = $book;
            $exist = '0';
            $book_code = '';
        @endphp

        @foreach ($books as $mybook)
            @if ($selected_book_id == $mybook->id)
                @php
                    $exist = '1';
                    $book_code = $mybook->code;
                @endphp
            @endif
        @endforeach

        @if ($exist == '1')
            <select name="book_id" class="custom-select" id="" wire:model="book_id" aria-readonly="true">
                @foreach ($books as $book)
                    @if ($book->book_type == $mtype)
                        <option value="{{ $book->id }}" {{ $book_id == $book->id ? '' : 'disabled' }}>
                            {{ $book->code }}</option>
                    @endif
                @endforeach
            </select>
            {{-- <input type="text" name="book_id" readonly  class="form-control" wire:model="book_id"> --}}
        @else
            <select name="book_id" class="custom-select" id="" wire:model="book_id"
                wire:click="changeEvent($event.target.value)">
                @foreach ($books as $book)
                    @if ($book->book_type == $mtype)
                        <option value="{{ $book->id }}">{{ $book->code }}</option>
                    @else
                        {{-- <option value="{{ $book->id }}">{{ $book->code }}</option> --}}
                    @endif
                @endforeach
            </select>
        @endif
        @error('province')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-xl-4 col-lg-4 col-md-6">
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

    <div class="form-group col-xl-4 col-lg-4 col-md-6">
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


    <div class="form-group col-xl-4 col-lg-4 col-md-6">
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

    <div class="form-group col-xl-4 col-lg-4 col-md-6">
        <label for=""><span class="text-danger">*</span> Ward number </label>

        <input type="text" class="form-control" name="ward_num" wire:model="ward_num">
        @error('municipality')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>


    <div class="form-group col-xl-4 col-lg-4 col-md-6">
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

    <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
        <label><span class="text-danger">*</span> पञ्जिकाधिकारीको नाम</label>
        {{-- <select name="administrator" class="custom-select myText" aria-readonly="">
            @foreach ($registaars as $registaar)
                @if ($death->administrator)
                    <option value="{{ $registaar->name }}"
                        {{ $death->administrator == $registaar->name ? 'selected' : '' }}>{{ $registaar->name }}
                    </option>
                @else
                    <option value="{{ $registaar->name }}"
                        {{ $default_registaar == $registaar->name ? 'selected' : '' }}>{{ $registaar->name }}
                    </option>
                @endif
            @endforeach
        </select> --}}
        <input type="text" class="form-control" name="administrator" wire:model="administrator" readonly>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
        <label><span class="text-danger">*</span> दर्ता न.</label>
        <input type="text" class="form-control" name="reg_number" wire:model="reg_number">
        @error('reg_number')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-xl-4 col-lg-4 col-md-6 mb-3">
        <label><span class="text-danger">*</span> दर्ता मिति</label>
        <input type="text" name="entry_date" id="darta_miti" class="form-control" wire:model="entry_date" />
        @error('entry_date')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
