<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;

    protected $table = 'mensajes';

    protected $fillable = [
        'nombre',
        'email',
        'tipo_servicio',
        'presupuesto',
        'plazo',
        'proyecto_url',
        'asunto',
        'mensaje',
        'leido'
    ];

    protected $casts = [
        'leido' => 'boolean'
    ];

    const UPDATED_AT = null;
}
