<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Resources\CategoriaCollection;

class CategoriaController extends Controller
{
    public function index(){
        // return response()->json(['categorias' => Categoria::all()]);

        return new CategoriaCollection(Categoria::all());
    }
}
