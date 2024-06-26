<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $table = 'horarios';
    protected $fillable = [
        'id_usuario',
        'horario',
        'descripcion',
        'ingresoam',
        'salidaam',
        'ingresopm',
        'salidapm',
        'retrazo',
    ];
}
