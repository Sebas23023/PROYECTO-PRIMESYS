<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    // Mostrar el formulario
    public function show()
    {
        return view('contact');
    }

    // Procesar el envío
    public function submit(Request $request)
    {
        // 1. Validación de seguridad
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:5',
        ], [
            'name.required' => 'Por favor escribe tu nombre.',
            'email.required' => 'El correo es obligatorio.',
            'email.email' => 'El formato del correo no es válido.',
            'message.required' => 'Escribe un mensaje para nosotros.',
        ]);

        // 2. Definir tu correo como destino
        $destinatario = 'sebasarias144@gmail.com';

        // 3. Intentar enviar el correo
        try {
            Mail::to($destinatario)->send(new ContactFormMail($validated));
            
            return back()->with('success', '¡Mensaje enviado con éxito! Nos pondremos en contacto pronto.');
        } catch (\Exception $e) {
            // Si falla (por ejemplo, credenciales mal puestas), mostramos error pero no rompemos la app
            return back()->with('error', 'Error al enviar. Por favor verifica tu conexión o intenta más tarde.');
        }
    }
}