@extends('layout.layout')
@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a New Pizza.</h1>
        <form action="/pizzas" method="POST">
            {{-- cross site request forgery --}}
            @csrf
            <label for="name">Enter Your Name:</label>
            <input type="text" name="name" id="name">
            <label for="type">Select Pizza Type:</label>
            <select name="type" id="type">
                <option value="margherita">Margherita</option>
                <option value="hawaaian">Hawaaian</option>
                <option value="volcano">Volcano</option>                
            </select>
            <select name="base" id="base">
                <option value="cheesy crust">Chessy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin & crispy">Thin & Crispy</option>                
            </select>
            <input type="submit" value="Order Pizza">
        
        </form>
    </div>
@endsection
