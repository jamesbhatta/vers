
@props(['link'])
<a class="d-flex align-items-center p-4 rounded my-3 card" href="{{ $link ?? '#' }}">
    <h1 class="mr-4">{{ $count ?? null }}</h1>
   <span>{{ $title ?? null }}</span>
</a>
