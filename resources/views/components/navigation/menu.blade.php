@props(['active' => false])

@php
    $classes = 'hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium';

    $active ? $classes = $classes . ' bg-gray-900 text-white' : $classes = $classes . ' text-gray-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
