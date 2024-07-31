<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        return Producto::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'nullable|string',
            'categoria' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'proveedor' => 'required|string',
            'imagen' => 'nullable|url',
        ]);

        $producto = new Producto;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->categoria = $request->categoria;
        $producto->precio = $request->precio;
        $producto->proveedor = $request->proveedor;
        $producto->imagen = $request->imagen;
        $producto->save();

        return $producto;
    }

    public function show(Producto $producto)
    {
        return $producto;
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'nullable|string',
            'categoria' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'proveedor' => 'required|string',
            'imagen' => 'nullable|url',
        ]);

        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->categoria = $request->categoria;
        $producto->precio = $request->precio;
        $producto->proveedor = $request->proveedor;
        $producto->imagen = $request->imagen;
        $producto->update();

        return $producto;
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);

        if (is_null($producto)) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $producto->delete();
        return response()->noContent();
    }
}
