@props(['tags'])

@php
$tags = explode(',',$tags)
@endphp

{{-- @foreach ($tags as $tag)
<span class="badge bg-dark text-white me-2 mb-2">{{$tag}}</span>
@endforeach --}}


<ul class="d-flex flex-wrap list-unstyled">
    @foreach ($tags as $tag)
    <li class="bg-dark text-white rounded px-3 py-1 me-2 mb-2">
        <a href="/?tag={{$tag}}" class="text-white text-decoration-none">{{$tag}}</a>
    </li>
    @endforeach
</ul>