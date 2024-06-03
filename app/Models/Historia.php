<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    use HasFactory;

    protected $table = 'historias';
    protected $fillable = [
        //'id',
            'id_usuario',
            'id_persona',
            'persona',
            'id_horario',
                'horario',
                'id_cargo',
                'cargo',
                'id_falta',
                'falta',
                'id_biometrico',
                'nombre_biometrico',
                'fecha',
                'ingresoam',
                'salidaam',
                'ingresopm',
                'salidapm',
                'retrazo',
                'observacion',
                'aceptado'
    ];
}
