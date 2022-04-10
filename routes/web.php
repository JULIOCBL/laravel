<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Carrito;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'root']);
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/carrito', function () {
    return view('carrito');
});

Route::get('/get', [Carrito::class, 'get'])->name('carrito.get');
Route::post('/create', [Carrito::class, 'agregarCarrito'])->name('carrito.insert');
Route::post('/delete', [Carrito::class, 'destroy'])->name('carrito.destroy');
Route::post('/update', [Carrito::class, 'update'])->name('carrito.update');



