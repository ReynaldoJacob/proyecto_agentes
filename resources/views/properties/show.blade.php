<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $property->title }} | Margarita Flores - Asesora Inmobiliaria</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700;800&family=Manrope:wght@400;500;600&family=Hanken+Grotesk:wght@500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#004370",
                        "on-primary": "#ffffff",
                        "primary-container": "#005b96",
                        "secondary": "#25676f",
                        "on-surface": "#161c27",
                        "on-surface-variant": "#414750",
                        "surface": "#f9f9ff",
                        "surface-container": "#e8eeff",
                        "surface-container-high": "#e3e8f9",
                        "surface-container-highest": "#dde2f3",
                        "surface-container-lowest": "#ffffff",
                        "outline": "#717781",
                        "outline-variant": "#c1c7d1",
                        "background": "#f9f9ff",
                    },
                    fontFamily: {
                        "headline-md": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "label-md": ["Hanken Grotesk"],
                        "body-md": ["Manrope"],
                        "body-lg": ["Manrope"],
                    },
                    fontSize: {
                        "headline-lg": ["32px", {lineHeight: "40px", fontWeight: "700"}],
                        "headline-md": ["24px", {lineHeight: "32px", fontWeight: "600"}],
                        "label-md": ["14px", {lineHeight: "20px", letterSpacing: "0.05em", fontWeight: "600"}],
                        "label-sm": ["12px", {lineHeight: "16px", fontWeight: "500"}],
                        "body-md": ["16px", {lineHeight: "24px"}],
                        "body-lg": ["18px", {lineHeight: "28px"}],
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
        .gallery-thumb { cursor: pointer; transition: opacity 0.2s; }
        .gallery-thumb:hover { opacity: 0.8; }
        .gallery-thumb.active { ring: 2px; ring-color: #004370; }
    </style>
</head>
<body class="bg-background text-on-surface font-body-md">

    {{-- Navbar --}}
    <nav class="fixed top-0 w-full z-50 backdrop-blur-md bg-surface/80 shadow-sm border-b border-outline-variant/20">
        <div class="flex justify-between items-center px-4 md:px-16 py-4 max-w-7xl mx-auto">
            <a href="/" class="font-headline-md text-primary tracking-tight leading-tight">
                Margarita Flores
                <span class="block text-label-sm font-label-md text-on-surface-variant tracking-widest uppercase text-xs mt-0.5">Asesora Inmobiliaria</span>
            </a>
            <div class="hidden md:flex gap-8 items-center">
                <a href="/" class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-all">Inicio</a>
                <a href="/properties" class="font-label-md text-label-md text-primary border-b-2 border-primary pb-1">Propiedades</a>
                <a href="#contacto" class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-all">Contacto</a>
                <a href="#contacto" class="bg-primary text-on-primary px-6 py-2.5 rounded-lg font-label-md hover:opacity-90 transition-all">Consulta Gratis</a>
            </div>
            <a href="/properties" class="md:hidden text-primary text-sm font-semibold">← Regresar</a>
        </div>
    </nav>

    <main class="pt-24 pb-20">
        <div class="max-w-7xl mx-auto px-4 md:px-16">

            {{-- Breadcrumb --}}
            <nav class="mb-6 text-sm text-on-surface-variant flex items-center gap-2">
                <a href="/" class="hover:text-primary">Inicio</a>
                <span>/</span>
                <a href="/properties" class="hover:text-primary">Propiedades</a>
                <span>/</span>
                <span class="text-on-surface truncate max-w-xs">{{ $property->title }}</span>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                {{-- Columna principal --}}
                <div class="lg:col-span-2 space-y-6">

                    {{-- Galería --}}
                    <div class="rounded-2xl overflow-hidden bg-surface-container">
                        {{-- Imagen principal --}}
                        <div class="relative h-80 md:h-[480px]">
                            @if($property->cover_image)
                                <img id="main-image"
                                     src="{{ Storage::url($property->cover_image) }}"
                                     alt="{{ $property->title }}"
                                     class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-outline">
                                    <span class="material-symbols-outlined text-8xl">home</span>
                                </div>
                            @endif

                            {{-- Badge --}}
                            @php
                                $badgeText = match($property->operation_type) {
                                    'preventa'         => 'PRE-VENTA',
                                    'renta_vacacional' => 'RENTA VACACIONAL',
                                    'renta_anual'      => 'RENTA ANUAL',
                                    default            => 'VENTA',
                                };
                                if ($property->status === 'vendido')   $badgeText = 'VENDIDO';
                                if ($property->status === 'reservado') $badgeText = 'RESERVADO';

                                $badgeClass = match($property->status) {
                                    'vendido'   => 'bg-gray-800/80 text-white',
                                    'reservado' => 'bg-white/90 text-on-surface',
                                    default     => $property->is_featured ? 'bg-primary text-white' : 'bg-secondary text-white',
                                };
                            @endphp
                            <div class="absolute top-4 left-4 flex gap-2">
                                <span class="text-label-sm px-3 py-1 rounded-full font-bold {{ $badgeClass }}">
                                    {{ $badgeText }}
                                </span>
                                @if($property->is_featured && $property->status === 'disponible')
                                    <span class="bg-yellow-400 text-yellow-900 text-label-sm px-3 py-1 rounded-full font-bold">⭐ DESTACADO</span>
                                @endif
                            </div>
                        </div>

                        {{-- Miniaturas --}}
                        @php
                            $allImages = [];
                            if ($property->cover_image) $allImages[] = $property->cover_image;
                            foreach ($property->images ?? [] as $img) $allImages[] = $img;
                        @endphp
                        @if(count($allImages) > 1)
                            <div class="flex gap-2 p-3 overflow-x-auto">
                                @foreach($allImages as $i => $img)
                                    <img src="{{ Storage::url($img) }}"
                                         alt=""
                                         onclick="document.getElementById('main-image').src = this.src"
                                         class="gallery-thumb h-16 w-24 flex-shrink-0 rounded-lg object-cover border-2 {{ $i === 0 ? 'border-primary' : 'border-transparent' }}">
                                @endforeach
                            </div>
                        @endif
                    </div>

                    {{-- Título y ubicación --}}
                    <div>
                        <div class="flex flex-wrap gap-2 mb-3">
                            <span class="text-xs font-semibold px-3 py-1 rounded-full bg-blue-100 text-blue-800">
                                {{ $property->getTypeLabel() }}
                            </span>
                            <span class="text-xs font-semibold px-3 py-1 rounded-full bg-purple-100 text-purple-800">
                                {{ $property->getOperationLabel() }}
                            </span>
                        </div>
                        <h1 class="font-headline-lg text-headline-lg text-on-surface mb-2">{{ $property->title }}</h1>
                        @if($property->address || $property->city)
                            <p class="text-on-surface-variant flex items-center gap-1">
                                <span class="material-symbols-outlined text-[18px]">location_on</span>
                                {{ implode(', ', array_filter([$property->address, $property->city, $property->state])) }}
                            </p>
                        @endif
                    </div>

                    {{-- Características --}}
                    @if($property->bedrooms !== null || $property->bathrooms !== null || $property->parking_spaces !== null || $property->area || $property->land_area)
                    <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/30 p-6">
                        <h2 class="font-headline-md text-headline-md mb-4">Características</h2>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                            @if($property->bedrooms !== null)
                                <div class="text-center p-4 bg-background rounded-xl">
                                    <span class="material-symbols-outlined text-primary text-3xl">bed</span>
                                    <p class="text-2xl font-bold text-on-surface mt-1">{{ $property->bedrooms }}</p>
                                    <p class="text-label-sm text-on-surface-variant">Recámaras</p>
                                </div>
                            @endif
                            @if($property->bathrooms !== null)
                                <div class="text-center p-4 bg-background rounded-xl">
                                    <span class="material-symbols-outlined text-primary text-3xl">bathtub</span>
                                    <p class="text-2xl font-bold text-on-surface mt-1">{{ $property->bathrooms }}</p>
                                    <p class="text-label-sm text-on-surface-variant">Baños</p>
                                </div>
                            @endif
                            @if($property->parking_spaces !== null)
                                <div class="text-center p-4 bg-background rounded-xl">
                                    <span class="material-symbols-outlined text-primary text-3xl">directions_car</span>
                                    <p class="text-2xl font-bold text-on-surface mt-1">{{ $property->parking_spaces }}</p>
                                    <p class="text-label-sm text-on-surface-variant">Estac.</p>
                                </div>
                            @endif
                            @if($property->area)
                                <div class="text-center p-4 bg-background rounded-xl">
                                    <span class="material-symbols-outlined text-primary text-3xl">straighten</span>
                                    <p class="text-2xl font-bold text-on-surface mt-1">{{ $property->area }}</p>
                                    <p class="text-label-sm text-on-surface-variant">m² Const.</p>
                                </div>
                            @endif
                            @if($property->land_area)
                                <div class="text-center p-4 bg-background rounded-xl">
                                    <span class="material-symbols-outlined text-primary text-3xl">landscape</span>
                                    <p class="text-2xl font-bold text-on-surface mt-1">{{ $property->land_area }}</p>
                                    <p class="text-label-sm text-on-surface-variant">m² Terreno</p>
                                </div>
                            @endif
                            @if($property->year_built)
                                <div class="text-center p-4 bg-background rounded-xl">
                                    <span class="material-symbols-outlined text-primary text-3xl">calendar_today</span>
                                    <p class="text-2xl font-bold text-on-surface mt-1">{{ $property->year_built }}</p>
                                    <p class="text-label-sm text-on-surface-variant">Año</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    @endif

                    {{-- Descripción --}}
                    @if($property->description)
                    <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/30 p-6">
                        <h2 class="font-headline-md text-headline-md mb-3">Descripción</h2>
                        <p class="text-on-surface-variant font-body-lg leading-relaxed whitespace-pre-line">{{ $property->description }}</p>
                    </div>
                    @endif

                    {{-- Amenidades --}}
                    @if($property->features && count($property->features))
                    <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/30 p-6">
                        <h2 class="font-headline-md text-headline-md mb-4">Amenidades</h2>
                        <div class="flex flex-wrap gap-2">
                            @foreach($property->features as $feat)
                                <span class="flex items-center gap-1 bg-blue-50 text-blue-800 text-sm px-4 py-2 rounded-full">
                                    <span class="material-symbols-outlined text-[16px]">check_circle</span>
                                    {{ $feat }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    {{-- Preventa --}}
                    @if($property->isPresale() && ($property->delivery_date || $property->construction_progress !== null))
                    <div class="bg-blue-50 border border-blue-200 rounded-2xl p-6">
                        <h2 class="font-headline-md text-headline-md text-blue-900 mb-3">Detalles de Preventa</h2>
                        @if($property->delivery_date)
                            <p class="text-blue-800 mb-3">
                                <span class="material-symbols-outlined text-[18px] align-middle">event</span>
                                Entrega estimada: <strong>{{ $property->delivery_date->format('d \d\e F \d\e Y') }}</strong>
                            </p>
                        @endif
                        @if($property->construction_progress !== null)
                            <div>
                                <div class="flex justify-between text-sm text-blue-700 mb-1">
                                    <span>Avance de construcción</span>
                                    <span>{{ $property->construction_progress }}%</span>
                                </div>
                                <div class="bg-blue-200 rounded-full h-3">
                                    <div class="bg-primary h-3 rounded-full transition-all"
                                         style="width: {{ $property->construction_progress }}%"></div>
                                </div>
                            </div>
                        @endif
                    </div>
                    @endif

                    {{-- Renta vacacional --}}
                    @if($property->operation_type === 'renta_vacacional' && ($property->min_nights || $property->max_nights))
                    <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/30 p-6">
                        <h2 class="font-headline-md text-headline-md mb-3">Condiciones de Renta</h2>
                        <div class="flex gap-6">
                            @if($property->min_nights)
                                <div class="text-center p-4 bg-background rounded-xl">
                                    <p class="text-2xl font-bold text-primary">{{ $property->min_nights }}</p>
                                    <p class="text-label-sm text-on-surface-variant">Noches mínimas</p>
                                </div>
                            @endif
                            @if($property->max_nights)
                                <div class="text-center p-4 bg-background rounded-xl">
                                    <p class="text-2xl font-bold text-primary">{{ $property->max_nights }}</p>
                                    <p class="text-label-sm text-on-surface-variant">Noches máximas</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    @endif

                </div>

                {{-- Sidebar --}}
                <div class="space-y-5">

                    {{-- Precio + CTA --}}
                    <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/30 p-6 sticky top-28">
                        <p class="text-on-surface-variant text-sm mb-1">Precio</p>
                        <p class="text-3xl font-bold text-primary mb-1">
                            {{ $property->currency }} {{ number_format($property->price, 0, '.', ',') }}
                        </p>
                        @if($property->isRental())
                            <p class="text-on-surface-variant text-sm mb-4">
                                por {{ $property->operation_type === 'renta_vacacional' ? 'noche' : 'mes' }}
                            </p>
                        @else
                            <div class="mb-4"></div>
                        @endif

                        <div id="contacto" class="space-y-3">
                            <h3 class="font-semibold text-on-surface">Solicitar información</h3>
                            <input type="text" placeholder="Tu nombre"
                                   class="w-full border border-outline-variant rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary/30">
                            <input type="tel" placeholder="Tu teléfono / WhatsApp"
                                   class="w-full border border-outline-variant rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary/30">
                            <textarea rows="3" placeholder="Me interesa esta propiedad..."
                                      class="w-full border border-outline-variant rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary/30">Me interesa la propiedad "{{ $property->title }}".</textarea>

                            <a href="https://wa.me/526691234567?text={{ urlencode('Hola Margarita, me interesa la propiedad: ' . $property->title . ' — ' . request()->url()) }}"
                               target="_blank"
                               class="w-full flex items-center justify-center gap-2 bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                                    <path d="M11.94 0C5.34 0 0 5.34 0 11.94c0 2.1.55 4.07 1.5 5.78L0 24l6.44-1.69c1.66.9 3.56 1.43 5.5 1.43C18.54 23.74 24 18.4 24 11.8 24 5.34 18.54 0 11.94 0zm0 21.74c-1.82 0-3.52-.49-4.99-1.34l-.36-.21-3.72.98.99-3.63-.24-.38C2.59 15.4 2.1 13.72 2.1 11.94 2.1 6.56 6.56 2.1 11.94 2.1c5.36 0 9.76 4.38 9.76 9.76-.06 5.36-4.44 9.88-9.76 9.88z"/>
                                </svg>
                                Contactar por WhatsApp
                            </a>

                            <button class="w-full bg-primary text-on-primary py-3 rounded-lg font-semibold hover:opacity-90 transition-all">
                                Enviar Consulta
                            </button>
                        </div>

                        <p class="text-center text-xs text-on-surface-variant mt-4">
                            Asesor: {{ $property->agent->name }}
                        </p>
                    </div>

                    {{-- Compartir --}}
                    <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/30 p-4">
                        <p class="text-sm font-semibold text-on-surface mb-2">Compartir propiedad</p>
                        <div class="flex gap-2">
                            <a href="https://wa.me/?text={{ urlencode($property->title . ' — ' . request()->url()) }}"
                               target="_blank"
                               class="flex-1 text-center py-2 bg-green-50 text-green-700 rounded-lg text-xs font-medium hover:bg-green-100">
                                WhatsApp
                            </a>
                            <button onclick="navigator.clipboard.writeText(window.location.href); this.textContent='¡Copiado!'"
                                    class="flex-1 text-center py-2 bg-surface-container text-on-surface-variant rounded-lg text-xs font-medium hover:bg-surface-container-high">
                                Copiar link
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Regresar --}}
            <div class="mt-10">
                <a href="/properties"
                   class="inline-flex items-center gap-2 text-primary hover:underline font-label-md">
                    <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                    Ver todas las propiedades
                </a>
            </div>

        </div>
    </main>

    {{-- Footer --}}
    <footer class="bg-surface-container text-on-surface-variant py-10 px-4 md:px-16">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <span class="font-semibold text-on-surface">Margarita Flores — Asesora Inmobiliaria</span>
            <div class="flex gap-6 text-sm">
                <a href="/" class="hover:text-primary">Inicio</a>
                <a href="/properties" class="hover:text-primary">Propiedades</a>
                <a href="#contacto" class="hover:text-primary">Contacto</a>
            </div>
            <span class="text-xs">© {{ date('Y') }} Todos los derechos reservados.</span>
        </div>
    </footer>

    <script>
        // Cambio de imagen en galería
        document.querySelectorAll('.gallery-thumb').forEach(thumb => {
            thumb.addEventListener('click', function() {
                document.querySelectorAll('.gallery-thumb').forEach(t => t.classList.remove('border-primary'));
                this.classList.add('border-primary');
            });
        });
    </script>
</body>
</html>
