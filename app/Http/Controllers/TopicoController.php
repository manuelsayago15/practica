<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Topico;

class TopicoController extends Controller
{
    public function index() {
	    $data = Topico::all();
	    return view('msayago15', ['topicos' => $data]);
    }
}
