{{-- <span> --}}

    <div class="form-group col-xl-3 col-lg-4 col-md-6">
        <label><span class="text-danger">*</span> नाम,थर </label>
        <input type="text" name="name" value="{{ old('name',$death->name) }}" class="form-control myText" />
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group col-xl-3 col-lg-4 col-md-6">
        <label for=""><span class="text-danger">*</span> हजुरबुबाको नाम</label>
        <div class="input-group mb-2">

            <input type="text" name="grandfather_name" value="{{ old('grandfather_name',$death->grandfather_name) }}" class="form-control myText" />
        </div>
        @error('grandfather_name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group col-xl-3 col-lg-4 col-md-6">
        <label for=""><span class="text-danger">*</span> जन्म मिति</label>
        <div class="input-group mb-2">
            <input type="text" id="dob" name="dob" class="form-control"
                value="{{ old('dob',$death->dob) }}" />
        </div>
        @error('dob')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>


    <div class="form-group col-xl-3 col-lg-4 col-md-6">
        <label for=""><span class="text-danger">*</span> लिङ्ग</label>
        <div class="input-group mb-2">
            <select class="custom-select" name="gender">
                <option class="m-5" selected disabled value="">छान्न्नुहोस्। </option>
                <div>
                    <option value="पुरुष" {{ $death->gender == "पुरुष" || old('gender')=="पुरुष" ? 'selected' : '' }}>पुरुष</option>
                    <option value="महिला" {{ $death->gender == "महिला" || old('gender')=="महिला" ? 'selected' : '' }}>महिला</option>
                    <option value="अन्य" {{ $death->gender == "अन्य" || old('gender')=="अन्य" ? 'selected' : '' }}>अन्य</option>
                </div>
            </select>
        </div>
        @error('gender')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>


{{-- </span> --}}
