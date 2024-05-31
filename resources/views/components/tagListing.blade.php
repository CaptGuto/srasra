@props(['tags'])

@php
$tags = explode(',',$tags)
@endphp
@foreach ($tags as $tag)
<span class="badge bg-dark text-white me-2 mb-2">{{$tag}}</span>
@endforeach