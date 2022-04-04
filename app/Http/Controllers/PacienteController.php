<?php

namespace App\Http\Controllers;
use App\Http\Requests\PacientesCearRequest;
use App\Http\Requests\PacientesEditRequest;
use Illuminate\Http\Request;
use App\Models\pacientes;

class PacienteController extends Controller

{
    //
    public function index()
    {
        $pacientes = pacientes::paginate(5);
        return view('pacientes.index', compact('pacientes'));
    }

    public function create()
    {

        return view('pacientes.create');
    }

    public function store(PacientesCearRequest $request)
    {
      pacientes::create($request->all());
      return redirect()->route('pacientes.index')->with('success', 'Paciente creado correctamente');
    }

    public function edit(pacientes $paciente)
    {
        return view('pacientes.edit', compact('paciente'));

    }
    public function update(PacientesEditRequest $request,pacientes $paciente)
    {
        $datos = $request->all();
        $paciente->update($datos);
        return redirect()->route('pacientes.index')->with('success', 'Paciente actualizado correctamente');

    }
}

