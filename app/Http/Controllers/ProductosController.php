<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('registers.productos', compact('productos'));        
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'precio_unitario' => 'required|string',
            'imagen' => 'string', // Corregido a 'string' en lugar de 'integer'
            'estatus' => 'required|numeric', // Corregido a 'numeric' en lugar de 'integer'
            'existencia' => 'required|numeric',
        ]);
        
    
        // Crea un nuevo registro en la base de datos utilizando el modelo producto
        Producto::create($request->all());
    
        return redirect()->route('productos.index')->with('success', 'producto creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Obtener el producto por el id
        $producto = producto::find($id);
    
        // Verificar si el producto existe
        if (!$producto) {
            return redirect()->route('productos.index')->with('error', 'producto no encontrado.');
        }
    
        // Pasar el producto a la vista
        return view('productos.show', ['producto' => $producto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit($id)
{
    $producto = Producto::find($id);

    if (!$producto) {
        return redirect()->route('productos.index')->with('error', 'Producto no encontrado.');
    }

    return view('productos.edit', ['producto' => $producto]);
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Obtener el Producto
        $producto = Producto::find($id);

        //Eliminar el libro de la base de datos
        $producto->delete();

        return redirect()->route('productos.index')->with('sucess', 'Producto eliminado exitosamente.');
    }
}
