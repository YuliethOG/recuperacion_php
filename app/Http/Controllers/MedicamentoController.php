<?php

namespace App\Http\Controllers;
use App\Http\Requests\MedicamentosCeateRequest;
use App\Http\Requests\MedicamentosEditRequest;
use App\Models\Medicamento;
use App\Models\Categoria;

use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    //
    public function index()
    {
        $medicamentos = Medicamento::paginate();
        $categorias = Categoria::all();
        return view('medicamentos.index', compact('medicamentos','categorias'));
    }

    public function create()
    {
        $medicamentos = new Medicamento;
        $categorias = Categoria::all();
        return view('medicamentos.create', compact('medicamentos','categorias'));
    }


    public function store(MedicamentosCeateRequest  $request)
    {
     /* $request->validate([

           'nombre' => 'required|min:4|max:20|unique:categorias'
         ]); */


      Medicamento::create($request->all());
      return redirect()->route('medicamentos.index')->with('success', 'Medicamento creado correctamente');
    }


    public function edit(Medicamento $medicamento)
    {
        $categorias = Categoria::all();
        return view('medicamentos.edit', compact('medicamento','categorias'));
    }
    public function update(MedicamentosEditRequest $request,Medicamento $medicamento)
    {
        $datos = $request->all();
        $medicamento->update($datos);
        return redirect()->route('medicamentos.index')->with('success', 'Medicamento actualizado correctamente');

    }

}
