<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class animalController extends Controller
{
    public function animalcadastro() {
        return view ('cadastroanimal');
    }

    public function animalvoltar() {
        return view ('menu');
    }

    public function animaltelalogin() {
        return view ('login');
    }

    public function animalcadastrar(Request $request) {
    
        return redirect()->route('animallistar')->with('sucesso', 'animal cadastro com sucesso');
    }

    public function animallistar() {
        return view ('animallistar');
    }
}