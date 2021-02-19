<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/order/create', [OrderController::class, 'create'])->name('orders.create');
Route::get('/order/{id}', [OrderController::class, 'show'])->name('orders.show');

Route::post('/orders', [OrderController::class,'store'])->name('orders.store');
Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');

// Don't create 'register' routes
// Auth::routes([
//   'register' => false
// ]);

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
