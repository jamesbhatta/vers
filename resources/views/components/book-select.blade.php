<div>
    <select class="custom-select" name="book_id" id="book_id">
        <option selected class="m-5" value="">किताब कोड छान्न्नुहोस्।</option>
        @foreach ($books as $book)
            <option value="{{ $book->id }}">
                {{ $book->code }}
            </option>
        @endforeach
    </select>
</div>
