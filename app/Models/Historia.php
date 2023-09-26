<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    use HasFactory;

    protected $table = 'historias';
    protected $fillable = [
        'id_usuario',
        'id_persona',
        'id_horario',
        'id_cargo',
        'id_falta',
        'fecha',
        'ingresoam',
        'salidaam',
        'ingresopm',
        'salidapm',
        'retrazo',
        'observacion',
        'aceptado',
    ];
}
