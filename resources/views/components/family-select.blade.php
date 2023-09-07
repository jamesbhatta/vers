<div>
    <select class="custom-select select2" name="id" id="mother_education">
        <option selected class="m-5" value="">परिवार छान्न्नुहोस्।
        </option>
        @foreach ($families as $family)
            <option value="{{ $family->migration_certificate_id }}">
                {{ $family->name }} | ठेगाना :
                {{ $family->migrationCertificate->vdc }} - {{ $family->migrationCertificate->ward_num }}
            </option>
        @endforeach
    </select>
</div>
