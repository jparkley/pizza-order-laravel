<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
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

//Route::get('/', 'PizzaController@index');
//Route::get('/pizza/{id}', 'PizzaController@show');

Route::get('/', [PizzaController::class, 'index']);

Route::get('/orders', [OrderController::class, 'index']);
Route::get('/order/create', [OrderController::class, 'create']);
Route::get('/order/{id}', [OrderController::class, 'show']);

Route::post('/orders', [OrderController::class,'store']);
Route::delete('/orders/{id}', [OrderController::class, 'destroy']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
