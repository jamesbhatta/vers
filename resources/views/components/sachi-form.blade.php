<div class="card mt-3 p-3 pb-2">
    <div class="row">
        <div class="form-group col-md-4">
            <label for="">{{ $relation }} संगको नाता</label>
            <input list="relationships" id="relationship" name="relationship" class="form-control myText"
                value="{{ old('relationship', $death->relationship) }}" oninput="relationship()">
            <datalist id="relationships">
                <option value="हजुर बुबा">
                <option value="बुवा">
                <option value="आमा">
            </datalist>


            @error('relationship')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label><span class="text-danger ">*</span> साक्षीको नाम </label>

            <input type="text" name="relative_name" class="form-control myText"
                value="{{ old('relative_name', $death->relative_name) }}">
            @error('relative_name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for=""><span class="text-danger">*</span> साक्षीको ठेगाना</label>
            <div class="input-group mb-2">

                <input type="text" name="relative_address" class="form-control myText"
                    value="{{ old('relative_address', $death->relative_address) }}" />
            </div>
            @error('relative_address')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for=""> साक्षी मिति</label>
            <div class="input-group mb-2">

                <input type="text" name="date" id="sachi_nepali_datepicker"
                    value="{{ old('date', $death->date) }}" class="form-control" />
            </div>
            @error('date')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="d-flex align-items-center col-12">
            <div class="form-group col-xl-6">
                <label for="">फाइल (max size: 2 MB | jpeg, png, jpg, pdf)</label>
                <div class="input-group mb-2">
                    <input type="file" name=file class="file-brows" id="fileInput" />
                </div>
                @error('file')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-xl-6">
                @if ($death->file)
                    <a href="{{ asset('storage/' . $death->file) }}" target="_blank">
                       <div><i class="fas fa-file-image"  style="font-size: 100px;"></i></div>
                       <div>View File</div> 
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
{{-- @push('script')
    <script>
        document.getElementById('fileInput').addEventListener('change', function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        });

        $(document).on("click", ".output_modal", function() {
            var output = document.getElementById('img_model');
            output.src = this.src;
        });
    </script>
@endpush --}}
