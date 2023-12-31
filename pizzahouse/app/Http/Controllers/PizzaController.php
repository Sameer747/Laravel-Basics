<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    // use this if you want middleware on all the methods
    // public public function __construct() {
    //     $this->middleware('auth');
    // }   
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
        $pizzas = Pizza::all();
        // $pizzas =Pizza::OrderBy('name','desc')->get();
        // $pizzas =Pizza::where('name','sameer')->get();
        // $pizzas =Pizza::latest()->get();
        
        return view('pizzas.index', [
            'pizzas' => $pizzas,    
            // 'name' => request('name'),//used for query parameter
            // 'age' => request('age'),//used for query parameter
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

    /*
    for /pizzas route with get request.
    */
    public function store(){
        /*
        not working dont know why?
        */
        // error_log(request('name'));
        // error_log(request('type'));
        // error_log(request('base'));
        
        //new instance of pizza model
        $pizza = new Pizza();
        //add to the var $pizza
        $pizza->name= request('name');
        $pizza->type= request('type');
        $pizza->base= request('base');
        $pizza->toppings=request('toppings');
        // error_log($pizza);//not working
        $pizza->save();
        return redirect('/')->with('msg','Thank you for your order.');
    }

    public function destroy($id) {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas')->with('msg','Your Order is now complete');
    }

}
