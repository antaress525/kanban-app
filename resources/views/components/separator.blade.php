@php
    $class = 'block bg-neutral-200 h-[1px]';
@endphp
<span {{ $attributes->merge(['class' => $class]) }}></span>