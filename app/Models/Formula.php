<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formula extends Model
{
    protected $fillable =
    [

    'paciente',
    ];

    use HasFactory;
}
