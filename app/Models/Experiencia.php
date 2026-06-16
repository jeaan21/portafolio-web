<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    use HasFactory;

    protected $table = 'experiencia';

    protected $fillable = [
        'titulo',
        'empresa',
        'periodo',
        'descripcion',
        'tipo',
        'orden'
    ];

    // La tabla solo tiene created_at, no updated_at
    const UPDATED_AT = null;
}
