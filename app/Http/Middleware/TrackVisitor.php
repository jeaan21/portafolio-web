<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitante;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Evitamos trackear llamadas internas, peticiones de assets o el panel admin
        if (!$request->is('api/*') && !$request->is('admin/*') && !$request->is('_debugbar*')) {
            try {
                Visitante::create([
                    'ip' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                    'path' => $request->path() === '/' ? '/' : '/' . $request->path(),
                    'referrer' => $request->headers->get('referer')
                ]);
            } catch (\Exception $e) {
                // Falla silenciosa si la base de datos no está disponible temporalmente
                logger()->error('Error trackeando visitante: ' . $e->getMessage());
            }
        }

        return $next($request);
    }
}
