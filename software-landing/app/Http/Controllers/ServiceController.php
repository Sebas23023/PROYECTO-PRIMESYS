<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // Definimos los 9 servicios en un array para mantener el código limpio
        $services = [
            [
                'number' => '01',
                'title' => 'Diseño de portales web',
                'slug' => 'diseno-web',
                'image' => 'https://images.unsplash.com/photo-1547658719-da2b51169166?auto=format&fit=crop&w=800&q=80',
                'desc' => 'Sitios web modernos, responsivos y optimizados para SEO.'
            ],
            [
                'number' => '02',
                'title' => 'Desarrollo de Software a la Medida',
                'slug' => 'desarrollo-software',
                'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=800&q=80',
                'desc' => 'Soluciones personalizadas para automatizar tus procesos.'
            ],
            [
                'number' => '03',
                'title' => 'Capacitaciones',
                'slug' => 'capacitaciones',
                'image' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80',
                'desc' => 'Formación tecnológica para potenciar a tu equipo.'
            ],
            [
                'number' => '04',
                'title' => 'Planificación Estratégica',
                'slug' => 'planificacion-estrategica',
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80',
                'desc' => 'Alineamos la tecnología con tus objetivos de negocio.'
            ],
            [
                'number' => '05',
                'title' => 'Ciberseguridad',
                'slug' => 'ciberseguridad',
                'image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=800&q=80',
                'desc' => 'Protección avanzada para tus datos e infraestructura.'
            ],
            [
                'number' => '06',
                'title' => 'Arquitectura Empresarial',
                'slug' => 'arquitectura-empresarial',
                'image' => 'https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?auto=format&fit=crop&w=800&q=80',
                'desc' => 'Diseño estructural eficiente para tu ecosistema TI.'
            ],
            [
                'number' => '07',
                'title' => 'Desarrollo de Apps Móviles',
                'slug' => 'apps-moviles',
                'image' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=800&q=80',
                'desc' => 'Aplicaciones nativas e híbridas para iOS y Android.'
            ],
            [
                'number' => '08',
                'title' => 'Cloud Services',
                'slug' => 'cloud-services',
                'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=800&q=80',
                'desc' => 'Migración, gestión y optimización en la nube.'
            ],
            [
                'number' => '09',
                'title' => 'Gestión de Procesos (BPM)',
                'slug' => 'gestion-procesos',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80',
                'desc' => 'Optimización de flujos de trabajo empresariales.'
            ],
        ];

        return view('services.index', compact('services'));
    }

    // Este método maneja las vistas individuales
    public function show($slug)
    {
        // Aquí podrías tener lógica para buscar en base de datos, 
        // pero por ahora retornaremos una vista dinámica basada en el slug.
        // Si creas un archivo 'resources/views/services/ciberseguridad.blade.php', lo cargará.
        
        if (view()->exists("services.{$slug}")) {
            return view("services.{$slug}");
        }
        
        // Si no existe la vista específica, mostramos una genérica (para que no de error mientras desarrollas)
        return view('services.show_generic', compact('slug'));
    }
}