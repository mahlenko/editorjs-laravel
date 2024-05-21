@props(['block'])
<p id="{{ $block->id ?? null }}" {{ $attributes }}>{!! $block->data->text !!}</p>
