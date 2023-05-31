<div class="form-group col-md-4">
    <label for="">घर मुली संगको नाता</label>
    <select id="relationship" name="relationship" class="custom-select myText"
        value="{{ old('relationship', $family->relationship) }}"
        onchange="withnessSelect()">
        <option value="" disabled selected>छान्नुहोस्</option>
        @foreach ($withnessRelationships as $withnessRelationship)
            <option value="{{ $withnessRelationship->relationship }}"
                {{ $family->relationship == $withnessRelationship->relationship || old('relationship') == $withnessRelationship->relationship ? 'selected' : '' }}>
                {{ $withnessRelationship->relationship }}</option>
        @endforeach
    </select>

    @error('relationship')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>