<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    
    /*
    for /pizzas route
    */ 
    public function index () {
        /*
        can return views.
        
        second argument is used to pass data from db to show it via forntend
        $pizzas = [
            // array 1
            ['type' => 'Regular', 'base' => 'Cheesy Crust', 'price' =>  10],
            // array 2
            ['type' => 'Veg', 'base' => 'Garlic Crust', 'price' =>  10],
            // array 3
            ['type' => 'BBq', 'base' => 'Thin & Crispy', 'price' =>  10],
        ];
        $name & age used for query parameter passed in the url eg. url?name=somename&age=25
        used as query parameter
        $name = request('name');
        */

        //get all data from db
        // $pizzas = Pizza::all();
        // $pizzas =Pizza::OrderBy('name','desc')->get();
        // $pizzas =Pizza::where('name','sameer')->get();
        $pizzas =Pizza::latest()->get();
        
        return view('pizzas.index', [
            'pizzas' => $pizzas,    
            'name' => request('name'),//used for query parameter
            'age' => request('age'),//used for query parameter
        ]);
    
        /*
        can also return string. 
        return "Pizzas.";
        */
    
        /*
        can also return json.
        return $pizza=['name' => 'veg-pizza', 'base' => 'classic'];
        */
    }

    /*
    for /pizzas/{id} route
    */
    public function show ($id) {
        // use the id varaible to query the db for a record 
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    /*
    to add new pizzas web form
    */
    public function create(){
        return view('pizzas.create');
    }

}
