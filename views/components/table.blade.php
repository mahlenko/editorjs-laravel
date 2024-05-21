@props(['block'])
<table
    id="{{ $block->id ?? null }}"
    {{ $attributes }}
>
    @if ($block->data->withHeadings)
        <thead>
        <tr>
            @foreach($block->data->content[0] as $column)
                <th>{{ $column }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach(array_slice($block->data->content, 1) as $row)
            <tr>
                @foreach($row as $column)
                    <td>{{ $column }}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    @else
    <tbody>
    @foreach($block->data->content as $row)
        <tr>
            @foreach($row as $column)
                <td>{{ $column }}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
    @endif
</table>
