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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index');

Route::get('/pizzas/{id}', 'App\Http\Controllers\PizzaController@show');

Route::get('/pizza/create', 'App\Http\Controllers\PizzaController@create');

Route::post('/pizzas', 'App\Http\Controllers\PizzaController@store');

Route::delete('/pizzas/{id}', 'App\Http\Controllers\PizzaController@destroy');