<div>
    <div class="row py-3">
        <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
            <label><span class="text-danger">*</span> पञ्जिकाधिकारीको नाम</label>
            <select name="administrator" class="custom-select myText">
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
            </select>
            {{-- <input type="text" class="form-control" name="administrator" value="sdsf" readonly> --}}
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
            <label><span class="text-danger">*</span> दर्ता न.</label>
            <input type="text" class="form-control" name="reg_number" value="{{ old('reg_number',$death->reg_number) }}">
            @error('reg_number')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-xl-4 col-lg-4 col-md-6 mb-3">
            <label><span class="text-danger">*</span> दर्ता मिति</label>
            <input type="text" name="entry_date" value="{{ old('entry_date',$death->entry_date) }}" id="darta_miti" class="form-control" />
            @error('entry_date')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>
