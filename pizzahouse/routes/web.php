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
//index page
Route::get('/pizzas', 'PizzaController@index');
//web form to add new pizzas
Route::get('/pizzas/create', 'PizzaController@create');
//route parameters(wildcards)
Route::get('/pizzas/{id}', 'PizzaController@show');

