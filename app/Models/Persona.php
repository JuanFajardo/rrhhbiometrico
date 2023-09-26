<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';
    protected $fillable = [
        'id_usuario',
        'id_cargo',
        'id_horario',
        'nombre',
        'paterno',
        'materno',
        'ci',
        'celular',
        'direccion',
        'activo',
    ];
}