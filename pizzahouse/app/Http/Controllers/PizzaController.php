<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    /*
    for /pizzas route
    */ 
    public function index () {
        /*
        can return views.
        */
        //second argument is used to pass data from db to show it via forntend
        $pizzas = [
            // array 1
            ['type' => 'Regular', 'base' => 'Cheesy Crust', 'price' =>  10],
            // array 2
            ['type' => 'Veg', 'base' => 'Garlic Crust', 'price' =>  10],
            // array 3
            ['type' => 'BBq', 'base' => 'Thin & Crispy', 'price' =>  10],
        ];
        //$name & age used for query parameter passed in the url eg. url?name=somename&age=25
        $name = request('name');
        return view('pizzas', [
            'pizzas' => $pizzas,
            'name' => $name,//used for query parameter
            'age' => request('age'),//used for query parameter
        ]);
    
        /*
        can also return string. 
        */
        // return "Pizzas.";
    
        /*
        can also return json.
        */
        // return $pizza=['name' => 'veg-pizza', 'base' => 'classic'];
    }

    /*
    for /pizzas/{id} route
    */
    public function show ($id) {
        // use the id varaible to query the db for a record 
        return view('details', ['id' => $id]);
    }

}
