@php
    $attributes = $field['wrapperAttributes'] ?? $field['attributes'] ?? [];
@endphp

@foreach ($attributes as $attribute => $value)
    {{ $attribute }}="{{ $value }}"
@endforeach
