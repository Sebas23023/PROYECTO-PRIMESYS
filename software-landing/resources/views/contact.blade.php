@extends('layouts.app')

@section('title', 'Contáctanos - PRIMESYS')

@section('content')
    <style>
        main { 
            background: linear-gradient(to right, #040d14 0%, #0C3E61 100%);
            min-height: 100vh;
        }
        .sticky-content {
            top: 7rem;
        }
        /* Estilo para los inputs para que combinen con el nuevo fondo */
        .form-input {
            background: rgba(255, 255, 255, 0.03) !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            backdrop-filter: blur(10px);
        }
        .form-input:focus {
            border-color: #38bdf8 !important;
            box-shadow: 0 0 0 1px #38bdf8;
        }
    </style>

    <div class="w-full max-w-[1600px] mx-auto px-4 md:px-6 pt-8 pb-16 relative z-10">
        <div class="flex flex-col lg:flex-row gap-4 lg:gap-12 items-start">
            
            <div class="lg:w-[35%] lg:sticky sticky-content pt-4">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="text-6xl md:text-7xl lg:text-8xl font-bold text-white leading-[0.85] mb-6 tracking-tighter">
                        Hablemos de tu<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-blue-200">Proyecto</span>
                    </h1>
                    <div class="w-16 h-1.5 bg-gradient-to-r from-blue-500 to-sky-300 mb-8 rounded-full"></div>
                    
                    <p class="text-gray-300 text-lg font-medium leading-snug pr-10 opacity-90 mb-10">
                        Estamos listos para escuchar tus necesidades. Completa el formulario y te responderemos directamente a tu correo.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-center gap-4 group">
                            <div class="w-12 h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-sky-400 group-hover:border-sky-500 transition-all shadow-xl">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <p class="text-[10px] text-sky-400 font-bold uppercase tracking-[0.2em]">Correo Electrónico</p>
                                <p class="text-lg text-white font-semibold">sebasarias144@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:w-[65%] w-full">
                <div class="bg-white/[0.02] border border-white/10 backdrop-blur-xl p-8 md:p-12 rounded-[2rem] shadow-2xl" data-aos="fade-up">
                    
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 rounded-xl text-sm flex items-center gap-3">
                            <span class="text-xl">✅</span> {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contacto.submit') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6"> 
                        @csrf 

                        <div class="space-y-2">
                            <label for="name" class="block text-[11px] font-bold text-gray-400 uppercase tracking-widest ml-1">Nombre Completo</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                   class="form-input w-full rounded-xl px-4 py-4 text-white placeholder-gray-600 focus:outline-none transition text-sm"
                                   placeholder="Ej. Juan Pérez">
                            @error('name') <span class="text-red-400 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="email" class="block text-[11px] font-bold text-gray-400 uppercase tracking-widest ml-1">Correo Electrónico</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                                   class="form-input w-full rounded-xl px-4 py-4 text-white placeholder-gray-600 focus:outline-none transition text-sm"
                                   placeholder="Ej. juan@empresa.com">
                            @error('email') <span class="text-red-400 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div class="space-y-2 md:col-span-2">
                            <label for="message" class="block text-[11px] font-bold text-gray-400 uppercase tracking-widest ml-1">Tu Mensaje</label>
                            <textarea name="message" id="message" rows="5" required
                                      class="form-input w-full rounded-xl px-4 py-4 text-white placeholder-gray-600 focus:outline-none transition resize-none text-sm"
                                      placeholder="Cuéntanos sobre tu proyecto o duda...">{{ old('message') }}</textarea>
                            @error('message') <span class="text-red-400 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div class="md:col-span-2 pt-4">
                            <button type="submit" 
                                    class="w-full bg-gradient-to-r from-sky-600 to-blue-700 hover:from-sky-500 hover:to-blue-600 text-white font-bold py-5 rounded-xl shadow-xl transform active:scale-[0.98] transition-all duration-300 text-sm tracking-[0.2em]">
                                ENVIAR MENSAJE
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection