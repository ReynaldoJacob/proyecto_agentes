<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $property->title }} | Margarita Flores - Asesora Inmobiliaria</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;800&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
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
                        "primary-fixed-dim": "#9ccaff",
                        "secondary": "#25676f",
                        "secondary-container": "#aeedf7",
                        "on-secondary-container": "#2c6d76",
                        "on-surface": "#161c27",
                        "on-surface-variant": "#414750",
                        "surface": "#f9f9ff",
                        "surface-container": "#e8eeff",
                        "surface-container-low": "#f1f3ff",
                        "surface-container-high": "#e3e8f9",
                        "surface-container-highest": "#dde2f3",
                        "surface-container-lowest": "#ffffff",
                        "outline": "#717781",
                        "outline-variant": "#c1c7d1",
                        "background": "#f9f9ff",
                        "tertiary": "#45412d",
                        "inverse-surface": "#2a303d",
                        "inverse-on-surface": "#ecf0ff",
                    },
                    spacing: {
                        "margin-desktop": "64px",
                        "lg": "48px",
                        "base": "4px",
                        "sm": "16px",
                        "gutter": "24px",
                        "xs": "8px",
                        "md": "24px",
                        "margin-mobile": "16px",
                        "xl": "80px",
                        "section-gap": "120px",
                        "container-max": "1280px",
                    },
                    fontFamily: {
                        "headline-md": ["Cinzel"],
                        "headline-lg": ["Cinzel"],
                        "headline-lg-mobile": ["Cinzel"],
                        "label-md": ["Montserrat"],
                        "label-sm": ["Montserrat"],
                        "body-md": ["Montserrat"],
                        "body-lg": ["Montserrat"],
                    },
                    fontSize: {
                        "headline-lg": ["32px", {lineHeight: "40px", fontWeight: "700"}],
                        "headline-lg-mobile": ["28px", {lineHeight: "36px", letterSpacing: "-0.01em", fontWeight: "700"}],
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
    <nav class="fixed top-0 w-full z-50 backdrop-blur-md bg-surface/90 shadow-sm border-b border-outline-variant/10">
        <div class="flex justify-between items-center px-4 md:px-margin-desktop py-3 md:py-4 max-w-container-max mx-auto">
            <a href="/">
                <div style="height:68px;overflow:hidden;display:flex;align-items:center;">
                    <img src="/images/logo.png" alt="Margarita Flores" style="height:120px;width:auto;">
                </div>
            </a>
            <div class="hidden md:flex gap-8 items-center">
                <a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-all" href="/">Inicio</a>
                <a class="font-label-md text-label-md text-primary border-b-2 border-primary pb-1 transition-all" href="/properties">Propiedades</a>
                <a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-all" href="/#contacto">Contacto</a>
            </div>
            <button id="menu-btn" class="md:hidden p-2 text-primary rounded-lg hover:bg-surface-container transition-all" aria-label="Abrir menú">
                <span id="menu-icon" class="material-symbols-outlined">menu</span>
            </button>
        </div>
        <div id="mobile-menu" class="md:hidden hidden flex-col bg-surface border-t border-outline-variant/20 px-4 pb-4 pt-2 space-y-1">
            <a href="/" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all font-medium">
                <span class="material-symbols-outlined text-[20px]">home</span> Inicio
            </a>
            <a href="/properties" class="flex items-center gap-3 px-4 py-3 rounded-xl text-primary font-semibold bg-primary/5">
                <span class="material-symbols-outlined text-[20px]">domain</span> Propiedades
            </a>
            <a href="/#contacto" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all font-medium">
                <span class="material-symbols-outlined text-[20px]">mail</span> Contacto
            </a>
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
                            <div class="flex flex-wrap items-center gap-3">
                                <p class="text-on-surface-variant flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[18px]">location_on</span>
                                    {{ implode(', ', array_filter([$property->address, $property->city, $property->state])) }}
                                </p>
                                @if($property->maps_url)
                                <a href="{{ $property->maps_url }}" target="_blank" rel="noopener"
                                   class="inline-flex items-center gap-1.5 text-xs font-semibold bg-primary text-white px-3 py-1.5 rounded-full hover:opacity-90 transition flex-shrink-0">
                                    <span class="material-symbols-outlined text-[14px]">map</span>
                                    Ver en Google Maps
                                </a>
                                @endif
                            </div>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="42" height="42" fill="none" stroke="currentColor" stroke-width="1.4" class="text-primary mx-auto">
                                        <rect x="3" y="3" width="14" height="14" rx="0.5"/>
                                        <line x1="3" y1="20.5" x2="17" y2="20.5"/><polyline points="5,19 3,20.5 5,22"/><polyline points="15,19 17,20.5 15,22"/>
                                        <line x1="20.5" y1="3" x2="20.5" y2="17"/><polyline points="19,5 20.5,3 22,5"/><polyline points="19,15 20.5,17 22,15"/>
                                        <text x="5.5" y="13.5" font-size="6.5" font-family="serif" font-weight="bold" stroke="none" fill="currentColor">m²</text>
                                    </svg>
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
                                         id="progress-bar"
                                         data-progress="{{ $property->construction_progress }}"></div>
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

                            <a href="https://wa.me/5266911057?text={{ urlencode('Hola Margarita, me interesa la propiedad: ' . $property->title . ' — ' . request()->url()) }}"
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
    <footer class="bg-surface-container text-on-surface-variant py-10 md:py-lg px-4 md:px-margin-desktop">
        <div class="max-w-[1440px] mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start gap-8 md:gap-xl mb-8 md:mb-xl">
                <div class="space-y-4 md:space-y-md">
                    <span class="font-headline-md text-headline-md font-bold text-on-surface block">Margarita Flores</span>
                    <p class="text-label-md font-medium text-tertiary max-w-xs">Tu aliada estratégica en el mercado inmobiliario de Mazatlán.</p>
                    <div class="flex gap-3 flex-wrap">
                        <a href="https://www.tiktok.com/@maggyflog?_r=1&_t=ZS-96pO4xHVKfU" target="_blank" aria-label="TikTok" class="w-9 h-9 flex items-center justify-center rounded-full bg-surface-container-high hover:bg-black hover:text-white text-on-surface-variant transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.78 1.52V6.74a4.85 4.85 0 01-1.01-.05z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/maflga?igsh=dWxpdGdsaTdybHNn" target="_blank" aria-label="Instagram" class="w-9 h-9 flex items-center justify-center rounded-full bg-surface-container-high hover:bg-pink-500 hover:text-white text-on-surface-variant transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a href="https://www.threads.com/@maflga" target="_blank" aria-label="Threads" class="w-9 h-9 flex items-center justify-center rounded-full bg-surface-container-high hover:bg-black hover:text-white text-on-surface-variant transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.186 24h-.007c-3.581-.024-6.334-1.205-8.184-3.509C2.35 18.44 1.5 15.586 1.472 12.01v-.017c.03-3.579.879-6.43 2.525-8.482C5.845 1.205 8.6.024 12.18 0h.014c2.746.02 5.043.725 6.826 2.098 1.677 1.29 2.858 3.13 3.509 5.467l-2.04.569c-1.104-3.96-3.898-5.984-8.304-6.015-2.91.022-5.11.936-6.54 2.717C4.307 6.504 3.616 8.914 3.589 12c.027 3.086.718 5.496 2.057 7.164 1.43 1.783 3.631 2.698 6.54 2.717 2.623-.02 4.358-.631 5.8-2.045 1.647-1.613 1.618-3.593 1.09-4.798-.31-.71-.873-1.3-1.634-1.75-.192 1.352-.622 2.446-1.284 3.272-.886 1.102-2.14 1.704-3.73 1.79-1.202.065-2.361-.218-3.259-.801-1.063-.689-1.685-1.74-1.752-2.964-.065-1.19.408-2.285 1.33-3.082.88-.76 2.119-1.207 3.583-1.291a13.853 13.853 0 013.02.142c-.126-.988-.43-1.7-.9-2.121-.595-.533-1.5-.808-2.7-.822h-.036c-.783 0-1.878.169-2.753 1.004l-1.433-1.453C10.4 4.2 11.773 3.73 13.29 3.73h.064c1.695.022 3.057.502 4.049 1.427 1.136 1.057 1.68 2.6 1.61 4.38.63.387 1.144.84 1.542 1.355 1.36 1.83 1.363 4.407-.01 6.462C19.116 23.098 16.81 24 12.186 24zm-1.68-8.413c.086 1.558 1.165 1.752 1.78 1.718.957-.052 1.743-.457 2.237-1.14.42-.58.66-1.39.713-2.417a10.958 10.958 0 00-2.535-.138c-.967.056-1.718.333-2.17.8-.345.358-.51.803-.479 1.294l-.001-.117.455-.002z"/></svg>
                        </a>
                        <a href="https://www.facebook.com/share/18nw7CR8cV/?mibextid=wwXIfr" target="_blank" aria-label="Facebook" class="w-9 h-9 flex items-center justify-center rounded-full bg-surface-container-high hover:bg-[#1877F2] hover:text-white text-on-surface-variant transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/in/margarita-flores-garc%C3%ADa-a318162a8" target="_blank" aria-label="LinkedIn" class="w-9 h-9 flex items-center justify-center rounded-full bg-surface-container-high hover:bg-[#0A66C2] hover:text-white text-on-surface-variant transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="https://www.youtube.com/channel/UCD9kUznufAHbX9EL_rI3i0g" target="_blank" aria-label="YouTube" class="w-9 h-9 flex items-center justify-center rounded-full bg-surface-container-high hover:bg-[#FF0000] hover:text-white text-on-surface-variant transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-xl w-full md:w-auto">
                    <div class="space-y-3 md:space-y-md">
                        <h4 class="font-label-md text-on-surface font-bold text-sm">Navegación</h4>
                        <ul class="space-y-2 md:space-y-sm text-sm">
                            <li><a class="hover:text-primary transition-all" href="/">Inicio</a></li>
                            <li><a class="hover:text-primary transition-all" href="/properties">Propiedades</a></li>
                            <li><a class="hover:text-primary transition-all" href="/#contacto">Asesoría</a></li>
                        </ul>
                    </div>
                    <div class="space-y-3 md:space-y-md">
                        <h4 class="font-label-md text-on-surface font-bold text-sm">Servicios</h4>
                        <ul class="space-y-2 md:space-y-sm text-sm">
                            <li><a class="hover:text-primary transition-all" href="/properties?operation_type=venta">Venta</a></li>
                            <li><a class="hover:text-primary transition-all" href="/properties?operation_type=preventa">Preventa</a></li>
                            <li><a class="hover:text-primary transition-all" href="/properties?operation_type=renta_anual">Renta Anual</a></li>
                            <li><a class="hover:text-primary transition-all" href="/properties?operation_type=renta_vacacional">Renta Vacacional</a></li>
                        </ul>
                    </div>
                    <div class="space-y-3 md:space-y-md">
                        <h4 class="font-label-md text-on-surface font-bold text-sm">Contacto</h4>
                        <ul class="space-y-2 md:space-y-sm text-sm">
                            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-[16px]">call</span> +52 669 110 5734</li>
                        </ul>
                    </div>
                    <div class="space-y-3 md:space-y-md col-span-2 md:col-span-1 flex flex-col items-center md:items-start">
                        <h4 class="font-label-md text-on-surface font-bold text-sm">Licencia</h4>
                        <a href="https://agentesinmobiliarios.sinaloa.gob.mx/agn/check/val.php?id=75f9e8be63f311f093a2d843aeedb8ff" target="_blank" rel="noopener" class="inline-flex items-center gap-2 group">
                            <img src="https://quickchart.io/qr?text={{ urlencode('https://agentesinmobiliarios.sinaloa.gob.mx/agn/check/val.php?id=75f9e8be63f311f093a2d843aeedb8ff') }}&dark=161c27&light=0000&margin=1&size=200" alt="Código QR de verificación de licencia de agente inmobiliario" width="80" height="80" class="shrink-0">
                        </a>
                    </div>
                </div>
            </div>
            <div class="pt-6 border-t border-surface-container-high flex flex-col md:flex-row justify-between items-center gap-2 text-xs text-on-surface-variant">
                <span>© {{ date('Y') }} Margarita Flores · Asesora Inmobiliaria. Todos los derechos reservados.</span>
                <span>Mazatlán, Sinaloa, México</span>
            </div>
        </div>
    </footer>

    <script>
        var pb = document.getElementById('progress-bar');
        if (pb) pb.style.width = pb.dataset.progress + '%';

        // Cambio de imagen en galería
        document.querySelectorAll('.gallery-thumb').forEach(thumb => {
            thumb.addEventListener('click', function() {
                document.querySelectorAll('.gallery-thumb').forEach(t => t.classList.remove('border-primary'));
                this.classList.add('border-primary');
            });
        });

        // Menú mobile
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        menuBtn.addEventListener('click', () => {
            const isOpen = !mobileMenu.classList.contains('hidden');
            mobileMenu.classList.toggle('hidden', isOpen);
            mobileMenu.classList.toggle('flex', !isOpen);
            menuIcon.textContent = isOpen ? 'menu' : 'close';
        });
    </script>
</body>
</html>
