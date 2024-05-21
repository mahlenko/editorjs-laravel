@props(['block'])
<blockquote id="{{ $block->id ?? null }}"
    {{ $attributes }}
    data-alignment="{{ $block->data->alignment }}">
    <p>{{ $block->data->text }}</p>
    @if ($block->data->caption)
    <footer>{{ $block->data->caption }}</footer>
    @endif
</blockquote>
