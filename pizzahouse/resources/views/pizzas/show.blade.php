@extends('layout.layout')
@section('content')
    {{-- <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Pizzas List - {{ $id }}.
            </div>

        </div>
    </div> --}}
    <div class="wrapper pizza-details">
        <h1>Order for {{$pizza->name}}</h1>
        <p class="type">Type - {{$pizza->type}}</p>
        <p class="base">Base - {{$pizza->base}}</p>
        <p class="toppings">Extra toppings:</p>
        @foreach ($pizza->toppings as $topping)
            <ul>
                <li>{{ $topping }}</li>
            </ul>
        @endforeach
    </div>
    <a href="/pizzas" class="back"><button>Back to Pizzas</button></a>
@endsection
