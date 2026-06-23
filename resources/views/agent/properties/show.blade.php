<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $property->title }} | Margarita Flores</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">

<nav class="fixed top-0 w-full z-50 bg-white shadow-sm border-b border-gray-200">
    <div class="px-6 py-4 max-w-5xl mx-auto flex justify-between items-center">
        <div class="flex items-center gap-4">
            <a href="{{ route('agent.properties.index') }}" class="text-gray-500 hover:text-gray-800 text-sm">← Mis Propiedades</a>
            <h1 class="text-lg font-bold text-gray-800 truncate max-w-xs">{{ $property->title }}</h1>
        </div>
        <div class="flex items-center gap-2">
            <a href="{{ route('agent.properties.edit', $property) }}"
               class="px-4 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700">
                Editar
            </a>
            <form method="POST" action="{{ route('agent.properties.destroy', $property) }}"
                  onsubmit="return confirm('¿Eliminar esta propiedad permanentemente?')">
                @csrf
                @method('DELETE')
                <button class="px-4 py-2 border border-red-200 text-red-500 text-sm rounded-lg hover:bg-red-50">Eliminar</button>
            </form>
        </div>
    </div>
</nav>

<main class="pt-24 px-4 pb-16 max-w-5xl mx-auto">

    @if(session('success'))
        <div class="mb-4 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg text-sm">
            {{ session('success') }}
        </div>
    @endif

    @php
        $statusColors = [
            'disponible' => 'bg-green-100 text-green-800',
            'vendido'    => 'bg-red-100 text-red-800',
            'rentado'    => 'bg-blue-100 text-blue-800',
            'reservado'  => 'bg-yellow-100 text-yellow-800',
        ];
    @endphp

    {{-- Imagen principal --}}
    @if($property->cover_image)
        <div class="rounded-xl overflow-hidden mb-6 h-72">
            <img src="{{ Storage::url($property->cover_image) }}" alt="{{ $property->title }}"
                 class="w-full h-full object-cover">
        </div>
    @endif

    {{-- Galería adicional --}}
    @if($property->images && count($property->images))
        <div class="flex gap-3 mb-6 overflow-x-auto pb-2">
            @foreach($property->images as $img)
                <img src="{{ Storage::url($img) }}" alt=""
                     class="h-24 w-36 flex-shrink-0 rounded-lg object-cover cursor-pointer hover:opacity-90">
            @endforeach
        </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        {{-- Info principal --}}
        <div class="lg:col-span-2 space-y-6">

            {{-- Header info --}}
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex flex-wrap gap-2 mb-3">
                    <span class="text-xs font-semibold px-3 py-1 rounded-full {{ $statusColors[$property->status] ?? 'bg-gray-100 text-gray-600' }}">
                        {{ $property->getStatusLabel() }}
                    </span>
                    <span class="text-xs font-semibold px-3 py-1 rounded-full bg-blue-100 text-blue-800">
                        {{ $property->getTypeLabel() }}
                    </span>
                    <span class="text-xs font-semibold px-3 py-1 rounded-full bg-purple-100 text-purple-800">
                        {{ $property->getOperationLabel() }}
                    </span>
                    @if($property->is_featured)
                        <span class="text-xs font-semibold px-3 py-1 rounded-full bg-yellow-100 text-yellow-800">⭐ Destacada</span>
                    @endif
                    @if(!$property->is_active)
                        <span class="text-xs font-semibold px-3 py-1 rounded-full bg-gray-200 text-gray-600">Inactiva</span>
                    @endif
                </div>

                <h2 class="text-2xl font-bold text-gray-800 mb-1">{{ $property->title }}</h2>
                @if($property->address)
                    <p class="text-gray-500 text-sm mb-3">📍 {{ $property->address }}, {{ $property->city }}, {{ $property->state }}</p>
                @else
                    <p class="text-gray-500 text-sm mb-3">📍 {{ $property->city }}, {{ $property->state }}</p>
                @endif

                <p class="text-3xl font-bold text-blue-700">
                    {{ $property->currency }} {{ number_format($property->price, 0, '.', ',') }}
                    @if($property->isRental())
                        <span class="text-base font-normal text-gray-500">/ {{ $property->operation_type === 'renta_vacacional' ? 'noche' : 'mes' }}</span>
                    @endif
                </p>
            </div>

            {{-- Características --}}
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="font-semibold text-gray-800 mb-4">Características</h3>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                    @if($property->bedrooms !== null)
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <p class="text-2xl mb-1">🛏</p>
                            <p class="text-xl font-bold text-gray-800">{{ $property->bedrooms }}</p>
                            <p class="text-xs text-gray-500">Recámaras</p>
                        </div>
                    @endif
                    @if($property->bathrooms !== null)
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <p class="text-2xl mb-1">🚿</p>
                            <p class="text-xl font-bold text-gray-800">{{ $property->bathrooms }}</p>
                            <p class="text-xs text-gray-500">Baños</p>
                        </div>
                    @endif
                    @if($property->parking_spaces !== null)
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <p class="text-2xl mb-1">🚗</p>
                            <p class="text-xl font-bold text-gray-800">{{ $property->parking_spaces }}</p>
                            <p class="text-xs text-gray-500">Estac.</p>
                        </div>
                    @endif
                    @if($property->area)
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <p class="text-2xl mb-1">📐</p>
                            <p class="text-xl font-bold text-gray-800">{{ $property->area }}</p>
                            <p class="text-xs text-gray-500">m² Const.</p>
                        </div>
                    @endif
                    @if($property->land_area)
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <p class="text-2xl mb-1">🏡</p>
                            <p class="text-xl font-bold text-gray-800">{{ $property->land_area }}</p>
                            <p class="text-xs text-gray-500">m² Terreno</p>
                        </div>
                    @endif
                    @if($property->year_built)
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <p class="text-2xl mb-1">🏗</p>
                            <p class="text-xl font-bold text-gray-800">{{ $property->year_built }}</p>
                            <p class="text-xs text-gray-500">Año</p>
                        </div>
                    @endif
                </div>
            </div>

            {{-- Descripción --}}
            @if($property->description)
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h3 class="font-semibold text-gray-800 mb-3">Descripción</h3>
                    <p class="text-gray-600 text-sm leading-relaxed whitespace-pre-line">{{ $property->description }}</p>
                </div>
            @endif

            {{-- Amenidades --}}
            @if($property->features && count($property->features))
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h3 class="font-semibold text-gray-800 mb-3">Amenidades</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($property->features as $feat)
                            <span class="text-sm bg-blue-50 text-blue-700 px-3 py-1 rounded-full">{{ $feat }}</span>
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- Preventa --}}
            @if($property->isPresale())
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h3 class="font-semibold text-gray-800 mb-3">Detalles de Preventa</h3>
                    @if($property->delivery_date)
                        <p class="text-sm text-gray-600 mb-2">📅 Entrega estimada: <strong>{{ $property->delivery_date->format('d/m/Y') }}</strong></p>
                    @endif
                    @if($property->construction_progress !== null)
                        <div>
                            <p class="text-sm text-gray-600 mb-1">Avance de construcción: {{ $property->construction_progress }}%</p>
                            <div class="bg-gray-100 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: {{ $property->construction_progress }}%"></div>
                            </div>
                        </div>
                    @endif
                </div>
            @endif

            {{-- Renta vacacional --}}
            @if($property->operation_type === 'renta_vacacional' && ($property->min_nights || $property->max_nights))
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h3 class="font-semibold text-gray-800 mb-3">Condiciones de Renta</h3>
                    @if($property->min_nights)
                        <p class="text-sm text-gray-600">Mínimo de noches: <strong>{{ $property->min_nights }}</strong></p>
                    @endif
                    @if($property->max_nights)
                        <p class="text-sm text-gray-600">Máximo de noches: <strong>{{ $property->max_nights }}</strong></p>
                    @endif
                </div>
            @endif
        </div>

        {{-- Sidebar --}}
        <div class="space-y-4">
            {{-- Notas internas --}}
            @if($property->notes)
                <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-4">
                    <h3 class="font-semibold text-yellow-800 text-sm mb-2">📝 Notas Internas</h3>
                    <p class="text-yellow-700 text-sm whitespace-pre-line">{{ $property->notes }}</p>
                </div>
            @endif

            {{-- Meta --}}
            <div class="bg-white rounded-xl shadow-sm p-4 text-sm text-gray-500 space-y-1">
                <p>ID: #{{ $property->id }}</p>
                <p>Publicada: {{ $property->created_at->format('d/m/Y H:i') }}</p>
                <p>Actualizada: {{ $property->updated_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>
    </div>
</main>
</body>
</html>
