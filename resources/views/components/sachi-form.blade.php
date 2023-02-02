
    <div class="card mt-3 p-3 pb-2">
        <div class="row">

            <div class="form-group col-xl-3 col-lg-4 col-md-6">
                <label><span class="text-danger ">*</span> साक्षीको नाम </label>

                <input type="text" name="relative_name" class="form-control myText"
                    value="{{ old('relative_name', $death->relative_name) }}">
                @error('relative_name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group col-xl-3 col-lg-4 col-md-6">
                <label for=""><span class="text-danger">*</span> साक्षीसंगको सम्बन्ध</label>
                <div class="input-group mb-2">

                    <input type="text" name="relationship" class="form-control myText"
                        value="{{ old('relationship', $death->relationship) }}" />
                </div>
                @error('relationship')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group col-xl-3 col-lg-4 col-md-6">
                <label for=""><span class="text-danger">*</span> साक्षीको ठेगाना</label>
                <div class="input-group mb-2">

                    <input type="text" name="relative_address" class="form-control myText"
                        value="{{ old('relative_address', $death->relative_address) }}" />
                </div>
                @error('relative_address')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group col-xl-3 col-lg-4 col-md-6">
                <label for=""><span class="text-danger">*</span> साक्षी मिति</label>
                <div class="input-group mb-2">

                    <input type="text" name="date" id="sachi_nepali_datepicker" value="{{ old('date', $death->date) }}"
                        class="form-control" />
                </div>
                @error('date')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-xl-12">
                <label for="">फाइल (max size: 2 MB | jpeg, png, jpg, pdf)</label>
                <div class="input-group mb-2">

                    <input type="file" name=file class="file-brows" />
                </div>
                @error('file')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

        </div>
    </div>
