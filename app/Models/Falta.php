<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Falta extends Model
{
    use HasFactory;

    protected $table = 'faltas';
    protected $fillable = [
        'id_usuario',
        'id_persona',
        'id_horario',
        'id_cargo',
        'fecha',
        'ingresoam',
        'salidaam',
        'ingresopm',
        'salidapm',
        'tipo',
        'observacion',
    ];
}
