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

/*
the rout shows the welcome page the user see first.
*/
Route::get('/', function () {
    return view('welcome');
});

/*
this route goes to the index page where we display all pizza orders.
this is also authenticated via middleware only this route.
*/
Route::get('/pizzas',[PizzaController::class,'index'])->middleware('auth');//get data from db
// Route::get('/pizzas', 'PizzaController@index');//laravel 6

/*
the get route displays the web form to add new pizzas.
the post route helps to add the submitted form to the db so that index page can show it.
*/
Route::get('/pizzas/create',[PizzaController::class,'create']);//display form
Route::post('/pizzas',[PizzaController::class,'store']);//post data to db
// Route::get('/pizzas/create', 'PizzaController@create');laravel 6
// Route::post('/pizzas','PizzaController@store');//laravel 6

/*
the get route shows the pizza assciated to the user via id.
the delete route deletes the pizza so that the order is completed.
the routes are protected via middleware to restrict the access for the customer. 
*/
Route::get('/pizzas/{id}',[PizzaController::class,'show'])->middleware('auth');//display data 
Route::delete('/pizzas/{id}',[PizzaController::class,'destroy'])->middleware('auth');//delete from db[via complete order button]
// Route::get('/pizzas/{id}', 'PizzaController@show');//laravel 6
// Route::delete('/pizzas/{id}','PizzaController@destroy');laravel 6

//auth routes
Auth::routes([
    'register'=> false,
]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
