<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PRIMESYS')</title> <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,400&display=swap" rel="stylesheet"> 
    
    <style>
        body { 
            font-family: 'Montserrat', sans-serif; 
            background: linear-gradient(to bottom, #0C3E61, #0F172A);
            min-height: 100vh;
            background-attachment: fixed;
            color: #cbd5e1;
            overflow-x: hidden;
        }
        .text-gold { color: #FFE4B5; }
        .font-serif-italic { font-family: 'Playfair Display', serif; font-style: italic; }
    </style>
</head>
<body class="antialiased flex flex-col min-h-screen">

    <header class="w-full py-5 px-6 md:px-8 flex justify-between items-center bg-[#0C3E61]/95 backdrop-blur border-b border-white/10 sticky top-0 z-50">
        <nav class="hidden md:flex space-x-6 lg:space-x-8 items-center text-gray-200 text-sm font-semibold tracking-wide">
            <a href="{{ url('/') }}" class="hover:text-sky-300 transition {{ Request::is('/') ? 'text-sky-300' : '' }}">INICIO</a>
            <a href="{{ url('/servicios') }}" class="hover:text-sky-300 transition {{ Request::is('servicios*') ? 'bg-white/10 px-3 py-1 rounded' : '' }}">SERVICIOS</a>
            <a href="{{ url('/clientes') }}" class="hover:text-sky-300 transition {{ Request::is('clientes') ? 'bg-white/10 px-3 py-1 rounded' : '' }}">CLIENTES</a>
            <a href="{{ url('/contacto') }}" class="hover:text-sky-300 transition {{ Request::is('contacto') ? 'bg-white/10 px-3 py-1 rounded' : '' }}">CONTACTANOS</a>
        </nav>

        <div class="text-gold font-bold text-lg md:text-xl tracking-widest z-50">PRIMESYS</div>

        <button class="md:hidden text-white z-50 focus:outline-none" onclick="document.getElementById('mobile-menu').classList.remove('hidden')">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
    </header>

    <main class="flex-grow w-full">
        @yield('content')
    </main>

    <footer class="bg-[#0F172A] py-8 border-t border-white/5 text-center mt-auto">
        <div class="max-w-4xl mx-auto px-4 flex flex-col items-center justify-center">
            <h2 class="text-2xl font-bold tracking-widest text-gold font-serif mb-2">PRIMESYS</h2>
            <p class="text-gray-500 text-xs md:text-sm">&copy; 2025 Todos los derechos reservados.</p>
        </div>
    </footer>

    <div id="mobile-menu" class="hidden fixed inset-0 bg-[#0F172A] z-[999] flex flex-col justify-center items-center transition-opacity duration-300">
        <div class="absolute top-0 w-full p-6 flex justify-between items-center border-b border-white/10">
            <div class="text-gold font-bold text-xl tracking-widest">PRIMESYS</div>
            <button onclick="document.getElementById('mobile-menu').classList.add('hidden')" class="text-gray-400 hover:text-white focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        <div class="flex flex-col space-y-8 text-xl text-center">
            <a href="{{ url('/') }}" class="text-white hover:text-sky-400">INICIO</a>
            <a href="{{ url('/servicios') }}" class="text-white hover:text-sky-400">SERVICIOS</a>
            <a href="{{ url('/trabajo') }}" class="text-white hover:text-sky-400">TRABAJO</a>
            <a href="{{ url('/clientes') }}" class="text-white hover:text-sky-400">CLIENTES</a>
            <a href="{{ url('/contacto') }}" class="text-white hover:text-sky-400">CONTACTANOS</a>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script> AOS.init({ once: false, offset: 100, duration: 800 }); </script>
</body>
</html>