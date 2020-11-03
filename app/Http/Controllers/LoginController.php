<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return view ('login');
    }

        public function acessar(Request $request) {
            if($request ->nome == 'fabiano' && $request->senha == '123456'){
                 return redirect()->route('menu');
        } else {
            return redirect()->back()->with('erro', 'Login ou senha invalida');
        }
                
    }

    public function menu() {
        return view ('menu');
    
    }


}