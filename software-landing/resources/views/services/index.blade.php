<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros Servicios - PRIMESYS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { 
            font-family: 'Montserrat', sans-serif; 
            /* Degradado de izquierda (oscuro) a derecha (azul PRIMESYS) */
            background: linear-gradient(to right, #040d14 0%, #0C3E61 100%);
            min-height: 100vh;
            color: #cbd5e1;
            margin: 0;
            padding: 0;
            background-attachment: fixed;
        }
        .text-gold { color: #FFE4B5; }
        
        /* Ajuste para que el sticky sidebar no se pierda en el scroll */
        .sticky-content {
            top: 7rem;
        }

        /* Scrollbar personalizada */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #040d14;
        }
        ::-webkit-scrollbar-thumb {
            background: #1e293b;
            border-radius: 10px;
        }
    </style>
</head>
<body class="antialiased flex flex-col">

    <header class="w-full py-4 px-6 md:px-8 flex justify-between items-center bg-[#0C3E61]/90 backdrop-blur border-b border-white/10 sticky top-0 z-50">
        <nav class="hidden md:flex space-x-6 lg:space-x-8 items-center text-gray-200 text-sm font-semibold tracking-wide">
            <a href="{{ url('/') }}" class="hover:text-sky-300 transition duration-300">INICIO</a>
            <a href="{{ url('/servicios') }}" class="bg-white/10 px-4 py-2 text-sky-300 rounded border border-white/10">SERVICIOS</a>
            <a href="{{ url('/clientes') }}" class="hover:text-sky-300 transition duration-300">CLIENTES</a>
            <a href="{{ url('/contacto') }}" class="hover:text-sky-300 transition duration-300">CONTACTANOS</a>
        </nav>

        <div class="text-gold font-bold text-lg md:text-xl tracking-widest z-50">PRIMESYS</div>

        <div class="md:hidden text-white z-50 cursor-pointer p-2" onclick="document.getElementById('mobile-menu').classList.remove('hidden')">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </div>
    </header>

    <div id="mobile-menu" class="hidden fixed inset-0 bg-[#0F172A] z-[999] flex flex-col justify-center items-center transition-opacity duration-300">
        <div class="absolute top-0 w-full p-6 flex justify-between items-center border-b border-white/10">
            <div class="text-gold font-bold text-xl tracking-widest">PRIMESYS</div>
            <button onclick="document.getElementById('mobile-menu').classList.add('hidden')" class="text-gray-400 hover:text-white focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        <div class="flex flex-col space-y-8 text-xl text-center">
            <a href="{{ url('/') }}" class="text-white hover:text-sky-400 font-medium tracking-wide">INICIO</a>
            <a href="{{ url('/servicios') }}" class="text-sky-400 font-bold tracking-widest">SERVICIOS</a>
            <a href="{{ url('/clientes') }}" class="text-white hover:text-sky-400 font-medium tracking-wide">CLIENTES</a>
            <a href="{{ url('/contacto') }}" class="text-white hover:text-sky-400 font-medium tracking-wide">CONTACTANOS</a>
        </div>
    </div>

    <main class="w-full max-w-[1600px] mx-auto px-4 md:px-6 pt-8 pb-12">
        <div class="flex flex-col lg:flex-row gap-4 lg:gap-12 items-start">
            
            <div class="lg:w-[30%] lg:sticky sticky-content pt-4">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="text-6xl md:text-7xl lg:text-8xl font-bold text-white leading-[0.85] mb-6 tracking-tighter">
                        Nuestros<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-blue-200">Servicios</span>
                    </h1>
                    <div class="w-16 h-1.5 bg-gradient-to-r from-blue-500 to-sky-300 mb-8 rounded-full"></div>
                    <p class="text-gray-300 text-lg font-medium leading-snug pr-10 opacity-90">
                        Soluciones especializadas en software que combinan estrategia, diseño y tecnología para escalar tu modelo de negocio.
                    </p>
                </div>
            </div>

            <div class="lg:w-[70%] w-full">
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">
                    
                    @foreach($services as $service)
                    <div class="group relative h-[300px] rounded-2xl overflow-hidden shadow-2xl border border-white/5 hover:border-sky-500/50 transition-all duration-500" 
                         data-aos="fade-up" 
                         data-aos-delay="{{ $loop->index * 70 }}">
                        
                        <div class="absolute inset-0">
                            <img src="{{ $service['image'] }}" 
                                 alt="{{ $service['title'] }}" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#040d14] via-[#040d14]/60 to-transparent"></div>
                        </div>

                        <div class="absolute top-5 left-5 w-9 h-9 rounded-full bg-black/40 backdrop-blur-md border border-white/20 flex items-center justify-center text-xs font-bold text-white z-10">
                            {{ $service['number'] }}
                        </div>

                        <div class="absolute inset-0 flex flex-col justify-end p-6">
                            <h3 class="text-xl font-bold text-white mb-4 leading-tight group-hover:text-sky-300 transition-colors">
                                {{ $service['title'] }}
                            </h3>
                            
                            <a href="{{ route('servicios.show', $service['slug']) }}" 
                               class="inline-flex items-center w-fit gap-2 px-5 py-2 rounded-xl bg-sky-500/10 border border-sky-400/30 text-sky-200 text-xs font-bold hover:bg-sky-600 hover:text-white transition-all duration-300">
                                Ver detalles
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </main>

    <footer class="py-10 text-center border-t border-white/5 bg-black/10 mt-auto">
        <p class="text-[10px] tracking-[0.3em] text-gray-500 uppercase">&copy; 2025 PRIMESYS · Software Excellence</p>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script> 
        AOS.init({ duration: 800, once: true }); 
    </script>
</body>
</html>