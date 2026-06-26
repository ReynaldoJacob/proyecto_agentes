<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Panel Agente | Margarita Flores</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&amp;family=Montserrat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary:            '#004370',
                        'primary-container':'#005b96',
                        'on-primary':       '#ffffff',
                        secondary:          '#25676f',
                        surface:            '#f9f9ff',
                        'surface-container':'#e8eeff',
                        'surface-container-low': '#f1f3ff',
                        'surface-container-high':'#e3e8f9',
                        'on-surface':       '#161c27',
                        'on-surface-variant':'#414750',
                        'outline-variant':  '#c1c7d1',
                        outline:            '#717781',
                    },
                    fontFamily: {
                        heading: ['Cinzel', 'serif'],
                        body:    ['Montserrat', 'sans-serif'],
                    },
                }
            }
        };
    </script>
    <style>
        body { font-family: 'Montserrat', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block; line-height: 1;
        }
        .stat-card:hover { transform: translateY(-2px); }
    </style>
</head>
<body class="bg-surface min-h-screen">

@php
    $props       = auth()->user()->properties();
    $total       = $props->count();
    $disponibles = (clone auth()->user()->properties())->where('status', 'disponible')->count();
    $vendidos    = (clone auth()->user()->properties())->where('status', 'vendido')->count();
    $rentados    = (clone auth()->user()->properties())->where('status', 'rentado')->count();
    $recent      = auth()->user()->properties()->orderByDesc('created_at')->limit(5)->get();
@endphp

{{-- Navbar --}}
<nav class="fixed top-0 w-full z-50 bg-white border-b border-outline-variant shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <div class="w-8 h-8 rounded-lg bg-primary flex items-center justify-center">
                <span class="material-symbols-outlined text-white text-base">home_work</span>
            </div>
            <span class="font-heading text-primary font-semibold tracking-wide text-sm">Margarita Flores</span>
            <span class="text-xs bg-surface-container text-on-surface-variant px-2.5 py-0.5 rounded-full font-body font-medium">Agente</span>
        </div>
        <div class="flex items-center gap-4">
            <div class="flex items-center gap-2 text-sm text-on-surface-variant">
                <span class="material-symbols-outlined text-base">account_circle</span>
                <span class="font-medium hidden sm:block">{{ auth()->user()->name }}</span>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="flex items-center gap-1.5 px-3 py-1.5 text-sm text-red-600 border border-red-200 rounded-lg hover:bg-red-50 transition font-medium">
                    <span class="material-symbols-outlined text-base">logout</span>
                    <span class="hidden sm:inline">Salir</span>
                </button>
            </form>
        </div>
    </div>
</nav>

