<?php

use Illuminate\Support\Facades\Route;

Route::get('/debug', function () {
    return 'OK - ' . config('app.debug') . ' - ' . config('app.env') . ' - ' . config('database.default');
});

use App\Http\Controllers\PageController;

use App\Http\Controllers\Api\ChatbotController;
use App\Http\Controllers\Api\ContactController;

Route::get('/', [PageController::class, 'inicio'])->name('inicio');
Route::get('/inicio', [PageController::class, 'inicio']);
Route::get('/proyectos', [PageController::class, 'proyectos'])->name('proyectos');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');
Route::get('/arquitectura', [PageController::class, 'arquitectura'])->name('arquitectura');

// APIs mapeadas para compatibilidad directa con el JS heredado
Route::post('/api/v1/chatbot.php', [ChatbotController::class, 'handle'])->middleware('throttle:5,1');
Route::post('/api/v1/post_mensaje.php', [ContactController::class, 'handle'])->middleware('throttle:3,1');

// Redirección heredada de sobre-mi.php
Route::redirect('/sobre-mi', '/#about');


