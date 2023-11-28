<?php

use App\Http\Controllers\clientesController;
use App\Http\Controllers\productosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home/index');
});

Route::get('cliente',[clientesController::class,'listaClientes']);
Route::get('cliente/registrar',[clientesController::class,'registrarClientes']);
Route::get('producto',[productosController::class,'listaProductos']);