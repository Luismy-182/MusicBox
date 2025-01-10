<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'voz',
        'guitarra1',
        'guitarra2',
        'bateria',
        'bajo',
        'imagen',
        'descripcion'

    ];
}
