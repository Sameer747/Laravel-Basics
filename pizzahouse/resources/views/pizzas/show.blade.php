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
        <a href="/pizzas" class="back"><= Back to Pizzas.</a>
    </div>
@endsection
