@props([
    'variant' => 'primary', // primary, secondary, danger
    'size' => 'default', // default, md
    'disabled' => false, // boolean
])

@php
    $baseClasses = 'inline-flex items-center text-sm justify-center gap-2 font-medium rounded-md transition-colors focus-visible:outline-none';

    $sizeClasses = [
        'default' => 'h-9 px-4',
        'md' => 'h-8 px-3',
    ][$size] ?? 'h-9 px-4';

    $variantClasses = [
        'primary' => 'bg-indigo-500 text-white hover:bg-indigo-600',
        'secondary' => 'bg-white text-neutral-800 border border-neutral-200 shadow-sm hover:bg-neutral-50',
        'danger' => 'bg-red-500 text-white hover:bg-red-600',
    ][$variant] ?? 'bg-indigo-500 text-white hover:bg-indigo-600';

    $disabledClasses = $disabled ? 'opacity-60 cursor-not-allowed hover:bg-none' : '';
    $focusClasses = 'focus-visible:ring-1 focus-visible:ring-indigo-500';

    $classes = "$baseClasses $sizeClasses $variantClasses $disabledClasses $focusClasses";
@endphp

<button
    {{ $disabled ? 'disabled aria-disabled=true' : '' }}
    {{ $attributes->merge(['class' => $classes]) }}
>
    {{ $slot }}
</button>