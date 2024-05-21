@props(['block'])
<div id="{{ $block->id ?? null }}" {{ $attributes }}>
    <script async src="https://telegram.org/js/telegram-widget.js?22" data-telegram-post="{{ $block->data->channelName }}/{{ $block->data->messageId }}" data-width="100%"></script>
</div>
