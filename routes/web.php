<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home\Inicio;
use App\Http\Livewire\Home\PaginaInicial;
use App\Http\Livewire\Productos\Productos;
use App\Http\Livewire\Nosotros\Nosotros;
use App\Http\Livewire\Compras\CaritoCompra;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/home', Inicio::class);
Route::get('/inicio',PaginaInicial ::class);
Route::get('/productos', Productos::class);
Route::get('/nosotros', Nosotros::class);
Route::get('/carro_compras', CaritoCompra::class);
