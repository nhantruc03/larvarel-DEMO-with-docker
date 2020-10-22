<?php

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
use App\Http\Controllers\PizzaController;

Route::get('/', function(){
    return view('welcome');
})->name('welcome');

Route::get('/pizzas', [PizzaController::class, 'index'])->name('list-pizzas');

Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('review-pizza');

Route::get('/pizza/create', [PizzaController::class, 'create'])->name('create-order-GET');

Route::post('/pizzas', [PizzaController::class, 'store'])->name('create-order-POST');

Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->name('complete-order');

// {{ route('review-pizza',['id'=>$pizza.id]) }}