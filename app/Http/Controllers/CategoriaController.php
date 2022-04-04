<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriasCreateRequest;
use App\Http\Requests\CategoriasEditRequest;
use Illuminate\Http\Request;
use App\Models\Categoria;
class CategoriaController extends Controller
{
    //
    public function index()
    {
        $categorias = Categoria::paginate();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(CategoriasCreateRequest $request)
    {
     /* $request->validate([

           'nombre' => 'required|min:4|max:20|unique:categorias'
         ]); */
    
        
      Categoria::create($request->all());
      return redirect()->route('categorias.index')->with('success', 'Categoria creada correctamente');
    }
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));

    }
    public function update(CategoriasEditRequest $request,Categoria $categoria)
    {
        $datos = $request->all();
        $categoria->update($datos);
        return redirect()->route('categorias.index')->with('success', 'Categoria actualizada correctamente');

    }
}
