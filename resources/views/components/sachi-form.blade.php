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

                <input type="text" name="date" id="sachi_nepali_datepicker"
                    value="{{ old('date', $death->date) }}" class="form-control" />
            </div>
            @error('date')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-xl-12">
            <label for="">फोटो वा फाइल (max size: 5 MB | jpeg, png, jpg, pdf)</label>
            <input type="file" name="file" style="display: none" class="file-brows" id="previewImage"
                onchange="imagePreview(this)" />
            <div class="card border previewImage" onclick="document.querySelector('#previewImage').click()">
                <p class="imgPre text-[#15803d] h3">Drag Your File here or Click in this area to Upload</p>
                <div id="previewBox" style="display: none;">
                    <img src="" alt="" class="p-1 img-fluid" style="height: 340px; width:100%;"
                        id="previewImg">
                </div>
            </div>
            @error('file')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    @push('styles')
        <style>
            .previewImage {
                height: 340px;
                background: #f1f1f1;

            }

            .previewImage p {
                margin: auto;
                text-align: center;
                padding: 10px;
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            function imagePreview(input) {
                let file = $("input[type=file]").get(0).files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function() {
                        $('#previewImg').attr('src', reader.result);
                        $("#previewBox").css('display', 'block');
                    }
                    $(".imgPre").css('display', 'none');
                    reader.readAsDataURL(file);
                }
            }
        </script>
    @endpush
