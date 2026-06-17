<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mensaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends Controller
{
    public function handle(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'mensaje' => 'required|string',
            'tipo_servicio' => 'nullable|string|max:255',
            'presupuesto' => 'nullable|string|max:255',
            'plazo' => 'nullable|string|max:255',
            'proyecto_url' => 'nullable|url|max:500',
            'asunto' => 'nullable|string|max:255',
        ]);

        $data = $request->only([
            'nombre',
            'email',
            'mensaje',
            'tipo_servicio',
            'presupuesto',
            'plazo',
            'proyecto_url',
            'asunto'
        ]);

        if (empty($data['asunto'])) {
            $data['asunto'] = 'Propuesta técnica de alto nivel';
        }

        // Crear registro en la base de datos
        $mensaje = Mensaje::create($data);

        // Envío de correo mediante el sistema nativo de Laravel
        if ($mensaje) {
            try {
                $recipient = env('CONTACT_EMAIL', 'jean2015arias@gmail.com');
                
                Mail::queue([], [], function ($message) use ($data, $recipient) {
                    $htmlContent = "
                        <h2>Nueva Propuesta Recibida</h2>
                        <p><strong>Nombre:</strong> {$data['nombre']}</p>
                        <p><strong>Email:</strong> {$data['email']}</p>
                        <p><strong>Servicio:</strong> " . ($data['tipo_servicio'] ?? 'No especificado') . "</p>
                        <p><strong>Presupuesto:</strong> " . ($data['presupuesto'] ?? 'No especificado') . "</p>
                        <p><strong>Plazo:</strong> " . ($data['plazo'] ?? 'No especificado') . "</p>
                        <p><strong>Link del proyecto:</strong> " . ($data['proyecto_url'] ?? 'No especificado') . "</p>
                        <p><strong>Mensaje:</strong></p>
                        <p>" . nl2br(e($data['mensaje'])) . "</p>
                    ";
                    
                    $message->to($recipient)
                        ->subject($data['asunto'])
                        ->html($htmlContent);
                });
            } catch (Throwable $e) {
                logger()->error('Error enviando correo de contacto: ' . $e->getMessage());
            }

            return response()->json([
                'success' => true,
                'message' => 'Propuesta técnica enviada correctamente',
                'data' => [
                    'id' => $mensaje->id
                ]
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Error al guardar la propuesta'
        ], 500);
    }
}
