@props(['block'])

{{--@dump($block)--}}
@php($tag = $block->data->style === 'ordered' ? 'ol' : 'ul')

<{{ $tag }} id="{{ $block->id ?? null }}" {{ $attributes }}>
@foreach($block->data->items as $item)
    <li>{{ $item }}</li>
@endforeach
</{{ $tag }}>
