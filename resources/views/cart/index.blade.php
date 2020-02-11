<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Uw winkelwagentje</title>

        <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel='stylesheet'>
    <link href="{{ asset('css/custom.css') }}" rel='stylesheet'>

    </head>
    <body>

    <header>
        <div>
            <h1>Uw winkelwagentje</h1>

            @forelse($cart as $items)
            
            <p>{{ $items->product_id }}</p>
            
            @empty

            <p>No items</p>
            
            @endforelse
        </div>
    </header>



</body>
</html>