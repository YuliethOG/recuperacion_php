<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $fillable =
    [
    'Código',
    'Nombre',
    'Categorías',
    'estado'
    ];

    use HasFactory;
}