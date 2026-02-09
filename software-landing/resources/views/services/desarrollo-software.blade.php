<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrollo de Software - PRIMESYS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { 
            font-family: 'Montserrat', sans-serif; 
            background-color: #0f172a; 
            color: #cbd5e1;
        }
        /* Bloquear scroll en escritorio para efecto "Una Pantalla" */
        @media (min-width: 1024px) {
            body {
                height: 100vh;
                overflow: hidden;
            }
        }
    </style>
</head>
<body class="bg-[#0f172a] lg:h-screen lg:overflow-hidden flex flex-col lg:flex-row">

    <div class="relative w-full lg:w-1/2 h-[45vh] lg:h-full flex-shrink-0 group overflow-hidden">
        
        <div class="absolute top-6 left-6 lg:top-8 lg:left-8 z-30">
            <a href="{{ route('servicios.index') }}" class="text-white/70 hover:text-white transition-colors duration-300 flex items-center gap-2 text-xs lg:text-sm font-medium tracking-widest backdrop-blur-sm bg-slate-900/30 px-3 py-1.5 lg:px-4 lg:py-2 rounded-full border border-white/10 hover:bg-slate-900/50">
                <span>&larr;</span> VOLVER
            </a>
        </div>

        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
             alt="Desarrollo de Software" 
             class="absolute inset-0 w-full h-full object-cover transition-transform duration-[2000ms] group-hover:scale-105">
        
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent lg:bg-gradient-to-r lg:from-black/50 lg:via-[#0f172a]/80 lg:to-[#0f172a]"></div>
        
        <div class="absolute bottom-0 left-0 w-full p-8 lg:p-12 xl:p-16 z-20">
            <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold text-white leading-tight tracking-tight drop-shadow-[0_5px_5px_rgba(0,0,0,0.9)]">
                Desarrollo de <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-cyan-300">
                    Software a Medida
                </span>
            </h1>
            <div class="w-16 lg:w-24 h-1 bg-sky-500 mt-4 lg:mt-6 rounded-full drop-shadow-lg"></div>
        </div>
    </div>

    <div class="w-full lg:w-1/2 h-full flex flex-col relative z-10 bg-[#0f172a] lg:overflow-y-auto">
        
        <nav class="w-full p-6 lg:p-8 flex justify-end items-center lg:absolute top-0 right-0">
            <div class="text-[#FFE4B5] font-bold text-lg lg:text-xl tracking-[0.2em] opacity-80">PRIMESYS</div>
        </nav>

        <div class="px-6 py-8 md:px-12 lg:py-0 lg:pl-8 lg:pr-12 xl:pl-16 xl:pr-20 flex flex-col justify-center flex-grow space-y-8 xl:space-y-10">
            
            <div class="space-y-4">
                <h3 class="text-sky-500 text-xs lg:text-sm font-bold tracking-[0.2em] uppercase">Concepto</h3>
                <h2 class="text-2xl lg:text-3xl font-semibold text-white">¿En qué consiste?</h2>
                <p class="text-base lg:text-lg text-slate-400 font-light leading-7 lg:leading-7 border-l-2 border-slate-700 pl-4 lg:pl-6">
                    El desarrollo de software a medida consiste en crear soluciones digitales personalizadas que responden a necesidades específicas, adaptándose totalmente a los procesos internos para optimizar el funcionamiento.
                </p>
            </div>

            <div class="space-y-6">
                
                <div class="space-y-2">
                    <h3 class="text-purple-400 text-xs lg:text-sm font-bold tracking-[0.2em] uppercase">Soluciones</h3>
                    <h2 class="text-2xl lg:text-3xl font-semibold text-white">Nuestros Servicios</h2>
                </div>

                <p class="text-sm lg:text-base text-slate-300 font-light leading-6">
                    Impulsamos la transformación digital de tu empresa con soluciones únicas:
                </p>
                
                <div class="grid gap-4">
                    
                    <div class="group p-4 bg-slate-800/30 rounded-xl hover:bg-slate-800/50 border border-slate-700/50 hover:border-sky-500/30 transition-all duration-300">
                        <div class="flex items-start gap-3 lg:gap-4">
                            <div class="bg-sky-500/10 p-2 lg:p-3 rounded-lg text-sky-400">
                                <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-medium text-base lg:text-lg mb-0.5">Soluciones Personalizadas</h4>
                                <p class="text-xs lg:text-sm text-slate-400 font-light leading-snug">Software diseñado específicamente para cumplir con los objetivos únicos de tu negocio.</p>
                            </div>
                        </div>
                    </div>

                    <div class="group p-4 bg-slate-800/30 rounded-xl hover:bg-slate-800/50 border border-slate-700/50 hover:border-purple-500/30 transition-all duration-300">
                        <div class="flex items-start gap-3 lg:gap-4">
                            <div class="bg-purple-500/10 p-2 lg:p-3 rounded-lg text-purple-400">
                                <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-medium text-base lg:text-lg mb-0.5">Automatización de Procesos</h4>
                                <p class="text-xs lg:text-sm text-slate-400 font-light leading-snug">Eliminamos tareas repetitivas y reducimos errores operativos mediante tecnología.</p>
                            </div>
                        </div>
                    </div>

                    <div class="group p-4 bg-slate-800/30 rounded-xl hover:bg-slate-800/50 border border-slate-700/50 hover:border-sky-500/30 transition-all duration-300">
                        <div class="flex items-start gap-3 lg:gap-4">
                            <div class="bg-sky-500/10 p-2 lg:p-3 rounded-lg text-sky-400">
                                <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-medium text-base lg:text-lg mb-0.5">Escalabilidad Garantizada</h4>
                                <p class="text-xs lg:text-sm text-slate-400 font-light leading-snug">Arquitectura de sistemas preparada para crecer sin límites junto con tu empresa.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</body>
</html>