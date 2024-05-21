@props(['block'])
{{ $attributes->setAttributes(['class' => "{$attributes->get('class')}-{$block->data->level}"]) }}

<h{{ $block->data->level }}
    id="{{ $block->id ?? null }}"
    {{ $attributes }}
>{{ $block->data->text }}</h{{ $block->data->level }}>
