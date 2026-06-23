<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Propiedad | Margarita Flores</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">

<nav class="fixed top-0 w-full z-50 bg-white shadow-sm border-b border-gray-200">
    <div class="px-6 py-4 max-w-4xl mx-auto flex justify-between items-center">
        <div class="flex items-center gap-4">
            <a href="{{ route('agent.properties.index') }}" class="text-gray-500 hover:text-gray-800 text-sm">← Mis Propiedades</a>
            <h1 class="text-xl font-bold text-blue-700">Nueva Propiedad</h1>
        </div>
    </div>
</nav>

<main class="pt-24 px-4 pb-16 max-w-4xl mx-auto">

    @if($errors->any())
        <div class="mb-6 bg-red-50 border border-red-200 rounded-lg p-4">
            <p class="text-red-800 font-medium text-sm mb-1">Por favor corrige los siguientes errores:</p>
            <ul class="text-red-700 text-sm list-disc list-inside space-y-0.5">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('agent.properties.store') }}" enctype="multipart/form-data" class="space-y-8">
        @csrf

        {{-- Sección 1: Clasificación --}}
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h2 class="text-base font-semibold text-gray-800 mb-5 pb-2 border-b">Tipo de Operación y Propiedad</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Tipo de Operación <span class="text-red-500">*</span>
                    </label>
                    <select name="operation_type" id="operation_type" required
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                        @foreach($operationLabels as $val => $label)
                            <option value="{{ $val }}" @selected(old('operation_type') === $val)>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Tipo de Propiedad <span class="text-red-500">*</span>
                    </label>
                    <select name="type" id="type" required
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                        @foreach($typeLabels as $val => $label)
                            <option value="{{ $val }}" @selected(old('type') === $val)>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Estado</label>
                    <select name="status"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                        @foreach($statusLabels as $val => $label)
                            <option value="{{ $val }}" @selected(old('status', 'disponible') === $val)>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex items-center gap-3 pt-5">
                    <input type="checkbox" name="is_featured" id="is_featured" value="1"
                           @checked(old('is_featured'))
                           class="w-4 h-4 accent-blue-600">
                    <label for="is_featured" class="text-sm text-gray-700">Marcar como Destacada</label>
                </div>
            </div>
        </div>

        {{-- Sección 2: Información General --}}
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h2 class="text-base font-semibold text-gray-800 mb-5 pb-2 border-b">Información General</h2>
            <div class="space-y-4">

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Título <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="title" value="{{ old('title') }}" required
                           placeholder="Ej. Casa en Marina con vista al mar"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                    <textarea name="description" rows="4"
                              placeholder="Describe la propiedad: características, vecindario, detalles relevantes..."
                              class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">{{ old('description') }}</textarea>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Precio <span class="text-red-500">*</span>
                        </label>
                        <input type="number" name="price" value="{{ old('price') }}" required min="0" step="0.01"
                               placeholder="000,000"
                               class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Moneda</label>
                        <select name="currency"
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                            <option value="USD" @selected(old('currency', 'USD') === 'USD')>USD (Dólares)</option>
                            <option value="MXN" @selected(old('currency') === 'MXN')>MXN (Pesos)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Año de Construcción</label>
                        <input type="number" name="year_built" value="{{ old('year_built') }}"
                               min="1900" max="{{ date('Y') + 5 }}" placeholder="{{ date('Y') }}"
                               class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                    </div>
                </div>
            </div>
        </div>

        {{-- Sección 3: Características --}}
        <div class="bg-white rounded-xl shadow-sm p-6" id="physical-section">
            <h2 class="text-base font-semibold text-gray-800 mb-5 pb-2 border-b">Características Físicas</h2>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                <div id="bedrooms-field">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Recámaras</label>
                    <input type="number" name="bedrooms" value="{{ old('bedrooms') }}" min="0"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
                <div id="bathrooms-field">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Baños</label>
                    <input type="number" name="bathrooms" value="{{ old('bathrooms') }}" min="0" step="0.5"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Estacionamientos</label>
                    <input type="number" name="parking_spaces" value="{{ old('parking_spaces') }}" min="0"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Área Construida (m²)</label>
                    <input type="number" name="area" value="{{ old('area') }}" min="0" step="0.01"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
                <div class="col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Área de Terreno (m²)</label>
                    <input type="number" name="land_area" value="{{ old('land_area') }}" min="0" step="0.01"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
            </div>

            {{-- Amenidades --}}
            <div class="mt-5">
                <label class="block text-sm font-medium text-gray-700 mb-2">Amenidades / Características</label>
                <div id="features-container" class="flex flex-wrap gap-2 mb-3">
                    @foreach(old('features', []) as $feat)
                        <div class="feature-tag flex items-center gap-1 bg-blue-50 text-blue-700 text-sm px-3 py-1 rounded-full">
                            <input type="hidden" name="features[]" value="{{ $feat }}">
                            <span>{{ $feat }}</span>
                            <button type="button" onclick="this.parentElement.remove()" class="text-blue-400 hover:text-red-500 ml-1">✕</button>
                        </div>
                    @endforeach
                </div>
                <div class="flex gap-2">
                    <input type="text" id="feature-input" placeholder="Ej. Alberca, Terraza, A/C..."
                           class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                    <button type="button" onclick="addFeature()"
                            class="px-3 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm hover:bg-gray-200">
                        Agregar
                    </button>
                </div>
                <p class="text-xs text-gray-400 mt-1">Ejemplos: Alberca, Jardín, A/C, Jacuzzi, Seguridad 24h, Vista al mar, Amueblado</p>
            </div>
        </div>

        {{-- Sección 4: Preventa --}}
        <div id="preventa-section" class="bg-white rounded-xl shadow-sm p-6 hidden">
            <h2 class="text-base font-semibold text-gray-800 mb-5 pb-2 border-b">Detalles de Preventa</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Fecha Estimada de Entrega</label>
                    <input type="date" name="delivery_date" value="{{ old('delivery_date') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Avance de Construcción (%)</label>
                    <input type="number" name="construction_progress" value="{{ old('construction_progress') }}"
                           min="0" max="100" placeholder="0 - 100"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
            </div>
        </div>

        {{-- Sección 5: Renta Vacacional --}}
        <div id="vacacional-section" class="bg-white rounded-xl shadow-sm p-6 hidden">
            <h2 class="text-base font-semibold text-gray-800 mb-5 pb-2 border-b">Detalles de Renta Vacacional</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Noches Mínimas</label>
                    <input type="number" name="min_nights" value="{{ old('min_nights') }}" min="1" placeholder="2"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Noches Máximas</label>
                    <input type="number" name="max_nights" value="{{ old('max_nights') }}" min="1" placeholder="30"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
            </div>
        </div>

        {{-- Sección 6: Ubicación --}}
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h2 class="text-base font-semibold text-gray-800 mb-5 pb-2 border-b">Ubicación</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="sm:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Dirección</label>
                    <input type="text" name="address" value="{{ old('address') }}"
                           placeholder="Calle, número, colonia..."
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Ciudad</label>
                    <input type="text" name="city" value="{{ old('city', 'Mazatlán') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Estado</label>
                    <input type="text" name="state" value="{{ old('state', 'Sinaloa') }}"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Latitud</label>
                    <input type="number" name="latitude" value="{{ old('latitude') }}" step="any"
                           placeholder="23.2494"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Longitud</label>
                    <input type="number" name="longitude" value="{{ old('longitude') }}" step="any"
                           placeholder="-106.4111"
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
            </div>
        </div>

        {{-- Sección 7: Imágenes --}}
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h2 class="text-base font-semibold text-gray-800 mb-5 pb-2 border-b">Imágenes</h2>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Imagen Principal (portada)</label>
                    <input type="file" name="cover_image" accept="image/*" id="cover-input"
                           class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                                  file:rounded-lg file:border-0 file:text-sm file:font-medium
                                  file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    <div id="cover-preview" class="mt-2"></div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Imágenes adicionales (máx. 10)</label>
                    <input type="file" name="images[]" accept="image/*" multiple id="images-input"
                           class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                                  file:rounded-lg file:border-0 file:text-sm file:font-medium
                                  file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100">
                    <div id="images-preview" class="mt-2 flex flex-wrap gap-2"></div>
                </div>
            </div>
        </div>

        {{-- Sección 8: Notas internas --}}
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h2 class="text-base font-semibold text-gray-800 mb-5 pb-2 border-b">Notas Internas</h2>
            <textarea name="notes" rows="3"
                      placeholder="Notas privadas, recordatorios, datos de contacto del propietario..."
                      class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-300">{{ old('notes') }}</textarea>
        </div>

        {{-- Botones --}}
        <div class="flex justify-end gap-3">
            <a href="{{ route('agent.properties.index') }}"
               class="px-6 py-2.5 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                Cancelar
            </a>
            <button type="submit"
                    class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm font-medium">
                Publicar Propiedad
            </button>
        </div>
    </form>
