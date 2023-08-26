<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
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
Route::get('/pizzas',[PizzaController::class,'index']);//get data from db
// Route::get('/pizzas', 'PizzaController@index');//get data from db
//web form to add new pizzas
Route::get('/pizzas/create',[PizzaController::class,'create']);
// Route::get('/pizzas/create', 'PizzaController@create');
Route::post('/pizzas',[PizzaController::class,'store']);
// Route::post('/pizzas','PizzaController@store');//post data to db
//route parameters(wildcards)
Route::get('/pizzas/{id}',[PizzaController::class,'show']);
// Route::get('/pizzas/{id}', 'PizzaController@show');
Route::delete('/pizzas/{id}',[PizzaController::class,'destroy']);//delete from db
// Route::delete('/pizzas/{id}','PizzaController@destroy');
//auth routes
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