<main class="pt-20 max-w-7xl mx-auto px-4 sm:px-6 py-8 space-y-8">

    {{-- Header saludo --}}
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
        <div>
            <p class="text-sm text-on-surface-variant font-body mb-1">Bienvenida de vuelta</p>
            <h1 class="font-heading text-2xl md:text-3xl text-primary font-semibold">{{ auth()->user()->name }}</h1>
        </div>
        <a href="{{ route('agent.properties.create') }}"
           class="inline-flex items-center gap-2 bg-primary text-white px-5 py-2.5 rounded-xl hover:bg-primary-container transition font-body font-semibold text-sm shadow-sm shadow-primary/20">
            <span class="material-symbols-outlined text-base">add</span>
            Nueva Propiedad
        </a>
    </div>

    {{-- Stat cards --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="stat-card bg-white rounded-2xl p-5 border border-outline-variant/50 shadow-sm transition-all duration-200">
            <div class="flex justify-between items-start mb-4">
                <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">home_work</span>
                </div>
                <span class="text-xs text-on-surface-variant bg-surface-container px-2 py-0.5 rounded-full">Total</span>
            </div>
            <p class="text-3xl font-heading font-bold text-primary">{{ $total }}</p>
            <p class="text-xs text-on-surface-variant font-body mt-1">Propiedades</p>
        </div>

        <div class="stat-card bg-white rounded-2xl p-5 border border-outline-variant/50 shadow-sm transition-all duration-200">
            <div class="flex justify-between items-start mb-4">
                <div class="w-10 h-10 rounded-xl bg-emerald-50 flex items-center justify-center">
                    <span class="material-symbols-outlined text-emerald-600">check_circle</span>
                </div>
                <span class="text-xs text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-full">Activas</span>
            </div>
            <p class="text-3xl font-heading font-bold text-emerald-600">{{ $disponibles }}</p>
            <p class="text-xs text-on-surface-variant font-body mt-1">Disponibles</p>
        </div>

        <div class="stat-card bg-white rounded-2xl p-5 border border-outline-variant/50 shadow-sm transition-all duration-200">
            <div class="flex justify-between items-start mb-4">
                <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center">
                    <span class="material-symbols-outlined text-blue-600">key</span>
                </div>
                <span class="text-xs text-blue-700 bg-blue-50 px-2 py-0.5 rounded-full">Renta</span>
            </div>
            <p class="text-3xl font-heading font-bold text-blue-600">{{ $rentados }}</p>
            <p class="text-xs text-on-surface-variant font-body mt-1">Rentadas</p>
        </div>

        <div class="stat-card bg-white rounded-2xl p-5 border border-outline-variant/50 shadow-sm transition-all duration-200">
            <div class="flex justify-between items-start mb-4">
                <div class="w-10 h-10 rounded-xl bg-violet-50 flex items-center justify-center">
                    <span class="material-symbols-outlined text-violet-600">sell</span>
                </div>
                <span class="text-xs text-violet-700 bg-violet-50 px-2 py-0.5 rounded-full">Cerradas</span>
            </div>
            <p class="text-3xl font-heading font-bold text-violet-600">{{ $vendidos }}</p>
            <p class="text-xs text-on-surface-variant font-body mt-1">Vendidas</p>
        </div>
    </div>

    {{-- Acciones rápidas --}}
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <a href="{{ route('agent.properties.create') }}"
           class="group flex items-center gap-4 bg-primary text-white p-5 rounded-2xl hover:bg-primary-container transition-all duration-200 shadow-sm shadow-primary/20">
            <div class="w-11 h-11 rounded-xl bg-white/20 flex items-center justify-center group-hover:bg-white/30 transition">
                <span class="material-symbols-outlined">add_home</span>
            </div>
            <div>
                <p class="font-body font-semibold">Nueva Propiedad</p>
                <p class="text-white/70 text-xs font-body mt-0.5">Publicar casa, terreno, depto…</p>
            </div>
        </a>

        <a href="{{ route('agent.properties.index') }}"
           class="group flex items-center gap-4 bg-white border border-outline-variant/50 text-on-surface p-5 rounded-2xl hover:border-primary/30 hover:bg-surface-container-low transition-all duration-200 shadow-sm">
            <div class="w-11 h-11 rounded-xl bg-surface-container flex items-center justify-center group-hover:bg-primary/10 transition">
                <span class="material-symbols-outlined text-on-surface-variant group-hover:text-primary transition">apartment</span>
            </div>
            <div>
                <p class="font-body font-semibold">Mis Propiedades</p>
                <p class="text-on-surface-variant text-xs font-body mt-0.5">Ver y gestionar listado</p>
            </div>
        </a>

        <a href="{{ route('agent.properties.index') }}?status=disponible"
           class="group flex items-center gap-4 bg-white border border-outline-variant/50 text-on-surface p-5 rounded-2xl hover:border-primary/30 hover:bg-surface-container-low transition-all duration-200 shadow-sm">
            <div class="w-11 h-11 rounded-xl bg-surface-container flex items-center justify-center group-hover:bg-emerald-50 transition">
                <span class="material-symbols-outlined text-on-surface-variant group-hover:text-emerald-600 transition">filter_list</span>
            </div>
            <div>
                <p class="font-body font-semibold">Ver Disponibles</p>
                <p class="text-on-surface-variant text-xs font-body mt-0.5">Filtrar por disponibles</p>
            </div>
        </a>
    </div>

    {{-- Propiedades recientes --}}
    <div class="bg-white rounded-2xl border border-outline-variant/50 shadow-sm overflow-hidden">
        <div class="flex justify-between items-center px-6 py-4 border-b border-outline-variant/50">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-xl">schedule</span>
                <h2 class="font-heading text-base font-semibold text-on-surface">Propiedades Recientes</h2>
            </div>
            <a href="{{ route('agent.properties.index') }}"
               class="text-xs text-primary hover:underline font-body font-medium flex items-center gap-1">
                Ver todas
                <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>

        @if($recent->isEmpty())
            <div class="text-center py-16 px-6">
                <div class="w-16 h-16 rounded-2xl bg-surface-container mx-auto flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-outline text-3xl">home_work</span>
                </div>
                <p class="font-body text-on-surface-variant text-sm mb-3">Aún no tienes propiedades publicadas.</p>
                <a href="{{ route('agent.properties.create') }}"
                   class="inline-flex items-center gap-1.5 text-sm text-primary font-semibold hover:underline font-body">
                    <span class="material-symbols-outlined text-base">add</span>
                    Publicar primera propiedad
                </a>
            </div>
        @else
            <div class="divide-y divide-outline-variant/30">
                @foreach($recent as $property)
                @php
                    $badge = [
                        'disponible' => ['bg-emerald-50 text-emerald-700', 'check_circle'],
                        'vendido'    => ['bg-violet-50 text-violet-700',  'sell'],
                        'rentado'    => ['bg-blue-50 text-blue-700',      'key'],
                        'reservado'  => ['bg-amber-50 text-amber-700',    'bookmark'],
                    ][$property->status] ?? ['bg-surface-container text-on-surface-variant', 'radio_button_unchecked'];
                @endphp
                <div class="flex items-center gap-4 px-6 py-4 hover:bg-surface-container-low transition group">
                    {{-- Imagen --}}
                    <div class="flex-shrink-0 w-14 h-14 rounded-xl overflow-hidden bg-surface-container">
                        @if($property->cover_image)
                            <img src="{{ Storage::url($property->cover_image) }}"
                                 class="w-full h-full object-cover" alt="{{ $property->title }}">
                        @else
                            <div class="w-full h-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-outline text-xl">home</span>
                            </div>
                        @endif
                    </div>

                    {{-- Info --}}
                    <div class="flex-1 min-w-0">
                        <p class="font-body font-semibold text-sm text-on-surface truncate">{{ $property->title }}</p>
                        <p class="text-xs text-on-surface-variant font-body mt-0.5">
                            {{ $property->city }}{{ $property->state ? ', '.$property->state : '' }}
                            · {{ $property->getOperationLabel() }}
                        </p>
                    </div>

                    {{-- Precio --}}
                    <div class="hidden sm:block text-right flex-shrink-0">
                        <p class="font-heading font-semibold text-sm text-primary">
                            {{ $property->currency }} {{ number_format($property->price, 0, '.', ',') }}
                        </p>
                    </div>

                    {{-- Estado --}}
                    <div class="flex-shrink-0">
                        <span class="inline-flex items-center gap-1 text-xs px-2.5 py-1 rounded-full font-body font-medium {{ $badge[0] }}">
                            <span class="material-symbols-outlined text-xs" style="font-size:13px">{{ $badge[1] }}</span>
                            {{ $property->getStatusLabel() }}
                        </span>
                    </div>

                    {{-- Acciones --}}
                    <div class="flex-shrink-0 flex gap-1 opacity-0 group-hover:opacity-100 transition">
                        <a href="{{ route('agent.properties.show', $property) }}"
                           class="p-1.5 rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-primary transition"
                           title="Ver">
                            <span class="material-symbols-outlined text-base">visibility</span>
                        </a>
                        <a href="{{ route('agent.properties.edit', $property) }}"
                           class="p-1.5 rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-primary transition"
                           title="Editar">
                            <span class="material-symbols-outlined text-base">edit</span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>

</main>
</body>
</html>
