<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Categoria;

class CategoriaController extends Controller
{
    public function bring() {
    $data = Categoria::all();
    return view('manuel',['categorias' => $data]);
    }
}
