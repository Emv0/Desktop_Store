<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productosController extends Controller
{
    
    public function listaProductos(){
        return view('Productos/index');
    }

}
