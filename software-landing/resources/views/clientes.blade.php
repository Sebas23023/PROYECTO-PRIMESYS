@extends('layouts.app')

@section('title', 'Nuestros Clientes - PRIMESYS')

@section('content')
    <style>
        main { 
            background: linear-gradient(to right, #040d14 0%, #0C3E61 100%);
            min-height: 100vh;
        }
        .sticky-content {
            top: 7rem;
        }
    </style>

    <div class="w-full max-w-[1600px] mx-auto px-4 md:px-6 pt-8 pb-16">
        <div class="flex flex-col lg:flex-row gap-4 lg:gap-12 items-start">
            
            <div class="lg:w-[30%] lg:sticky sticky-content pt-4">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="text-6xl md:text-7xl lg:text-8xl font-bold text-white leading-[0.85] mb-6 tracking-tighter">
                        Nuestros<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-blue-200">Clientes</span>
                    </h1>
                    <div class="w-16 h-1.5 bg-gradient-to-r from-blue-500 to-sky-300 mb-8 rounded-full"></div>
                    <p class="text-gray-300 text-lg font-medium leading-snug pr-10 opacity-90">
                        Nos enorgullece ser el <strong class="text-white font-semibold border-b border-sky-500">socio tecnológico</strong> de grandes instituciones y empresas líderes.
                    </p>
                </div>
            </div>

            <div class="lg:w-[70%] w-full">
                <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-5">
                    @php
                        $clientes = [
                            ['img' => 'LuzCooperativa.png', 'name' => 'Luz Cooperativa'],
                            ['img' => 'AlcaldiaGuaranda.jpg', 'name' => 'Alcaldía Guaranda'],
                            ['img' => 'MinisterioDeporte.png', 'name' => 'Ministerio del Deporte'],
                            ['img' => 'Proamazonia.png', 'name' => 'PROAMAZONIA'],
                            ['img' => 'ANT.png', 'name' => 'ANT'],
                            ['img' => 'AsociacionHipotecariaEspanola.png', 'name' => 'Asoc. Hipotecaria'],
                            ['img' => 'BancoAustro.png', 'name' => 'Banco del Austro'],
                            ['img' => 'DefensoriaPueblo.png', 'name' => 'Defensoría del Pueblo'],
                        ];
                    @endphp

                    @foreach($clientes as $index => $cliente)
                    <div class="bg-white/95 rounded-2xl shadow-xl h-40 md:h-48 flex items-center justify-center p-6 hover:scale-[1.03] transition-all duration-300 cursor-pointer group border border-white/10 hover:border-sky-400"
                         data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                        <img src="{{ asset('img/logos/' . $cliente['img']) }}" 
                             alt="{{ $cliente['name'] }}" 
                             class="max-h-full max-w-full object-contain filter group-hover:contrast-125 transition duration-500">
                    </div>
                    @endforeach
                </div>

                <div class="mt-16 flex justify-center" data-aos="zoom-in" data-aos-delay="400">
                    <div class="inline-block p-[2px] rounded-xl bg-gradient-to-r from-sky-400 to-blue-600 shadow-2xl">
                        <a href="{{ url('/contacto') }}" class="flex items-center gap-3 px-12 py-4 rounded-[10px] bg-[#040d14] text-white font-bold tracking-widest hover:bg-transparent transition-all duration-500 group">
                            TRABAJA CON NOSOTROS
                            <svg class="w-5 h-5 group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection