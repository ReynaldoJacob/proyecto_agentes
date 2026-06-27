<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Mis Propiedades | Margarita Flores</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary:              '#004370',
                        'primary-container':  '#005b96',
                        'on-primary':         '#ffffff',
                        secondary:            '#25676f',
                        surface:              '#f9f9ff',
                        'surface-container':  '#e8eeff',
                        'surface-container-low': '#f1f3ff',
                        'surface-container-high':'#e3e8f9',
                        'on-surface':         '#161c27',
                        'on-surface-variant': '#414750',
                        'outline-variant':    '#c1c7d1',
                        outline:              '#717781',
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
        .prop-card { transition: transform 0.15s, box-shadow 0.15s; }
        .prop-card:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,67,112,0.10); }
    </style>
</head>
<body class="bg-surface min-h-screen">

{{-- Navbar --}}
<nav class="fixed top-0 w-full z-50 bg-white border-b border-outline-variant shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <a href="{{ route('agent.dashboard') }}"
               class="flex items-center gap-1.5 text-sm text-on-surface-variant hover:text-primary transition font-medium">
                <span class="material-symbols-outlined text-base">arrow_back</span>
                <span class="hidden sm:inline">Dashboard</span>
            </a>
            <span class="text-outline-variant">|</span>
            <div class="flex items-center gap-2">
                <div class="w-7 h-7 rounded-lg bg-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-white" style="font-size:16px">home_work</span>
                </div>
                <span class="font-heading text-primary font-semibold text-sm tracking-wide">Mis Propiedades</span>
            </div>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('agent.properties.create') }}"
               class="inline-flex items-center gap-1.5 bg-primary text-white px-4 py-2 rounded-xl text-sm font-semibold hover:bg-primary-container transition shadow-sm shadow-primary/20">
                <span class="material-symbols-outlined text-base">add</span>
                <span class="hidden sm:inline">Nueva Propiedad</span>
            </a>
            <a href="{{ route('agent.password') }}"
               class="flex items-center gap-1.5 text-sm text-on-surface-variant hover:text-primary transition font-medium">
                <span class="material-symbols-outlined text-base">manage_accounts</span>
                <span class="hidden sm:inline">{{ auth()->user()->name }}</span>
            </a>
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

