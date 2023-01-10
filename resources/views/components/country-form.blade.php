<label for=""><span class="text-danger">*</span> {{ $label }} </label>
<div class="input-group mb-2">
    @php
        $default_country = '';
    @endphp
    @php
        $default_country_data = '';
        if (App\Mysetting::first()) {
            $default_country_data = App\Mysetting::first()->country;
        }

        if ($default_country_data != null) {
            $default_country = App\Mysetting::first()->country;
        }
    @endphp
    <select name="{{ $name }}" class="custom-select myText" id="">
        @foreach ($countries as $country)
            <option value="{{ $country->name }}"
                @if ($usercountry->$name) {{ $usercountry->$name == $country->name ? 'selected' : '' }}
                    @else
                    @if (old($name))
                    {{ old($name) == $country->name ? 'selected' : '' }}
                    @else
                    {{ $country->name == $default_country ? 'selected' : '' }} @endif
                @endif>
                {{ $country->name }}</option>
        @endforeach
    </select>
</div>
@error('groom_birth_country')
    <small class="text-danger">{{ $message }}</small>
@enderror
