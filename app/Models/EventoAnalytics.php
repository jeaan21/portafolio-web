<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventoAnalytics extends Model
{
    use HasFactory;

    protected $table = 'eventos_analytics';

    protected $fillable = [
        'evento',
        'path',
        'metadata'
    ];

    protected $casts = [
        'metadata' => 'array'
    ];

    const UPDATED_AT = null;
}
