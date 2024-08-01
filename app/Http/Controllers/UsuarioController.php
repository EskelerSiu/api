<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'correo' => 'required|email|unique:usuarios,correo',
            'contra' => 'required|string',
            'nombre' => 'required|string|max:255',
            'rol' => 'required|string',
            'imagen' => 'nullable|url',
        ]);

        $usuario = new Usuario;
        $usuario->correo = $request->correo;
        $usuario->contra = $request->contra;
        $usuario->nombre = $request->nombre;
        $usuario->rol = $request->rol;
        $usuario->imagen = $request->imagen;
        $usuario->save();

        return $usuario;
    }
    public function show(Usuario $usuario)
    {
        return $usuario;
    }
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'correo' => 'required|email|unique:usuarios,correo,' . $usuario->id,
            'contra' => 'required|string',
            'nombre' => 'required|string|max:255',
            'rol' => 'required|string',
            'imagen' => 'nullable|url',
        ]);

        $usuario->correo = $request->correo;
        $usuario->contra = $request->contra;
        $usuario->nombre = $request->nombre;
        $usuario->rol = $request->rol;
        $usuario->imagen = $request->imagen;
        $usuario->update();

        return $usuario;
    }

    public function destroy($id)
    {
        $usuario = Usuario::find($id);

        if (is_null($usuario)) {
            return response()->json('No se pudo realizar correctamente la operacion', 404);
        }

        $usuario->delete();
        return response()->noContent();
    }
}
