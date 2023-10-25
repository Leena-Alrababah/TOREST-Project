@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }} style="list-style-type:none;" >
        @foreach ((array) $messages as $message)
            <li style="font-size: 10px; color:red; margin-bottom: 10px">{{ $message }}</li>
        @endforeach
    </ul>
@endif
