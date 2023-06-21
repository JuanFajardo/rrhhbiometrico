<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $table = 'vehiculos';
    protected $fillable = [
        'id', 'id_usuario', 'titulo', 'marca', 'motor', 'tipo', 'combustible', 'anio', 'color', 'color_interior', 'wheels', 'traccion', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5', 'foto6', 'ficha', 'comunicate', 'correo', 'popular'
    ];

}
