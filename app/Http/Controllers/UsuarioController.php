<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function create ()
    {
        return view('login');
    }

    public function store(Request $request) {
        
  /*       $request->validate([
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'mail' => 'required|string|email|max:255',
            'contraseña' => 'required|string|min:8|confirmed',
        ]); */

       $usuario = Usuario::create([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'dni' => $request->input('nro_documento'),
            'mail' => $request->input('mail'),
            'contraseña' => $request->input('contraseña'),
        ]);

        return redirect('create.usuarios')->with('usuario', $usuario);
    }
}
