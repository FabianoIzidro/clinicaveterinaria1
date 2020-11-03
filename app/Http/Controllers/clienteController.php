<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clienteController extends Controller
{
    public function clientecadastro() {
        return view ('cadastrocliente');
    }
 
    public function clientevoltar() {
        return view ('menu');
    }

    public function clientetelalogin() {
        return view ('login');
    }

    public function clientecadastrar(Request $request) {

        return redirect()->route('clientelistar')->with('sucesso', ' cliente cadastro com sucesso');
    }

    public function clientelistar() {
        return  view ('clientelistar');
    
    }

}