<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamento;
use App\Models\pacientes;
use App\Models\Formula;
use App\Models\Formula_detalle;


class Formula_detalleController extends Controller
{
    //
    public function create()
    {
        $formula_detalle =new formula_Detalle;

        $paciente = pacientes::all();
        $medicamentos = Medicamento::all();
        return view('formula_detalle.create', compact('formula_detalle','paciente','medicamentos'));

    }
    



}
