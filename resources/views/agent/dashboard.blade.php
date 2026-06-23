<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Panel Agente | Margarita Flores</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <nav class="fixed top-0 w-full z-50 bg-white shadow-sm border-b border-gray-200">
        <div class="px-6 py-4 max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-3">
                <h1 class="text-xl font-bold text-blue-700">Mi Panel</h1>
                <span class="text-xs bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full">Agente</span>
            </div>
            <div class="flex items-center gap-4">
                <span class="text-sm text-gray-600">{{ auth()->user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 text-sm">
                        Cerrar Sesión
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <main class="pt-20 px-6 py-8 max-w-7xl mx-auto">

        @php
            $props = auth()->user()->properties();
            $total = $props->count();
            $disponibles = $props->where('status', 'disponible')->count();
            $vendidos = (clone auth()->user()->properties())->where('status', 'vendido')->count();
            $rentados = (clone auth()->user()->properties())->where('status', 'rentado')->count();
        @endphp

        {{-- Stats --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-5 mb-8">
            <div class="bg-white p-5 rounded-xl shadow-sm">
                <p class="text-gray-500 text-xs mb-1">Total Propiedades</p>
                <p class="text-3xl font-bold text-gray-800">{{ $total }}</p>
            </div>
            <div class="bg-white p-5 rounded-xl shadow-sm">
                <p class="text-gray-500 text-xs mb-1">Disponibles</p>
                <p class="text-3xl font-bold text-green-600">{{ $disponibles }}</p>
            </div>
            <div class="bg-white p-5 rounded-xl shadow-sm">
                <p class="text-gray-500 text-xs mb-1">Vendidas</p>
                <p class="text-3xl font-bold text-red-500">{{ $vendidos }}</p>
            </div>
            <div class="bg-white p-5 rounded-xl shadow-sm">
                <p class="text-gray-500 text-xs mb-1">Rentadas</p>
                <p class="text-3xl font-bold text-blue-500">{{ $rentados }}</p>
            </div>
        </div>

        {{-- Acciones rápidas --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
            <a href="{{ route('agent.properties.create') }}"
               class="flex items-center gap-3 bg-blue-600 text-white p-5 rounded-xl hover:bg-blue-700 transition">
                <span class="text-3xl">+</span>
                <div>
                    <p class="font-semibold">Nueva Propiedad</p>
                    <p class="text-blue-200 text-xs">Publicar casa, terreno, depto…</p>
                </div>
            </a>
            <a href="{{ route('agent.properties.index') }}"
               class="flex items-center gap-3 bg-white border border-gray-200 text-gray-700 p-5 rounded-xl hover:bg-gray-50 transition">
                <span class="text-3xl">🏘</span>
                <div>
                    <p class="font-semibold">Mis Propiedades</p>
                    <p class="text-gray-400 text-xs">Ver y gestionar listado</p>
                </div>
            </a>
            <a href="{{ route('agent.properties.index') }}?status=disponible"
               class="flex items-center gap-3 bg-white border border-gray-200 text-gray-700 p-5 rounded-xl hover:bg-gray-50 transition">
                <span class="text-3xl">✅</span>
                <div>
                    <p class="font-semibold">Ver Disponibles</p>
                    <p class="text-gray-400 text-xs">Filtra por disponibles</p>
                </div>
            </a>
        </div>

        {{-- Propiedades recientes --}}
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-base font-bold text-gray-800">Propiedades Recientes</h2>
                <a href="{{ route('agent.properties.index') }}" class="text-sm text-blue-600 hover:underline">Ver todas →</a>
            </div>

            @php
                $recent = auth()->user()->properties()->orderByDesc('created_at')->limit(5)->get();
            @endphp

            @if($recent->isEmpty())
                <div class="text-center py-10 text-gray-400">
                    <p class="text-lg">Aún no tienes propiedades publicadas.</p>
                    <a href="{{ route('agent.properties.create') }}"
                       class="mt-3 inline-block text-sm text-blue-600 hover:underline">
                        Publicar primera propiedad →
                    </a>
                </div>
            @else
                <div class="divide-y">
                    @foreach($recent as $property)
                        @php
                            $statusColors = [
                                'disponible' => 'bg-green-100 text-green-700',
                                'vendido'    => 'bg-red-100 text-red-700',
                                'rentado'    => 'bg-blue-100 text-blue-700',
                                'reservado'  => 'bg-yellow-100 text-yellow-700',
                            ];
                        @endphp
                        <div class="py-3 flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3 min-w-0">
                                @if($property->cover_image)
                                    <img src="{{ Storage::url($property->cover_image) }}"
                                         class="h-10 w-14 rounded object-cover flex-shrink-0">
                                @else
                                    <div class="h-10 w-14 rounded bg-gray-100 flex-shrink-0"></div>
                                @endif
                                <div class="min-w-0">
                                    <p class="font-medium text-sm text-gray-800 truncate">{{ $property->title }}</p>
                                    <p class="text-xs text-gray-500">{{ $property->city }} · {{ $property->getOperationLabel() }}</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 flex-shrink-0">
                                <span class="text-sm font-bold text-blue-700">
                                    {{ $property->currency }} {{ number_format($property->price, 0, '.', ',') }}
                                </span>
                                <span class="text-xs px-2 py-0.5 rounded-full {{ $statusColors[$property->status] ?? 'bg-gray-100 text-gray-600' }}">
                                    {{ $property->getStatusLabel() }}
                                </span>
                                <a href="{{ route('agent.properties.edit', $property) }}"
                                   class="text-xs text-gray-400 hover:text-blue-600">Editar</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </main>
</body>
</html>
