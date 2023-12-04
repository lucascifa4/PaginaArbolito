<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index ()
    {
        $votos1 = 0;
        $votos2 = 0;
        $votos3 = 0;
        $votos4 = 0;

        $productos = Producto::all();
        foreach($productos as $producto)
        {
            switch ($producto->id) {
                case 1:
                    $votos1 = $producto->votos;
                    break;
                case 2:
                    $votos2 = $producto->votos;

                    break;
                case 3:
                    $votos3 = $producto->votos;
                    break;
                case 4:
                    $votos4 = $producto->votos;
                    break;    
                default:
                    break;
            }
        }
        return view('index', [
            'votos1' => $votos1,
            'votos2' => $votos2,
            'votos3' => $votos3,
            'votos4' => $votos4,
        ]);    
    }

    public function storeVoto(Request $request) {
       
        $request->validate([
            'mail' => 'required|string|email|max:255|unique:usuarios,mail',
        ]);

        $voto = $request->input('voto');
        $voto_id = intval($voto);
        $usuario = Usuario::create([
            'mail' => $request->input('mail'),
            'producto_id' => $voto_id,
        ]);

        $producto = Producto::where('id', $voto_id)->first();

        $producto->votos = $producto->votos +1;

        $producto->save();

        if ($usuario) {
            return redirect()->route('index',compact('usuario'))->with('mensaje', 'Gracias por votar');
        } else {
            return redirect()->back()->withErrors(['mail' => 'El correo electrónico ya existe.']);
        }
    }
}
