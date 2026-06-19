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
    <nav class="fixed top-0 w-full z-50 backdrop-blur-md bg-surface/80 dark:bg-surface-container-highest/80 shadow-sm border-b border-outline-variant/10">
        <div class="flex justify-between items-center px-margin-mobile md:px-margin-desktop py-4 max-w-container-max mx-auto">
            <a class="font-headline-lg text-headline-lg-mobile md:text-headline-md text-primary dark:text-primary-fixed-dim tracking-tight" href="/">
                Margarita Flores
                <span class="block text-label-sm font-label-sm text-on-surface-variant dark:text-outline-variant tracking-widest uppercase mt-1">Asesora Inmobiliaria</span>
            </a>
            <div class="hidden md:flex gap-8 items-center">
                <a class="font-label-md text-label-md text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-all duration-300 active:scale-95" href="/">Inicio</a>
                <a class="font-label-md text-label-md text-primary dark:text-primary-fixed-dim border-b-2 border-primary dark:border-primary-fixed-dim pb-1 transition-all duration-300 active:scale-95" href="/properties">Propiedades</a>
                <a class="font-label-md text-label-md text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-all duration-300 active:scale-95" href="#contacto">Contacto</a>
                <button class="bg-primary text-on-primary px-6 py-2.5 rounded-lg font-label-md transition-all hover:opacity-90 active:scale-95">Consulta Gratis</button>
            </div>
            <!-- Mobile Menu Toggle -->
            <button class="md:hidden p-2 text-primary" aria-label="Abrir menu">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
    </nav>

    <main class="pt-24 pb-xl">
        <!-- Hero Section -->
        <section class="px-margin-desktop max-w-[1440px] mx-auto pt-lg pb-md">
            <div class="text-center md:text-left space-y-md">
                <div class="inline-flex items-center gap-xs bg-secondary-container/30 px-4 py-1.5 rounded-full text-secondary">
                    <span class="material-symbols-outlined text-[18px]">domain</span>
                    <span class="font-label-md text-label-md">Portafolio Premium</span>
                </div>
                <h1 class="font-headline-xl text-headline-xl text-primary md:max-w-2xl leading-tight">Encuentra el hogar que siempre has soñado</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">Descubre una selección exclusiva de propiedades diseñadas para elevar tu estilo de vida. Desde residencias contemporáneas hasta espacios acogedores en las mejores ubicaciones.</p>
            </div>
        </section>

        <!-- Search & Filter Bar -->
        <section class="px-margin-desktop max-w-[1440px] mx-auto mb-lg">
            <div class="bg-surface-container-lowest p-gutter rounded-xl shadow-sm border border-surface-container-high">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-md items-end">
                    <div class="space-y-xs">
                        <label class="font-label-md text-label-md text-on-surface-variant">Ubicación</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">location_on</span>
                            <select class="w-full bg-background border-outline-variant rounded-lg pl-10 py-2.5 font-body-md focus:ring-primary focus:border-primary transition-all">
                                <option>Todas las zonas</option>
                                <option>Marina Mazatlán</option>
                                <option>Centro Histórico</option>
                                <option>Zona Cerritos</option>
                                <option>El Cid</option>
                            </select>
                        </div>
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-md text-label-md text-on-surface-variant">Tipo de Propiedad</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">home_work</span>
                            <select class="w-full bg-background border-outline-variant rounded-lg pl-10 py-2.5 font-body-md focus:ring-primary focus:border-primary transition-all">
                                <option>Cualquiera</option>
                                <option>Villas</option>
                                <option>Departamentos</option>
                                <option>Terrenos</option>
                            </select>
                        </div>
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-md text-label-md text-on-surface-variant">Rango de Precio (€)</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">payments</span>
                            <select class="w-full bg-background border-outline-variant rounded-lg pl-10 py-2.5 font-body-md focus:ring-primary focus:border-primary transition-all">
                                <option>Sin límite</option>
                                <option>Hasta 500,000€</option>
                                <option>500,000€ - 1,000,000€</option>
                                <option>Más de 1,000,000€</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <button class="w-full bg-primary text-on-primary font-label-md py-3 rounded-lg flex items-center justify-center gap-xs hover:opacity-90 transition-all shadow-md shadow-primary/20">
                            <span class="material-symbols-outlined">search</span>
                            Buscar Propiedades
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Property Grid -->
        <section class="px-margin-desktop max-w-[1440px] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                @forelse($properties as $property)
                <!-- Property Card -->
                <div class="bg-surface-container-lowest rounded-xl overflow-hidden group shadow-sm hover:shadow-xl transition-all duration-500">
                    <div class="relative h-72 overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="{{ $property['title'] }}" src="{{ $property['image'] }}">
                        <div class="absolute top-4 left-4 flex gap-xs">
                            @if($property['status'] === 'VENDIDO')
                                <span class="bg-on-surface-variant/80 text-white text-label-sm px-3 py-1 rounded-full font-bold">{{ $property['status'] }}</span>
                            @elseif($property['status'] === 'ENTREGA INMEDIATA')
                                <span class="bg-white/90 backdrop-blur-md text-on-surface text-label-sm px-3 py-1 rounded-full font-bold">{{ $property['status'] }}</span>
                            @elseif($property['featured'])
                                <span class="bg-primary text-white text-label-sm px-3 py-1 rounded-full font-bold">{{ $property['status'] }}</span>
                            @else
                                <span class="bg-secondary text-white text-label-sm px-3 py-1 rounded-full font-bold">{{ $property['status'] }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="p-gutter space-y-md">
                        <div>
                            <p class="text-secondary font-label-md uppercase tracking-wider text-xs">{{ $property['location'] }}</p>
                            <h3 class="font-headline-md text-headline-md text-on-surface">{{ $property['title'] }}</h3>
                        </div>
                        <div class="flex justify-between items-center text-on-surface-variant py-2 border-y border-surface-container-high">
                            <div class="flex flex-col items-center gap-xs">
                                <span class="material-symbols-outlined text-outline">bed</span>
                                <span class="font-label-md text-label-sm">{{ $property['bedrooms'] }} Hab.</span>
                            </div>
                            <div class="flex flex-col items-center gap-xs">
                                <span class="material-symbols-outlined text-outline">bathtub</span>
                                <span class="font-label-md text-label-sm">{{ $property['bathrooms'] }} Baños</span>
                            </div>
                            <div class="flex flex-col items-center gap-xs">
                                <span class="material-symbols-outlined text-outline">straighten</span>
                                <span class="font-label-md text-label-sm">{{ $property['area'] }} m²</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center pt-xs">
                            <span class="text-primary font-headline-md">{{ $property['price'] }} €</span>
                            <button class="bg-surface-container-high hover:bg-primary hover:text-on-primary p-3 rounded-full transition-all group/btn">
                                <span class="material-symbols-outlined">visibility</span>
                            </button>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-on-surface-variant">No hay propiedades disponibles en este momento.</p>
                </div>
                @endforelse
            </div>

            <!-- Pagination/Load More -->
            <div class="mt-xl flex justify-center">
                <button class="group flex items-center gap-sm bg-surface-container-high px-lg py-md rounded-full font-label-md text-primary hover:bg-primary hover:text-on-primary transition-all shadow-sm">
                    Ver más propiedades
                    <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </button>
            </div>
        </section>

        <!-- Newsletter / CTA -->
        <section class="px-margin-desktop max-w-[1440px] mx-auto mt-xl mb-lg">
            <div class="relative rounded-3xl overflow-hidden py-xl px-gutter bg-primary overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <img class="w-full h-full object-cover" alt="Beach background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBGn_8hNJeXvFUHPO0JLtIvMVtcqgIByk9MqQVdsS8K3Wa25bwJ8qdn59-fbvLkjqCfcrU0spAQFCxaI3x8YH8z1w1ZoLJ8WaR9tIhPaJ3TOr2PKAXifu97PkayDWUW60Bfubv3m3U_ZnVOLprEO3yBaZlRAdI_12RiDHdSBEVSiVTq38_-HEt8Dz9Ke9yrrfGeofFCErd0np7O_bBJv-HVPKqVDaaazxRFKaHP-BSMQwA1QWuB1GQN8ncXzL5l099O2FCrwUCZQIE">
                </div>
                <div class="relative z-10 text-center space-y-md max-w-2xl mx-auto">
                    <h2 class="font-headline-lg text-headline-lg text-white">¿No encuentras lo que buscas?</h2>
                    <p class="text-on-primary-container font-body-lg">Suscríbete para recibir alertas de nuevas propiedades que coincidan con tus preferencias antes que nadie.</p>
                    <div class="flex flex-col md:flex-row gap-xs pt-md">
                        <input class="flex-grow bg-white border-transparent rounded-lg px-6 py-3 focus:ring-secondary focus:border-secondary text-on-surface" placeholder="Tu correo electrónico" type="email">
                        <button class="bg-secondary-container text-on-secondary-container font-bold px-8 py-3 rounded-lg hover:opacity-90 transition-all">Suscribirme</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-surface-container text-on-surface-variant py-lg px-margin-desktop">
        <div class="max-w-[1440px] mx-auto flex flex-col md:flex-row justify-between items-start gap-xl">
            <div class="space-y-md max-w-sm">
                <span class="font-headline-md text-headline-md font-bold text-on-surface">Margarita Flores</span>
                <p class="text-label-md font-medium text-tertiary">Tu aliada estratégica en el mercado inmobiliario de lujo. Conectando sueños con los mejores espacios.</p>
                <div class="flex gap-md">
                    <a class="hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">face_nod</span></a>
                    <a class="hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">camera</span></a>
                    <a class="hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">link</span></a>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-xl w-full md:w-auto">
                <div class="space-y-md">
                    <h4 class="font-label-md text-on-surface font-bold">Navegación</h4>
                    <ul class="space-y-sm text-label-md">
                        <li class=""><a class="hover:text-primary transition-all" href="/">Inicio</a></li>
                        <li class=""><a class="hover:text-primary transition-all" href="/properties">Propiedades</a></li>
                        <li class=""><a class="hover:text-primary transition-all" href="#contacto">Asesoría</a></li>
                    </ul>
                </div>
                <div class="space-y-md">
                    <h4 class="font-label-md text-on-surface font-bold">Legal</h4>
                    <ul class="space-y-sm text-label-md">
                        <li class=""><a class="hover:text-primary transition-all" href="#">Privacidad</a></li>
                        <li class=""><a class="hover:text-primary transition-all" href="#">Términos</a></li>
                        <li class=""><a class="hover:text-primary transition-all" href="#">Cookies</a></li>
                    </ul>
                </div>
                <div class="space-y-md col-span-2 md:col-span-1">
                    <h4 class="font-label-md text-on-surface font-bold">Contacto</h4>
                    <ul class="space-y-sm text-label-md">
                        <li class="flex items-center gap-xs"><span class="material-symbols-outlined text-[18px]">mail</span> info@margaritaflores.com</li>
                        <li class="flex items-center gap-xs"><span class="material-symbols-outlined text-[18px]">call</span> +52 (669) 123 4567</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="max-w-[1440px] mx-auto mt-xl pt-md border-t border-surface-container-high flex flex-col md:flex-row justify-between items-center gap-md text-label-sm">
            <span class="">© 2024 Margarita Flores - Asesora Inmobiliaria. All rights reserved.</span>
            <span class="flex items-center gap-xs"><span class="material-symbols-outlined text-primary text-[14px]">favorite</span> Hecho con pasión por el real estate</span>
        </div>
    </footer>

    <script>
        // Simple Micro-interaction: Active state handling for navigation
        document.querySelectorAll('nav a').forEach(link => {
            link.addEventListener('click', function(e) {
                document.querySelectorAll('nav a').forEach(l => {
                    l.classList.remove('text-primary', 'font-bold', 'border-b-2', 'border-primary');
                    l.classList.add('text-on-surface-variant', 'font-medium');
                });
                this.classList.add('text-primary', 'font-bold', 'border-b-2', 'border-primary');
                this.classList.remove('text-on-surface-variant', 'font-medium');
            });
        });
    </script>
</body>
</html>
