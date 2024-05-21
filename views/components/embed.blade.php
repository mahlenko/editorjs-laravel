@props(['block'])

<iframe
    id="{{ $block->id ?? null }}"
    {{ $attributes }}
    src="{{ $block->data->embed }}"
    width="{{ $block->data->width }}"
    height="{{ $block->data->height }}"
    scrolling="no"
    frameborder="0"
    allowtransparency="true"
    allowfullscreen="true"
></iframe>
