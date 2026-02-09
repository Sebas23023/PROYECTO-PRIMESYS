<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capacitaciones - PRIMESYS</title>
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

        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
             alt="Capacitaciones Corporativas" 
             class="absolute inset-0 w-full h-full object-cover transition-transform duration-[2000ms] group-hover:scale-105">
        
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent lg:bg-gradient-to-r lg:from-black/50 lg:via-[#0f172a]/80 lg:to-[#0f172a]"></div>
        
        <div class="absolute bottom-0 left-0 w-full p-8 lg:p-12 xl:p-16 z-20">
            <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold text-white leading-tight tracking-tight drop-shadow-[0_5px_5px_rgba(0,0,0,0.9)]">
                Capacitaciones <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-cyan-300">
                    en Software
                </span>
            </h1>
            <div class="w-16 lg:w-24 h-1 bg-sky-500 mt-4 lg:mt-6 rounded-full drop-shadow-lg"></div>
        </div>
    </div>

    <div class="w-full lg:w-1/2 h-full flex flex-col relative z-10 bg-[#0f172a] lg:overflow-y-auto">
        
        <nav class="w-full p-6 lg:p-8 flex justify-end items-center lg:absolute top-0 right-0">
            <div class="text-[#FFE4B5] font-bold text-lg lg:text-xl tracking-[0.2em] opacity-80">PRIMESYS</div>
        </nav>

        <div class="px-6 py-8 md:px-12 lg:py-0 lg:pl-8 lg:pr-12 xl:pl-16 xl:pr-20 flex flex-col justify-center flex-grow space-y-6 xl:space-y-8">
            
            <div class="space-y-3">
                <h3 class="text-sky-500 text-xs lg:text-sm font-bold tracking-[0.2em] uppercase">Concepto</h3>
                <h2 class="text-2xl lg:text-3xl font-semibold text-white">¿En qué consiste?</h2>
                <p class="text-base lg:text-lg text-slate-400 font-light leading-6 lg:leading-7 border-l-2 border-slate-700 pl-4 lg:pl-6">
                    Las capacitaciones en software son programas diseñados para fortalecer las habilidades tecnológicas de los equipos, permitiendo dominar herramientas informáticas y soluciones digitales.
                </p>
            </div>

            <div class="space-y-5">
                
                <div class="space-y-2">
                    <h3 class="text-purple-400 text-xs lg:text-sm font-bold tracking-[0.2em] uppercase">Beneficios</h3>
                    <h2 class="text-2xl lg:text-3xl font-semibold text-white">Formación Corporativa</h2>
                </div>
                
                <div class="grid gap-3 lg:gap-3">
                    
                    <div class="group p-3 lg:p-4 bg-slate-800/30 rounded-xl hover:bg-slate-800/50 border border-slate-700/50 hover:border-sky-500/30 transition-all duration-300">
                        <div class="flex items-start gap-3">
                            <div class="bg-sky-500/10 p-2 rounded-lg text-sky-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-medium text-base mb-0.5">Entrenamiento Práctico</h4>
                                <p class="text-xs text-slate-400 font-light leading-snug">Cursos enfocados en el uso real y cotidiano de herramientas y aplicaciones.</p>
                            </div>
                        </div>
                    </div>

                    <div class="group p-3 lg:p-4 bg-slate-800/30 rounded-xl hover:bg-slate-800/50 border border-slate-700/50 hover:border-purple-500/30 transition-all duration-300">
                        <div class="flex items-start gap-3">
                            <div class="bg-purple-500/10 p-2 rounded-lg text-purple-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-medium text-base mb-0.5">Productividad al Máximo</h4>
                                <p class="text-xs text-slate-400 font-light leading-snug">Optimizamos el trabajo diario reduciendo errores y tiempos de ejecución.</p>
                            </div>
                        </div>
                    </div>

                    <div class="group p-3 lg:p-4 bg-slate-800/30 rounded-xl hover:bg-slate-800/50 border border-slate-700/50 hover:border-sky-500/30 transition-all duration-300">
                        <div class="flex items-start gap-3">
                            <div class="bg-sky-500/10 p-2 rounded-lg text-sky-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-medium text-base mb-0.5">Formación Personalizada</h4>
                                <p class="text-xs text-slate-400 font-light leading-snug">Programas adaptados específicamente al nivel y necesidades de tu equipo.</p>
                            </div>
                        </div>
                    </div>

                    <div class="group p-3 lg:p-4 bg-slate-800/30 rounded-xl hover:bg-slate-800/50 border border-slate-700/50 hover:border-purple-500/30 transition-all duration-300">
                        <div class="flex items-start gap-3">
                            <div class="bg-purple-500/10 p-2 rounded-lg text-purple-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-medium text-base mb-0.5">Actualización Constante</h4>
                                <p class="text-xs text-slate-400 font-light leading-snug">Capacitaciones en tecnologías emergentes y las últimas tendencias del mercado.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</body>
</html>