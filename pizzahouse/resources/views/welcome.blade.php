@extends('layout.layout')
@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <img src="{{ asset('assets/img/pizza-house.png')}}" alt="pizza house logo">
            <div class="title m-b-md">
                {{-- Pizza House <br> --}}
                The North's Best Pizzas.
            </div>
            <p class="msg">{{session('msg')}}</p>
            <a href="/pizzas/create"><button>Order a Pizza</button></a>
            <a href="/pizzas"><button>See all orders</button></a>
        
            {{-- <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div> --}}
        </div>
    </div>
@endsection