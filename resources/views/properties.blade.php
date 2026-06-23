<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Propiedades | Margarita Flores - Asesora Inmobiliaria</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700;800&amp;family=Manrope:wght@400;500;600&amp;family=Hanken+Grotesk:wght@500;600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-surface-variant": "#414750",
                        "on-surface": "#161c27",
                        "surface-tint": "#12629d",
                        "on-tertiary-fixed-variant": "#4c4733",
                        "secondary-fixed": "#aeedf7",
                        "secondary": "#25676f",
                        "on-tertiary-container": "#d7ceb4",
                        "primary-container": "#005b96",
                        "background": "#f9f9ff",
                        "secondary-fixed-dim": "#92d1da",
                        "surface-container-highest": "#dde2f3",
                        "outline-variant": "#c1c7d1",
                        "on-primary-container": "#abd2ff",
                        "primary-fixed": "#d0e4ff",
                        "on-secondary-fixed-variant": "#004f57",
                        "on-primary-fixed": "#001d35",
                        "on-error-container": "#93000a",
                        "surface-dim": "#d4daea",
                        "primary": "#004370",
                        "outline": "#717781",
                        "on-secondary": "#ffffff",
                        "surface": "#f9f9ff",
                        "inverse-surface": "#2a303d",
                        "inverse-primary": "#9ccaff",
                        "primary-fixed-dim": "#9ccaff",
                        "surface-container-high": "#e3e8f9",
                        "on-background": "#161c27",
                        "tertiary": "#45412d",
                        "error-container": "#ffdad6",
                        "on-primary-fixed-variant": "#00497a",
                        "tertiary-fixed": "#ebe2c8",
                        "tertiary-container": "#5d5843",
                        "error": "#ba1a1a",
                        "on-tertiary-fixed": "#1f1c0b",
                        "surface-container": "#e8eeff",
                        "on-primary": "#ffffff",
                        "on-secondary-container": "#2c6d76",
                        "inverse-on-surface": "#ecf0ff",
                        "tertiary-fixed-dim": "#cec6ad",
                        "surface-container-low": "#f1f3ff",
                        "on-secondary-fixed": "#001f23",
                        "surface-variant": "#dde2f3",
                        "surface-bright": "#f9f9ff",
                        "secondary-container": "#aeedf7",
                        "on-tertiary": "#ffffff",
                        "on-error": "#ffffff",
                        "surface-container-lowest": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
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
                        "container-max": "1280px"
                    },
                    fontFamily: {
                        "headline-md": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "headline-xl": ["Plus Jakarta Sans"],
                        "label-sm": ["Hanken Grotesk"],
                        "label-md": ["Hanken Grotesk"],
                        "body-lg": ["Manrope"],
                        "body-md": ["Manrope"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"]
                    },
                    fontSize: {
                        "headline-md": ["24px", {lineHeight: "32px", fontWeight: "600"}],
                        "headline-lg": ["32px", {lineHeight: "40px", letterSpacing: "-0.01em", fontWeight: "700"}],
                        "headline-xl": ["48px", {lineHeight: "56px", letterSpacing: "-0.02em", fontWeight: "700"}],
                        "label-sm": ["12px", {lineHeight: "16px", fontWeight: "500"}],
                        "label-md": ["14px", {lineHeight: "20px", letterSpacing: "0.05em", fontWeight: "600"}],
                        "body-lg": ["18px", {lineHeight: "28px", fontWeight: "400"}],
                        "body-md": ["16px", {lineHeight: "24px", fontWeight: "400"}],
                        "headline-lg-mobile": ["28px", {lineHeight: "36px", letterSpacing: "-0.01em", fontWeight: "700"}]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
        .glass-effect {
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
        }
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface overflow-x-hidden">
    <!-- TopNavBar -->
    <nav class="fixed top-0 w-full z-50 backdrop-blur-md bg-surface/90 shadow-sm border-b border-outline-variant/10">
        <div class="flex justify-between items-center px-4 md:px-margin-desktop py-3 md:py-4 max-w-container-max mx-auto">
            <a class="font-headline-lg text-headline-lg-mobile md:text-headline-md text-primary tracking-tight leading-tight" href="/">
                Margarita Flores
                <span class="block text-[10px] font-label-sm text-on-surface-variant tracking-widest uppercase">Asesora Inmobiliaria</span>
            </a>
            <div class="hidden md:flex gap-8 items-center">
                <a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-all" href="/">Inicio</a>
                <a class="font-label-md text-label-md text-primary border-b-2 border-primary pb-1 transition-all" href="/properties">Propiedades</a>
                <a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-all" href="/#contacto">Contacto</a>
                <a href="/#contacto" class="bg-primary text-on-primary px-6 py-2.5 rounded-lg font-label-md hover:opacity-90 transition-all">Consulta Gratis</a>
            </div>
            <!-- Mobile Menu Toggle -->
            <button id="menu-btn" class="md:hidden p-2 text-primary rounded-lg hover:bg-surface-container transition-all" aria-label="Abrir menú">
                <span id="menu-icon" class="material-symbols-outlined">menu</span>
            </button>
        </div>

        <!-- Mobile menu -->
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
            <div class="pt-2">
                <a href="/#contacto" class="flex items-center justify-center gap-2 w-full bg-primary text-on-primary px-6 py-3 rounded-xl font-semibold hover:opacity-90 transition-all">
                    <span class="material-symbols-outlined text-[20px]">calendar_month</span> Consulta Gratis
                </a>
            </div>
        </div>
    </nav>

    <main class="pt-20 md:pt-24 pb-xl">
        <!-- Hero Section -->
        <section class="px-4 md:px-margin-desktop max-w-[1440px] mx-auto pt-8 md:pt-lg pb-6 md:pb-md">
            <div class="text-center md:text-left space-y-4 md:space-y-md">
                <div class="inline-flex items-center gap-xs bg-secondary-container/30 px-4 py-1.5 rounded-full text-secondary">
                    <span class="material-symbols-outlined text-[18px]">domain</span>
                    <span class="font-label-md text-label-md">Portafolio Premium</span>
                </div>
                <h1 class="font-headline-xl text-headline-lg-mobile md:text-headline-xl text-primary md:max-w-2xl leading-tight">Encuentra el hogar que siempre has soñado</h1>
                <p class="font-body-md md:font-body-lg text-on-surface-variant max-w-xl mx-auto md:mx-0">Descubre una selección exclusiva de propiedades diseñadas para elevar tu estilo de vida. Desde residencias contemporáneas hasta espacios acogedores en las mejores ubicaciones.</p>
            </div>
        </section>

        <!-- Search & Filter Bar -->
        <section class="px-4 md:px-margin-desktop max-w-[1440px] mx-auto mb-6 md:mb-lg">
            <div class="bg-surface-container-lowest p-4 md:p-gutter rounded-xl shadow-sm border border-surface-container-high">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 md:gap-md items-end">
                    <div class="space-y-xs">
                        <label class="font-label-md text-label-md text-on-surface-variant text-xs md:text-sm">Ubicación</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[18px]">location_on</span>
                            <select class="w-full bg-background border border-outline-variant rounded-lg pl-9 py-2.5 text-sm focus:ring-primary focus:border-primary transition-all">
                                <option>Todas las zonas</option>
                                <option>Marina Mazatlán</option>
                                <option>Centro Histórico</option>
                                <option>Zona Cerritos</option>
                                <option>El Cid</option>
                            </select>
                        </div>
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-md text-label-md text-on-surface-variant text-xs md:text-sm">Tipo de Propiedad</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[18px]">home_work</span>
                            <select class="w-full bg-background border border-outline-variant rounded-lg pl-9 py-2.5 text-sm focus:ring-primary focus:border-primary transition-all">
                                <option>Cualquiera</option>
                                <option>Casa</option>
                                <option>Departamento</option>
                                <option>Terreno</option>
                            </select>
                        </div>
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-md text-label-md text-on-surface-variant text-xs md:text-sm">Rango de Precio (MXN)</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[18px]">payments</span>
                            <select class="w-full bg-background border border-outline-variant rounded-lg pl-9 py-2.5 text-sm focus:ring-primary focus:border-primary transition-all">
                                <option>Sin límite</option>
                                <option>Hasta $1,000,000 MXN</option>
                                <option>$1,000,000 - $3,000,000 MXN</option>
                                <option>$3,000,000 - $6,000,000 MXN</option>
                                <option>Más de $6,000,000 MXN</option>
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-2 md:col-span-1">
                        <button class="w-full bg-primary text-on-primary font-label-md py-3 rounded-lg flex items-center justify-center gap-xs hover:opacity-90 transition-all shadow-md shadow-primary/20">
                            <span class="material-symbols-outlined text-[18px]">search</span>
                            Buscar Propiedades
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Property Grid -->
        <section class="px-4 md:px-margin-desktop max-w-[1440px] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                @forelse($properties as $property)
                @php
                    $badgeClass = match($property->status) {
                        'vendido'   => 'bg-on-surface-variant/80 text-white',
                        'reservado' => 'bg-white/90 backdrop-blur-md text-on-surface',
                        default     => $property->is_featured ? 'bg-primary text-white' : 'bg-secondary text-white',
                    };
                    $badgeText = match($property->operation_type) {
                        'preventa'         => 'PRE-VENTA',
                        'renta_vacacional' => 'RENTA VACACIONAL',
                        'renta_anual'      => 'RENTA ANUAL',
                        default            => $property->is_featured ? 'DESTACADO' : strtoupper($property->getStatusLabel()),
                    };
                    if ($property->status === 'vendido') $badgeText = 'VENDIDO';
                    if ($property->status === 'reservado') $badgeText = 'RESERVADO';
                @endphp
                <!-- Property Card -->
                <a href="{{ route('properties.show', $property) }}"
                   class="bg-surface-container-lowest rounded-xl overflow-hidden group shadow-sm hover:shadow-xl transition-all duration-500 block">
                    <div class="relative h-72 overflow-hidden bg-surface-container">
                        @if($property->cover_image)
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                 alt="{{ $property->title }}"
                                 src="{{ Storage::url($property->cover_image) }}">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-outline">
                                <span class="material-symbols-outlined text-6xl">home</span>
                            </div>
                        @endif
                        <div class="absolute top-4 left-4 flex gap-xs">
                            <span class="text-label-sm px-3 py-1 rounded-full font-bold {{ $badgeClass }}">
                                {{ $badgeText }}
                            </span>
                        </div>
                    </div>
                    <div class="p-gutter space-y-md">
                        <div>
                            <p class="text-secondary font-label-md uppercase tracking-wider text-xs">
                                {{ $property->city }}{{ $property->state ? ', ' . $property->state : '' }}
                            </p>
                            <h3 class="font-headline-md text-headline-md text-on-surface">{{ $property->title }}</h3>
                        </div>
                        <div class="flex justify-between items-center text-on-surface-variant py-2 border-y border-surface-container-high">
                            @if($property->bedrooms !== null)
                            <div class="flex flex-col items-center gap-xs">
                                <span class="material-symbols-outlined text-outline">bed</span>
                                <span class="font-label-md text-label-sm">{{ $property->bedrooms }} Hab.</span>
                            </div>
                            @endif
                            @if($property->bathrooms !== null)
                            <div class="flex flex-col items-center gap-xs">
                                <span class="material-symbols-outlined text-outline">bathtub</span>
                                <span class="font-label-md text-label-sm">{{ $property->bathrooms }} Baños</span>
                            </div>
                            @endif
                            @if($property->area)
                            <div class="flex flex-col items-center gap-xs">
                                <span class="material-symbols-outlined text-outline">straighten</span>
                                <span class="font-label-md text-label-sm">{{ $property->area }} m²</span>
                            </div>
                            @endif
                            @if(!$property->bedrooms && !$property->bathrooms && !$property->area)
                            <div class="flex flex-col items-center gap-xs">
                                <span class="material-symbols-outlined text-outline">landscape</span>
                                <span class="font-label-md text-label-sm">{{ $property->getTypeLabel() }}</span>
                            </div>
                            @endif
                        </div>
                        <div class="flex justify-between items-center pt-xs">
                            <div>
                                <span class="text-primary font-headline-md">
                                    {{ $property->currency }} {{ number_format($property->price, 0, '.', ',') }}
                                </span>
                                @if($property->isRental())
                                    <span class="text-on-surface-variant text-xs">
                                        / {{ $property->operation_type === 'renta_vacacional' ? 'noche' : 'mes' }}
                                    </span>
                                @endif
                            </div>
                            <span class="bg-surface-container-high hover:bg-primary hover:text-on-primary p-3 rounded-full transition-all">
                                <span class="material-symbols-outlined">visibility</span>
                            </span>
                        </div>
                    </div>
                </a>
                @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-on-surface-variant">No hay propiedades disponibles en este momento.</p>
                </div>
                @endforelse
            </div>

            <!-- Paginación -->
            @if($properties->hasPages())
            <div class="mt-xl flex justify-center">
                {{ $properties->links() }}
            </div>
            @endif
        </section>

        <!-- Newsletter / CTA -->
        <section class="px-4 md:px-margin-desktop max-w-[1440px] mx-auto mt-10 md:mt-xl mb-6 md:mb-lg">
            <div class="relative rounded-2xl md:rounded-3xl overflow-hidden py-10 md:py-xl px-6 md:px-gutter bg-primary">
                <div class="absolute inset-0 opacity-10">
                    <img class="w-full h-full object-cover" alt="Beach background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBGn_8hNJeXvFUHPO0JLtIvMVtcqgIByk9MqQVdsS8K3Wa25bwJ8qdn59-fbvLkjqCfcrU0spAQFCxaI3x8YH8z1w1ZoLJ8WaR9tIhPaJ3TOr2PKAXifu97PkayDWUW60Bfubv3m3U_ZnVOLprEO3yBaZlRAdI_12RiDHdSBEVSiVTq38_-HEt8Dz9Ke9yrrfGeofFCErd0np7O_bBJv-HVPKqVDaaazxRFKaHP-BSMQwA1QWuB1GQN8ncXzL5l099O2FCrwUCZQIE">
                </div>
                <div class="relative z-10 text-center space-y-4 md:space-y-md max-w-2xl mx-auto">
                    <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-white">¿No encuentras lo que buscas?</h2>
                    <p class="text-on-primary-container text-sm md:font-body-lg">Suscríbete para recibir alertas de nuevas propiedades que coincidan con tus preferencias antes que nadie.</p>
                    <div class="flex flex-col sm:flex-row gap-2 md:gap-xs pt-2 md:pt-md">
                        <input class="flex-grow bg-white border-transparent rounded-lg px-4 md:px-6 py-3 text-sm focus:ring-secondary focus:border-secondary text-on-surface" placeholder="Tu correo electrónico" type="email">
                        <button class="bg-secondary-container text-on-secondary-container font-bold px-6 md:px-8 py-3 rounded-lg hover:opacity-90 transition-all text-sm">Suscribirme</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-surface-container text-on-surface-variant py-10 md:py-lg px-4 md:px-margin-desktop">
        <div class="max-w-[1440px] mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start gap-8 md:gap-xl mb-8 md:mb-xl">
                <div class="space-y-4 md:space-y-md">
                    <span class="font-headline-md text-headline-md font-bold text-on-surface block">Margarita Flores</span>
                    <p class="text-label-md font-medium text-tertiary max-w-xs">Tu aliada estratégica en el mercado inmobiliario de Mazatlán.</p>
                    <div class="flex gap-3 flex-wrap">
                        <a href="#" target="_blank" aria-label="TikTok" class="w-9 h-9 flex items-center justify-center rounded-full bg-surface-container-high hover:bg-black hover:text-white text-on-surface-variant transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.78 1.52V6.74a4.85 4.85 0 01-1.01-.05z"/></svg>
                        </a>
                        <a href="#" target="_blank" aria-label="Instagram" class="w-9 h-9 flex items-center justify-center rounded-full bg-surface-container-high hover:bg-pink-500 hover:text-white text-on-surface-variant transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a href="#" target="_blank" aria-label="Threads" class="w-9 h-9 flex items-center justify-center rounded-full bg-surface-container-high hover:bg-black hover:text-white text-on-surface-variant transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.186 24h-.007c-3.581-.024-6.334-1.205-8.184-3.509C2.35 18.44 1.5 15.586 1.472 12.01v-.017c.03-3.579.879-6.43 2.525-8.482C5.845 1.205 8.6.024 12.18 0h.014c2.746.02 5.043.725 6.826 2.098 1.677 1.29 2.858 3.13 3.509 5.467l-2.04.569c-1.104-3.96-3.898-5.984-8.304-6.015-2.91.022-5.11.936-6.54 2.717C4.307 6.504 3.616 8.914 3.589 12c.027 3.086.718 5.496 2.057 7.164 1.43 1.783 3.631 2.698 6.54 2.717 2.623-.02 4.358-.631 5.8-2.045 1.647-1.613 1.618-3.593 1.09-4.798-.31-.71-.873-1.3-1.634-1.75-.192 1.352-.622 2.446-1.284 3.272-.886 1.102-2.14 1.704-3.73 1.79-1.202.065-2.361-.218-3.259-.801-1.063-.689-1.685-1.74-1.752-2.964-.065-1.19.408-2.285 1.33-3.082.88-.76 2.119-1.207 3.583-1.291a13.853 13.853 0 013.02.142c-.126-.988-.43-1.7-.9-2.121-.595-.533-1.5-.808-2.7-.822h-.036c-.783 0-1.878.169-2.753 1.004l-1.433-1.453C10.4 4.2 11.773 3.73 13.29 3.73h.064c1.695.022 3.057.502 4.049 1.427 1.136 1.057 1.68 2.6 1.61 4.38.63.387 1.144.84 1.542 1.355 1.36 1.83 1.363 4.407-.01 6.462C19.116 23.098 16.81 24 12.186 24zm-1.68-8.413c.086 1.558 1.165 1.752 1.78 1.718.957-.052 1.743-.457 2.237-1.14.42-.58.66-1.39.713-2.417a10.958 10.958 0 00-2.535-.138c-.967.056-1.718.333-2.17.8-.345.358-.51.803-.479 1.294l-.001-.117.455-.002z"/></svg>
                        </a>
                        <a href="#" target="_blank" aria-label="Facebook" class="w-9 h-9 flex items-center justify-center rounded-full bg-surface-container-high hover:bg-[#1877F2] hover:text-white text-on-surface-variant transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" target="_blank" aria-label="LinkedIn" class="w-9 h-9 flex items-center justify-center rounded-full bg-surface-container-high hover:bg-[#0A66C2] hover:text-white text-on-surface-variant transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-8 md:gap-xl w-full md:w-auto">
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
                    <div class="space-y-3 md:space-y-md col-span-2 md:col-span-1">
                        <h4 class="font-label-md text-on-surface font-bold text-sm">Contacto</h4>
                        <ul class="space-y-2 md:space-y-sm text-sm">
                            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-[16px]">mail</span> info@margaritaflores.com</li>
                            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-[16px]">call</span> +52 (669) 123 4567</li>
                        </ul>
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

        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('flex');
                menuIcon.textContent = 'menu';
            });
        });
    </script>
</body>
</html>
