<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    /*
    can return views.
    */
    //second argument is used to pass data from db to show it via forntend
    $pizzas = [
        // array 1
        [
            'type' => 'Regular', 'base' => 'Cheesy Crust', 'price' =>  10
        ],
        // array 2
        [
            'type' => 'Veg', 'base' => 'Garlic Crust', 'price' =>  10
        ],
        // array 3
        [
            'type' => 'BBq', 'base' => 'Thin & Crispy', 'price' =>  10
        ],
    ];
    // used for query parameter passed in the url
    $name = request('name');
    return view('pizzas', [
        'pizzas' => $pizzas,
        'name' => $name,
        'age' => request('age'),
    ]);

    /*
    can also return string. 
    */
    // return "Pizzas.";

    /*
    can also return json.
    */
    // return $pizza=['name' => 'veg-pizza', 'base' => 'classic'];
});

Route::get('/pizzas/{id}', function ($id) {
    // use the id varaible to query the db for a record 
    return view('details', ['id' => $id]);
});
