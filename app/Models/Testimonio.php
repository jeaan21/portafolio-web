<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonio extends Model
{
    use HasFactory;

    protected $table = 'testimonios';

    protected $fillable = [
        'nombre',
        'cargo',
        'avatar',
        'texto',
        'valoracion',
        'activo'
    ];

    protected $casts = [
        'valoracion' => 'integer',
        'activo' => 'boolean'
    ];

    const UPDATED_AT = null;
}
