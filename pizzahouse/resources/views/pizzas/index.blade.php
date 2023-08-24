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
            {{-- @php
                $name='Sameer';
                echo($name);
            @endphp --}}
            {{-- @for ($i=0 ;$i < count($pizzas) ;$i++)
                <p>{{$i}}- {{$pizzas[$i]['type']}} - {{$pizzas[$i]['base']}} - {{$pizzas[$i]['price']}}</p>
            @endfor --}}

            {{-- this was used for query parameter. --}}
            {{-- <p>{{ $name }} - {{ $age }}</p> --}}
            
            @foreach ($pizzas as $p)
                <div>
                    {{-- this was used when the data was an array made by me --}}
                    {{-- {{ @$loop->index }} - {{ $p['type'] }} - {{ $p['base'] }} - {{ $p['price'] }} --}}
                    
                    {{$p->name}} - {{$p->type}} - {{$p->base}}
                </div>
            @endforeach
            <p class="msg">{{session('msg')}}</p>
            <a href="/"><button>Back to Home</button></a>
        </div>
    </div>
@endsection
