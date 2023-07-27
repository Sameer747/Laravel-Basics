@extends('layout.layout')
@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Pizzas List.
            </div>
            {{-- for learning purpose on how blade works. --}}
            {{-- <p>{{ $type }} - {{ $base }} - {{ $price }}</p> --}}
            {{-- @if ($price > 10)
                <p>The price is too high.</p>
            @elseif ($price < 10)
                <p>The price is too cheap.</p>
            @else
                <p>The price is economic.</p>
            @endif
            opposite of if $base is cheesy crust it won't output the p tag below
            if it's not cheesy crust it will output the below p tag
            @unless ($base == 'Cheesy Crust')
                <p>You don't have cheesy crust</p>
            @endunless --}}
            <p>{{ $name }} - {{ $age }}</p>
            @foreach ($pizzas as $p)
                <div>
                    {{ @$loop->index }} - {{ $p['type'] }} - {{ $p['base'] }} - {{ $p['price'] }}
                </div>
            @endforeach
        </div>
    </div>
@endsection
