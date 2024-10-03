<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProductoCollection;
use App\Http\Resources\ProductoResource;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //get all
    {
        return new ProductoCollection(Producto::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // create
    {
        $producto = Producto::create($request->all());
        return new ProductoResource($producto);   
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto) //get by id
    {
        return new ProductoResource($producto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto) //update
    {
        $producto->update($request->all());
        return new ProductoResource($producto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto) //delete
    {
        $producto->delete();
        return response()->json(null, 204);
    }
}