<main class="pt-20 max-w-7xl mx-auto px-4 sm:px-6 py-8 space-y-6">

    @if(session('success'))
        <div class="flex items-center gap-3 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-2xl px-5 py-3 text-sm font-medium">
            <span class="material-symbols-outlined text-base">check_circle</span>
            {{ session('success') }}
        </div>
    @endif

    {{-- Filtros --}}
    <form method="GET" action="{{ route('agent.properties.index') }}"
          class="bg-white rounded-2xl border border-outline-variant/50 shadow-sm p-4 flex flex-wrap gap-3 items-end">
        <div class="flex-1 min-w-[180px]">
            <label class="block text-xs font-medium text-on-surface-variant mb-1.5">Buscar</label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-base">search</span>
                <input type="text" name="search" value="{{ request('search') }}"
                       placeholder="Título o dirección..."
                       class="w-full pl-9 pr-4 py-2 text-sm rounded-xl border border-outline-variant bg-surface-container-low focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition">
            </div>
        </div>
        <div class="min-w-[130px]">
            <label class="block text-xs font-medium text-on-surface-variant mb-1.5">Tipo</label>
            <select name="type"
                    class="w-full py-2 px-3 text-sm rounded-xl border border-outline-variant bg-surface-container-low focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition">
                <option value="">Todos</option>
                @foreach($typeLabels as $val => $label)
                    <option value="{{ $val }}" @selected(request('type') === $val)>{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <div class="min-w-[150px]">
            <label class="block text-xs font-medium text-on-surface-variant mb-1.5">Operación</label>
            <select name="operation_type"
                    class="w-full py-2 px-3 text-sm rounded-xl border border-outline-variant bg-surface-container-low focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition">
                <option value="">Todas</option>
                @foreach($operationLabels as $val => $label)
                    <option value="{{ $val }}" @selected(request('operation_type') === $val)>{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <div class="min-w-[130px]">
            <label class="block text-xs font-medium text-on-surface-variant mb-1.5">Estado</label>
            <select name="status"
                    class="w-full py-2 px-3 text-sm rounded-xl border border-outline-variant bg-surface-container-low focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition">
                <option value="">Todos</option>
                @foreach($statusLabels as $val => $label)
                    <option value="{{ $val }}" @selected(request('status') === $val)>{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex gap-2">
            <button type="submit"
                    class="inline-flex items-center gap-1.5 px-4 py-2 bg-primary text-white text-sm rounded-xl font-semibold hover:bg-primary-container transition">
                <span class="material-symbols-outlined text-base">filter_list</span>
                Filtrar
            </button>
            <a href="{{ route('agent.properties.index') }}"
               class="inline-flex items-center gap-1 px-3 py-2 text-sm text-on-surface-variant border border-outline-variant rounded-xl hover:bg-surface-container transition">
                <span class="material-symbols-outlined text-base">close</span>
            </a>
        </div>
    </form>

    {{-- Resultados --}}
    @if($properties->isEmpty())
        <div class="bg-white rounded-2xl border border-outline-variant/50 shadow-sm text-center py-20 px-6">
            <div class="w-16 h-16 rounded-2xl bg-surface-container mx-auto flex items-center justify-center mb-4">
                <span class="material-symbols-outlined text-outline text-3xl">home_work</span>
            </div>
            <p class="font-heading text-on-surface-variant text-base mb-1">No hay propiedades</p>
            <p class="text-sm text-on-surface-variant mb-5">
                @if(request()->hasAny(['search','type','operation_type','status']))
                    Ninguna propiedad coincide con los filtros aplicados.
                @else
                    Aún no tienes propiedades publicadas.
                @endif
            </p>
            <a href="{{ route('agent.properties.create') }}"
               class="inline-flex items-center gap-1.5 bg-primary text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-primary-container transition">
                <span class="material-symbols-outlined text-base">add</span>
                Agregar propiedad
            </a>
        </div>
    @else
        <div class="flex items-center justify-between">
            <p class="text-sm text-on-surface-variant">
                <span class="font-semibold text-on-surface">{{ $properties->total() }}</span> propiedad(es) encontrada(s)
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach($properties as $property)
            @php
                $badge = [
                    'disponible' => ['bg-emerald-50 text-emerald-700 border-emerald-200', 'check_circle'],
                    'vendido'    => ['bg-violet-50 text-violet-700 border-violet-200',    'sell'],
                    'rentado'    => ['bg-blue-50 text-blue-700 border-blue-200',          'key'],
                    'reservado'  => ['bg-amber-50 text-amber-700 border-amber-200',       'bookmark'],
                ][$property->status] ?? ['bg-surface-container text-on-surface-variant border-outline-variant', 'radio_button_unchecked'];
            @endphp
            <div class="prop-card bg-white rounded-2xl border border-outline-variant/50 shadow-sm overflow-hidden flex flex-col">

                {{-- Imagen --}}
                <div class="relative h-48 bg-surface-container">
                    @if($property->cover_image)
                        <img src="{{ Storage::url($property->cover_image) }}"
                             alt="{{ $property->title }}"
                             class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full flex items-center justify-center">
                            <span class="material-symbols-outlined text-outline-variant text-5xl">home</span>
                        </div>
                    @endif

                    {{-- Badges sobre la imagen --}}
                    <div class="absolute top-3 left-3 flex gap-1.5">
                        <span class="inline-flex items-center gap-1 text-xs font-semibold px-2.5 py-1 rounded-full border {{ $badge[0] }}">
                            <span class="material-symbols-outlined" style="font-size:13px">{{ $badge[1] }}</span>
                            {{ $property->getStatusLabel() }}
                        </span>
                        @if(!$property->is_active)
                            <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-gray-800 text-white border border-gray-700">Inactiva</span>
                        @endif
                    </div>

                    @if($property->is_featured)
                        <div class="absolute top-3 right-3">
                            <span class="inline-flex items-center gap-1 text-xs font-semibold px-2.5 py-1 rounded-full bg-amber-400 text-amber-900 border border-amber-300">
                                <span class="material-symbols-outlined" style="font-size:13px">star</span>
                                Destacada
                            </span>
                        </div>
                    @endif
                </div>

                {{-- Info --}}
                <div class="p-4 flex flex-col flex-1">
                    <div class="flex gap-1.5 mb-2">
                        <span class="text-xs bg-primary/10 text-primary px-2 py-0.5 rounded-full font-medium">{{ $property->getTypeLabel() }}</span>
                        <span class="text-xs bg-secondary/10 text-secondary px-2 py-0.5 rounded-full font-medium">{{ $property->getOperationLabel() }}</span>
                    </div>

                    <h3 class="font-heading font-semibold text-sm text-on-surface leading-snug mb-1 line-clamp-2">{{ $property->title }}</h3>

                    @if($property->city)
                        <p class="text-xs text-on-surface-variant mb-3 flex items-center gap-1">
                            <span class="material-symbols-outlined" style="font-size:13px">location_on</span>
                            {{ $property->city }}{{ $property->state ? ', '.$property->state : '' }}
                        </p>
                    @endif

                    <p class="font-heading font-bold text-primary text-lg mb-3">
                        {{ $property->currency }} {{ number_format($property->price, 0, '.', ',') }}
                    </p>

                    @if($property->bedrooms !== null || $property->bathrooms !== null || $property->parking_spaces !== null || $property->area)
                        <div class="flex flex-wrap gap-x-3 gap-y-1 text-xs text-on-surface-variant mb-4 pb-4 border-b border-outline-variant/40">
                            @if($property->bedrooms !== null)
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined" style="font-size:14px">bed</span>
                                    {{ $property->bedrooms }}
                                </span>
                            @endif
                            @if($property->bathrooms !== null)
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined" style="font-size:14px">shower</span>
                                    {{ $property->bathrooms }}
                                </span>
                            @endif
                            @if($property->parking_spaces !== null)
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined" style="font-size:14px">directions_car</span>
                                    {{ $property->parking_spaces }}
                                </span>
                            @endif
                            @if($property->area)
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined" style="font-size:14px">square_foot</span>
                                    {{ number_format($property->area, 0) }} m²
                                </span>
                            @endif
                        </div>
                    @endif

                    {{-- Acciones --}}
                    <div class="mt-auto flex gap-2">
                        <a href="{{ route('agent.properties.show', $property) }}"
                           class="flex-1 inline-flex items-center justify-center gap-1 text-xs py-2 border border-primary/30 text-primary rounded-xl hover:bg-primary/5 transition font-medium">
                            <span class="material-symbols-outlined text-sm">visibility</span>
                            Ver
                        </a>
                        <a href="{{ route('agent.properties.edit', $property) }}"
                           class="flex-1 inline-flex items-center justify-center gap-1 text-xs py-2 border border-outline-variant text-on-surface-variant rounded-xl hover:bg-surface-container transition font-medium">
                            <span class="material-symbols-outlined text-sm">edit</span>
                            Editar
                        </a>
                        @if($property->maps_url)
                            <a href="{{ $property->maps_url }}" target="_blank" rel="noopener"
                               class="inline-flex items-center justify-center px-3 py-2 border border-emerald-200 text-emerald-600 rounded-xl hover:bg-emerald-50 transition"
                               title="Ver en Google Maps">
                                <span class="material-symbols-outlined text-sm">location_on</span>
                            </a>
                        @endif
                        <form method="POST" action="{{ route('agent.properties.destroy', $property) }}"
                              onsubmit="return confirm('¿Eliminar esta propiedad?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="inline-flex items-center justify-center px-3 py-2 border border-red-200 text-red-500 rounded-xl hover:bg-red-50 transition"
                                    title="Eliminar">
                                <span class="material-symbols-outlined text-sm">delete</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $properties->links() }}
        </div>
    @endif

</main>
</body>
</html>
