@foreach($blocks as $block)
    @php($type = \Illuminate\Support\Str::kebab($block->type))
    @if (\Illuminate\Support\Facades\View::exists("editor.js::components.{$type}"))
        <x-dynamic-component
            component="editor.js::{{$type}}"
            class="{{ $prefix }}{{ $type }}"
            :block="$block"
        />
    @else
        <p style="background-color: #FF2D20">{{ $type }}</p>
    @endif
@endforeach