</main>

<script>
    function addFeature() {
        const input = document.getElementById('feature-input');
        const val = input.value.trim();
        if (!val) return;

        const container = document.getElementById('features-container');
        const tag = document.createElement('div');
        tag.className = 'feature-tag flex items-center gap-1 bg-blue-50 text-blue-700 text-sm px-3 py-1 rounded-full';
        tag.innerHTML = `<input type="hidden" name="features[]" value="${val.replace(/"/g, '&quot;')}">
                         <span>${val}</span>
                         <button type="button" onclick="this.parentElement.remove()" class="text-blue-400 hover:text-red-500 ml-1">✕</button>`;
        container.appendChild(tag);
        input.value = '';
    }

    document.getElementById('feature-input').addEventListener('keydown', function(e) {
        if (e.key === 'Enter') { e.preventDefault(); addFeature(); }
    });

    // Toggle de secciones según tipo de operación
    const opSelect = document.getElementById('operation_type');
    function toggleSections() {
        const val = opSelect.value;
        document.getElementById('preventa-section').classList.toggle('hidden', val !== 'preventa');
        document.getElementById('vacacional-section').classList.toggle('hidden', val !== 'renta_vacacional');
    }
    opSelect.addEventListener('change', toggleSections);
    toggleSections();

    // Toggle de campos según tipo de propiedad (terrenos sin recámaras/baños)
    const typeSelect = document.getElementById('type');
    function toggleTypeFields() {
        const isTerreno = typeSelect.value === 'terreno';
        document.getElementById('bedrooms-field').style.opacity = isTerreno ? '0.3' : '1';
        document.getElementById('bathrooms-field').style.opacity = isTerreno ? '0.3' : '1';
    }
    typeSelect.addEventListener('change', toggleTypeFields);
    toggleTypeFields();

    // Preview de imágenes
    document.getElementById('cover-input').addEventListener('change', function() {
        const preview = document.getElementById('cover-preview');
        preview.innerHTML = '';
        if (this.files[0]) {
            const img = document.createElement('img');
            img.src = URL.createObjectURL(this.files[0]);
            img.className = 'h-32 rounded-lg object-cover';
            preview.appendChild(img);
        }
    });

    document.getElementById('images-input').addEventListener('change', function() {
        const preview = document.getElementById('images-preview');
        preview.innerHTML = '';
        Array.from(this.files).slice(0, 10).forEach(file => {
            const img = document.createElement('img');
            img.src = URL.createObjectURL(file);
            img.className = 'h-20 w-20 rounded-lg object-cover';
            preview.appendChild(img);
        });
    });
</script>
</body>
</html>
