<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController; // IMPORTANTE: Agregamos esta línea

// === RUTA DE INICIO ===
Route::get('/', function () {
    return view('welcome');
})->name('inicio');

// === RUTAS DE SERVICIOS ===
// Catálogo general
Route::get('/servicios', [ServiceController::class, 'index'])->name('servicios.index');
// Vistas individuales (detalle)
Route::get('/servicios/{slug}', [ServiceController::class, 'show'])->name('servicios.show');

// === RUTA DE CLIENTES ===
Route::get('/clientes', function () {
    return view('clientes');
})->name('clientes');

// === RUTAS DE CONTACTO ===
// Mostrar el formulario
Route::get('/contacto', [ContactController::class, 'show'])->name('contacto.show');
// Enviar el formulario (Lógica de correo)
Route::post('/contacto', [ContactController::class, 'submit'])->name('contacto.submit');

// === RUTAS PLACEHOLDER (Aún por desarrollar) ===
Route::get('/trabajo', function () { 
    return "<h1>Sección: Nuestro Trabajo (Próximamente)</h1>"; 
})->name('trabajo');