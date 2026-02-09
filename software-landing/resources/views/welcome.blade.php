@extends('layouts.app')

@section('title', 'PRIMESYS - Soluciones Tecnológicas')

@section('content')

    {{-- ================= HERO SECTION (Sin cambios) ================= --}}
    <div class="relative w-full min-h-[90vh] flex flex-col justify-center">
        <div class="absolute inset-0">
            <img src="{{ asset('img/fondo-home.png') }}" alt="Fondo Principal" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-sky-900/90 via-slate-900/80 to-slate-900"></div>

        <div class="relative z-10 w-full flex flex-col justify-center items-center text-center px-4 py-20">
            <h1 class="text-3xl sm:text-4xl md:text-7xl font-bold mb-6 tracking-wider text-white leading-tight" data-aos="fade-down" data-aos-duration="1200">
                Soluciones Innovadoras <br class="hidden md:block"> para su Negocio
            </h1>
            <div class="text-sm md:text-base font-light space-y-2 tracking-[0.1em] md:tracking-[0.2em] text-gray-300 mb-12 max-w-2xl px-2" data-aos="fade-in" data-aos-delay="400">
                <p>Más de 25 años de experiencia mejorando la operatividad y competitividad de nuestros clientes</p>
            </div>
            <a href="{{ url('/servicios') }}" class="border border-white text-white px-8 py-3 md:px-10 md:py-3 text-base md:text-lg font-medium hover:bg-white hover:text-slate-900 transition-all duration-300 transform hover:scale-105" data-aos="zoom-in" data-aos-delay="600">
                EMPECEMOS
            </a>
        </div>

        {{-- Flecha --}}
        <div class="absolute bottom-16 w-full flex justify-center z-30 animate-bounce">
            <svg class="w-10 h-10 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
        <div class="absolute bottom-0 w-full leading-none z-20">
            <svg class="relative block w-full h-[60px] md:h-[150px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" fill="#0f172a"></path>
            </svg>
        </div>
    </div>

    {{-- ================= SECCIÓN DE TARJETAS GIRATORIAS (Sin cambios de contenido) ================= --}}
    <section class="w-full py-20 px-6 bg-slate-900 relative z-20">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
            {{-- Tarjeta 1: Misión --}}
            <div class="group h-[400px] w-full [perspective:1000px]" data-aos="fade-up" data-aos-delay="0">
                <div class="relative h-full w-full shadow-xl transition-all duration-700 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                    <div class="absolute inset-0 h-full w-full rounded-xl bg-slate-800 border border-slate-700 flex flex-col items-center justify-center p-8 [backface-visibility:hidden]">
                        <svg class="w-24 h-24 text-sky-500 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" style="display:none;"/> 
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 16a6 6 0 1 1 6-6 6 6 0 0 1-6 6zm0-8a2 2 0 1 1 2 2 2 2 0 0 1-2-2z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M22 2l-6 6"/>
                        </svg>
                        <h2 class="text-3xl font-bold text-white tracking-wider uppercase">Misión</h2>
                        <div class="w-16 h-1 bg-sky-500 rounded mt-4"></div>
                    </div>
                    <div class="absolute inset-0 h-full w-full rounded-xl bg-gradient-to-br from-sky-900 to-slate-900 border border-sky-700/50 flex flex-col items-center justify-center p-8 text-center [transform:rotateY(180deg)] [backface-visibility:hidden]">
                        <h3 class="text-xl font-bold text-sky-400 mb-4">Nuestro Propósito</h3>
                        <p class="text-gray-200 text-lg leading-relaxed font-light">Ofrecer soluciones tecnológicas innovadoras y personalizadas para satisfacer las necesidades específicas de cada uno de nuestros clientes.</p>
                    </div>
                </div>
            </div>

            {{-- Tarjeta 2: Visión --}}
            <div class="group h-[400px] w-full [perspective:1000px]" data-aos="fade-up" data-aos-delay="200">
                <div class="relative h-full w-full shadow-xl transition-all duration-700 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                    <div class="absolute inset-0 h-full w-full rounded-xl bg-slate-800 border border-slate-700 flex flex-col items-center justify-center p-8 [backface-visibility:hidden]">
                        <svg class="w-24 h-24 text-sky-500 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.086 0l-.504 1.8a2 2 0 01-1.928 1.464H9.894a2 2 0 01-1.928-1.464l-.504-1.8z"/>
                        </svg>
                        <h2 class="text-3xl font-bold text-white tracking-wider uppercase">Visión</h2>
                        <div class="w-16 h-1 bg-sky-500 rounded mt-4"></div>
                    </div>
                    <div class="absolute inset-0 h-full w-full rounded-xl bg-gradient-to-br from-sky-900 to-slate-900 border border-sky-700/50 flex flex-col items-center justify-center p-8 text-center [transform:rotateY(180deg)] [backface-visibility:hidden]">
                        <h3 class="text-xl font-bold text-sky-400 mb-4">Hacia el Futuro</h3>
                        <p class="text-gray-200 text-lg leading-relaxed font-light">Ser líderes en el mercado de servicios computacionales, reconocidos mundialmente por nuestra excelencia, calidad y constante innovación.</p>
                    </div>
                </div>
            </div>

            {{-- Tarjeta 3: Quiénes Somos --}}
            <div class="group h-[400px] w-full [perspective:1000px]" data-aos="fade-up" data-aos-delay="400">
                <div class="relative h-full w-full shadow-xl transition-all duration-700 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                    <div class="absolute inset-0 h-full w-full rounded-xl bg-slate-800 border border-slate-700 flex flex-col items-center justify-center p-8 [backface-visibility:hidden]">
                        <svg class="w-24 h-24 text-sky-500 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <h2 class="text-3xl font-bold text-white tracking-wider uppercase">Quiénes Somos</h2>
                        <div class="w-16 h-1 bg-sky-500 rounded mt-4"></div>
                    </div>
                    <div class="absolute inset-0 h-full w-full rounded-xl bg-gradient-to-br from-sky-900 to-slate-900 border border-sky-700/50 flex flex-col items-center justify-center p-8 text-center [transform:rotateY(180deg)] [backface-visibility:hidden]">
                        <h3 class="text-xl font-bold text-sky-400 mb-4">Nuestra Esencia</h3>
                        <p class="text-gray-200 text-base leading-relaxed font-light">Líderes con más de <strong class="text-white font-semibold">25 años de experiencia</strong>. Somos un equipo multidisciplinario que transforma el futuro digital de las empresas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- ================= MENSAJE DEL CEO (ESPACIO COMPACTO & MANOS) ================= --}}
    <section class="w-full py-20 px-6 bg-slate-900 relative overflow-hidden z-20">
        
        {{-- CAMBIO 1: Usamos max-w-5xl (más estrecho) y justify-center para reducir el espacio vacío lateral --}}
        <div class="max-w-5xl mx-auto flex flex-col lg:flex-row items-center justify-center gap-8 lg:gap-12">
            
            {{-- COLUMNA IZQUIERDA: Icono --}}
            {{-- 'lg:w-auto' permite que el contenedor se ajuste al tamaño del icono, sin ocupar espacio extra --}}
            <div class="w-full lg:w-auto flex justify-center lg:justify-end flex-shrink-0" data-aos="fade-right">
                <div class="relative group p-2">
                    {{-- Fondo de brillo sutil --}}
                    <div class="absolute inset-0 bg-gradient-to-br from-sky-500/20 to-purple-500/20 blur-xl rounded-full scale-90 opacity-60 group-hover:opacity-90 transition-opacity duration-500"></div>
                    
                    {{-- CAMBIO 2: NUEVO ICONO SVG DE MANOS ESTRECHÁNDOSE --}}
                    {{-- Se mantiene el estilo de neón azul (text-sky-400) y el drop-shadow --}}
                    <svg class="relative w-32 h-32 md:w-40 md:h-40 text-sky-400/90 group-hover:text-sky-300 transition-colors duration-500 drop-shadow-[0_0_12px_rgba(56,189,248,0.4)]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0v6m0-6a1.5 1.5 0 10-3 0v2m0-2v6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>

            {{-- COLUMNA DERECHA: Texto --}}
            {{-- 'lg:flex-1' hace que el texto ocupe el espacio restante, manteniéndose cerca del icono --}}
            <div class="w-full lg:flex-1 flex flex-col">
                
                {{-- Subtítulo --}}
                <h2 class="text-sky-500 text-xs md:text-sm font-bold tracking-[0.3em] uppercase mb-6 text-left" data-aos="fade-down">
                    Liderazgo & Compromiso
                </h2>

                {{-- Cita (JUSTIFICADA) --}}
                <blockquote class="text-xl md:text-2xl lg:text-3xl text-white font-light leading-relaxed tracking-wide text-justify mb-10" data-aos="fade-up" data-aos-delay="100">
                    "En <span class="text-sky-400 font-medium">PRIMESYS</span> forjamos alianzas estratégicas que perduran. Nuestro éxito se mide únicamente por el éxito de nuestros clientes."
                </blockquote>
                
                {{-- Autor (ALINEADO A LA DERECHA) --}}
                <div class="flex flex-col items-end self-end text-right" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-lg md:text-xl font-bold text-white tracking-wide relative after:content-[''] after:block after:w-12 after:h-0.5 after:bg-sky-500 after:ml-auto after:mt-2">
                        Marcelo Rea Guamán
                    </h3>
                    <p class="text-gray-400 text-xs md:text-sm tracking-widest uppercase mt-2">CEO & Fundador</p>
                </div>

            </div>
        </div>
    </section>

@endsection