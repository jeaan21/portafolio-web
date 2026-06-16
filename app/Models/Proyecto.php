<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $table = 'proyectos';

    protected $fillable = [
        'titulo',
        'slug',
        'descripcion',
        'contenido',
        'imagen',
        'tecnologias',
        'categoria',
        'url_proyecto',
        'url_github',
        'destacado',
        'orden'
    ];

    protected $casts = [
        'tecnologias' => 'array',
        'destacado' => 'boolean',
        'orden' => 'integer'
    ];

    public function getImagenUrlAttribute()
    {
        if (!$this->imagen) {
            return null;
        }

        // Remueve "/public" o "public/" del inicio de la ruta si existe
        $path = ltrim($this->imagen, '/');
        if (str_starts_with($path, 'public/')) {
            $path = substr($path, 7);
        }

        return asset($path);
    }
}
