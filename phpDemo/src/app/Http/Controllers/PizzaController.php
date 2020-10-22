<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Http\Requests\PizzasRequest;
class PizzaController extends Controller
{
    public function index() {
        // get data from a database
         $pizzas = Pizza::all();
        // $pizzas = Pizza::where('type','hawaiian')->get();
        // $pizzas = Pizza::orderBy('name','desc')->get();
    
        return view('pizzas.pizzas', [
          'pizzas' => $pizzas,
        ]);
      }
    
      public function show($id) {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.details', ['pizza' => $pizza]);
      }


      public function create() {
        return view('pizzas.create');
      }

      public function store(PizzasRequest $request){
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        
        $pizza->save();

        return redirect()->route('list-pizzas')->with('msg','Thanks for your order');
      }

      public function destroy($id){

        $pizza = Pizza::findOrFail($id);  
        $pizza->delete();

        return redirect('/pizzas');
      }
}
