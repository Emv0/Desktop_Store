<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientesController extends Controller
{

    public function listaClientes(){
        return view('Clientes/index');
    }

    public function registrarClientes(){
        return view('Clientes/registrar');
    }
}
