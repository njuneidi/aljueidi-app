@props(['name'])

@php
    $classes = 'py-2 px-4 bg-blue-400 shadow uppercase duration-500 text-white hove:bg-blue-500';

@endphp

<button {{ $attributes->class([$classes]) }}>
    {{ $name }}
</button>
