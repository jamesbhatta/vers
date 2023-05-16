<div class="card mt-3 p-3 pb-2">
    <div class="row">
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
            <label for="">{{$relation}} संगको नाता</label>
            <input list="relationships" id="relationship" name="relationship" class="form-control myText"
                value="{{ old('relationship', $death->relationship) }}">
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
            <div class="form-group col-xl-6">
                <img id="output" class="output_modal" src="{{ asset('storage/' . $death->file) }}"
                    style="height: 150px" data-toggle="modal" data-target=".img-model">
                <div class="modal fade img-model" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content p-3">
                            <img id="img_model" style="height: 90vh; object-fit: contain;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@push('script')
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
@endpush
