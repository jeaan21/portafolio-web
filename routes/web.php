<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

use App\Http\Controllers\Api\ChatbotController;
use App\Http\Controllers\Api\ContactController;

Route::get('/', [PageController::class, 'inicio'])->name('inicio');

// Redirección 301 de /inicio → / para evitar contenido duplicado
Route::redirect('/inicio', '/', 301);

Route::get('/proyectos', [PageController::class, 'proyectos'])->name('proyectos');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');
Route::get('/arquitectura', [PageController::class, 'arquitectura'])->name('arquitectura');

// APIs mapeadas para compatibilidad directa con el JS heredado
Route::post('/api/v1/chatbot.php', [ChatbotController::class, 'handle'])->middleware('throttle:5,1');
Route::post('/api/v1/post_mensaje.php', [ContactController::class, 'handle'])->middleware('throttle:3,1');

// Redirección heredada de sobre-mi.php
Route::redirect('/sobre-mi', '/#about');

Route::get('/debug-log', function() {
    $logFile = storage_path('logs/laravel.log');
    if (file_exists($logFile)) {
        return response(file_get_contents($logFile), 200, ['Content-Type' => 'text/plain']);
    }
    return 'Log file not found';
});
