<label for=""><span class="text-danger">*</span> मातृभाषा </label>
@php
    $my_default_mother_tongue = '';
@endphp
@php
    $default_data = '';
    if (App\Mysetting::first()) {
        $default_data = App\Mysetting::first()->default_mother_tongue;
    }

    if ($default_data != null) {
        $my_default_mother_tongue = App\Mysetting::first()->default_mother_tongue;
    }
@endphp
<select class="custom-select myText" name="{{ $name }}" id={{ $id }}>
    @foreach ($mothertongues as $mothertongue)
        <option value="{{ $mothertongue->name }}"
            @if ($userdata->$name) {{ $userdata->$name == $mothertongue->name ? 'selected' : '' }}
            @else
                @if (old($name))
                    {{ old($name) == $mothertongue->name ? 'selected' : '' }}
                @else
                    {{ $my_default_mother_tongue == $mothertongue->name ? 'selected' : '' }}
                @endif
            @endif> {{ $mothertongue->name }}
        </option>
    @endforeach
    {{-- <div>
        <option value="थारु"
            {{ $marriage->bride_mother_tongue == 'थारु' || old('bride_mother_tongue') == 'थारु' ? 'selected' : '' }}>
            थारु
        </option>
        <option value="नेपाली"
            {{ $marriage->bride_mother_tongue == 'नेपाली' || old('bride_mother_tongue') == 'नेपाली' ? 'selected' : '' }}>
            नेपाली
        </option>
        <option value="अन्य"
            {{ $marriage->bride_mother_tongue == 'अन्य' || old('bride_mother_tongue') == 'अन्य' ? 'selected' : '' }}>
            अन्य
        </option>
    </div> --}}
</select>
@error('bride_mother_tongue')
    <small class="text-danger">{{ $message }}</small>
@enderror
