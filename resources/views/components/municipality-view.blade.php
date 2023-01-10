<div class="row">
    <div class="col-12 row">
        <div class="form-group col-lg-6">
            <label>नाम,थर </label>
            <input type="text" v-model="form.title" class="form-control" name="title" />
            <small class="text-danger"></small>
        </div>


        <div class="form-group col-lg-6">
            <label for="">जन्मस्थान</label>
            <div class="input-group mb-2">
                <input type="text" class="form-control" />
            </div>
            <small class="text-danger"></small>
        </div>
    </div>


    <div class="col-12 row">
        <div class="form-group col-lg-6">
            <label for="">नागरिकता</label>
            <div class="input-group mb-2">
                <input type="number" class="form-control" />
            </div>
            <small class="text-danger"></small>
        </div>
        <div class="form-group col-lg-6">
            <label for="">ठेगाना </label>

            {{-- <input type="text" clasrol" /> --}}
            <select class="custom-select">
                <option selected class="m-5">प्रदेश छान्न्नुहोस्। </option>
                @php
                $province = '';
            @endphp
            @foreach ($municipalities as $municipality)
                @php

                    if ($province == $municipality->province) {
                        continue;
                    }
                    $province = $municipality->province;

                @endphp
                <option value="">{{ $municipality->province }}</option>
            @endforeach
                </select>
            <small class="text-danger"></small>
        </div>
    </div>
</div>
<div>
    <div>
        <select name="" id="">
            @php
                $district = '';
            @endphp
            @foreach ($municipalities as $municipality)
                @php

                    if ($district == $municipality->district) {
                        continue;
                    }
                    $district = $municipality->district;

                @endphp
                <option value="">{{ $province }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <select name=" " id="">
            @php
                $municipality = '';
            @endphp
            @foreach ($municipalities as $municipality)
                @php

                    if ($municipality == $municipality->municipality) {
                        continue;
                    }
                    $municipality = $municipality->municipality;

                @endphp
                <option value="">{{ $municipality }}</option>
            @endforeach
        </select>
    </div>
</div>
