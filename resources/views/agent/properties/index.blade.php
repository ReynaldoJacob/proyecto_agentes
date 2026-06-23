<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Propiedades | Margarita Flores</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">

{{-- Navbar --}}
<nav class="fixed top-0 w-full z-50 bg-white shadow-sm border-b border-gray-200">
    <div class="px-6 py-4 max-w-7xl mx-auto flex justify-between items-center">
        <div class="flex items-center gap-4">
            <a href="{{ route('agent.dashboard') }}" class="text-gray-500 hover:text-gray-800 text-sm">← Dashboard</a>
            <h1 class="text-xl font-bold text-blue-700">Mis Propiedades</h1>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('agent.properties.create') }}"
               class="px-4 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700 font-medium">
                + Nueva Propiedad
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="px-3 py-2 text-sm text-red-600 hover:underline">Salir</button>
            </form>
        </div>
    </div>
</nav>

<main class="pt-24 px-6 pb-12 max-w-7xl mx-auto">

    @if(session('success'))
        <div class="mb-4 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg text-sm">
            {{ session('success') }}
        </div>
    @endif

    {{-- Filtros --}}
    <form method="GET" class="bg-white p-4 rounded-lg shadow-sm mb-6 flex flex-wrap gap-3 items-end">
        <div>
            <label class="block text-xs text-gray-500 mb-1">Buscar</label>
            <input type="text" name="search" value="{{ request('search') }}"
                   placeholder="Título o dirección..."
                   class="border border-gray-300 rounded-lg px-3 py-2 text-sm w-56 focus:outline-none focus:ring-2 focus:ring-blue-300">
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Tipo</label>
            <select name="type" class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                <option value="">Todos</option>
                @foreach($typeLabels as $val => $label)
                    <option value="{{ $val }}" @selected(request('type') === $val)>{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Operación</label>
            <select name="operation_type" class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                <option value="">Todas</option>
                @foreach($operationLabels as $val => $label)
                    <option value="{{ $val }}" @selected(request('operation_type') === $val)>{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Estado</label>
            <select name="status" class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                <option value="">Todos</option>
                @foreach($statusLabels as $val => $label)
                    <option value="{{ $val }}" @selected(request('status') === $val)>{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="px-4 py-2 bg-gray-800 text-white text-sm rounded-lg hover:bg-gray-700">Filtrar</button>
        <a href="{{ route('agent.properties.index') }}" class="px-4 py-2 text-sm text-gray-500 hover:underline">Limpiar</a>
    </form>

    {{-- Resultados --}}
    @if($properties->isEmpty())
        <div class="text-center py-20 text-gray-400">
            <p class="text-4xl mb-3">🏠</p>
            <p class="text-lg font-medium">Aún no tienes propiedades.</p>
            <a href="{{ route('agent.properties.create') }}" class="mt-4 inline-block px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">
                Agregar primera propiedad
            </a>
        </div>
    @else
        <p class="text-sm text-gray-500 mb-4">{{ $properties->total() }} propiedad(es) encontrada(s)</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($properties as $property)
                @php
                    $statusColors = [
                        'disponible' => 'bg-green-100 text-green-800',
                        'vendido'    => 'bg-red-100 text-red-800',
                        'rentado'    => 'bg-blue-100 text-blue-800',
                        'reservado'  => 'bg-yellow-100 text-yellow-800',
                    ];
                @endphp
                <div class="bg-white rounded-xl shadow hover:shadow-md transition overflow-hidden flex flex-col">
                    {{-- Imagen --}}
                    <div class="relative h-44 bg-gray-100">
                        @if($property->cover_image)
                            <img src="{{ Storage::url($property->cover_image) }}"
                                 alt="{{ $property->title }}"
                                 class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-gray-300">
                                <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                          d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                                    <polyline stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                              points="9 22 9 12 15 12 15 22"/>
                                </svg>
                            </div>
                        @endif
                        <span class="absolute top-2 left-2 text-xs font-semibold px-2 py-1 rounded-full
                                     {{ $statusColors[$property->status] ?? 'bg-gray-100 text-gray-600' }}">
                            {{ $property->getStatusLabel() }}
                        </span>
                        @if(!$property->is_active)
                            <span class="absolute top-2 right-2 text-xs font-semibold px-2 py-1 rounded-full bg-gray-800 text-white">Inactiva</span>
                        @endif
                    </div>

                    {{-- Info --}}
                    <div class="p-4 flex flex-col flex-1">
                        <div class="flex items-start justify-between gap-2 mb-1">
                            <h3 class="font-semibold text-gray-800 text-sm leading-snug">{{ $property->title }}</h3>
                        </div>
                        <p class="text-xs text-gray-500 mb-2">{{ $property->city }}, {{ $property->state }}</p>

                        <div class="flex gap-2 mb-3">
                            <span class="text-xs bg-blue-50 text-blue-700 px-2 py-0.5 rounded-full">{{ $property->getTypeLabel() }}</span>
                            <span class="text-xs bg-purple-50 text-purple-700 px-2 py-0.5 rounded-full">{{ $property->getOperationLabel() }}</span>
                        </div>

                        <p class="text-blue-700 font-bold text-lg mb-1">
                            {{ $property->currency }} {{ number_format($property->price, 0, '.', ',') }}
                        </p>

                        <div class="flex gap-4 text-xs text-gray-500 mb-4">
                            @if($property->bedrooms !== null)
                                <span>🛏 {{ $property->bedrooms }}</span>
                            @endif
                            @if($property->bathrooms !== null)
                                <span>🚿 {{ $property->bathrooms }}</span>
                            @endif
                            @if($property->area)
                                <span>📐 {{ $property->area }} m²</span>
                            @endif
                        </div>

                        <div class="mt-auto flex gap-2">
                            <a href="{{ route('agent.properties.show', $property) }}"
                               class="flex-1 text-center text-xs py-1.5 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50">
                                Ver
                            </a>
                            <a href="{{ route('agent.properties.edit', $property) }}"
                               class="flex-1 text-center text-xs py-1.5 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">
                                Editar
                            </a>
                            <form method="POST" action="{{ route('agent.properties.destroy', $property) }}"
                                  onsubmit="return confirm('¿Eliminar esta propiedad?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="text-xs py-1.5 px-3 border border-red-200 text-red-500 rounded-lg hover:bg-red-50">
                                    ✕
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $properties->links() }}
        </div>
    @endif
</main>
</body>
</html>
