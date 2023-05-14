<div>
    <select class="custom-select" name="user_id" id="mother_education">
        <option selected class="m-5" value="">प्रयोगकर्ता छान्न्नुहोस्।
        </option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}">
                {{ $user->name }}
            </option>
        @endforeach
    </select>
</div>
