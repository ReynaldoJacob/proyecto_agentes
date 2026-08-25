<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;800&amp;family=Montserrat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-bright": "#f9f9ff",
                        "inverse-primary": "#9ccaff",
                        "surface-variant": "#dde2f3",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-fixed-variant": "#4c4733",
                        "on-error-container": "#93000a",
                        "on-surface-variant": "#414750",
                        "tertiary-container": "#5d5843",
                        "surface": "#f9f9ff",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary-container": "#d7ceb4",
                        "background": "#f9f9ff",
                        "surface-container": "#e8eeff",
                        "secondary-fixed": "#aeedf7",
                        "on-primary": "#ffffff",
                        "inverse-on-surface": "#ecf0ff",
                        "surface-container-highest": "#dde2f3",
                        "secondary-fixed-dim": "#92d1da",
                        "surface-tint": "#12629d",
                        "tertiary-fixed": "#ebe2c8",
                        "primary-fixed-dim": "#9ccaff",
                        "on-error": "#ffffff",
                        "secondary": "#25676f",
                        "error": "#ba1a1a",
                        "outline": "#717781",
                        "tertiary": "#45412d",
                        "surface-dim": "#d4daea",
                        "on-tertiary-fixed": "#1f1c0b",
                        "on-background": "#161c27",
                        "primary-fixed": "#d0e4ff",
                        "tertiary-fixed-dim": "#cec6ad",
                        "on-secondary-fixed": "#001f23",
                        "outline-variant": "#c1c7d1",
                        "on-surface": "#161c27",
                        "error-container": "#ffdad6",
                        "on-secondary-container": "#2c6d76",
                        "on-secondary": "#ffffff",
                        "on-primary-fixed-variant": "#00497a",
                        "primary-container": "#005b96",
                        "secondary-container": "#aeedf7",
                        "on-primary-fixed": "#001d35",
                        "surface-container-high": "#e3e8f9",
                        "on-secondary-fixed-variant": "#004f57",
                        "on-primary-container": "#abd2ff",
                        "primary": "#004370",
                        "surface-container-low": "#f1f3ff",
                        "inverse-surface": "#2a303d"
                    },
                    borderRadius: {
                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        full: "9999px"
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
                        "headline-md": ["Cinzel"],
                        "headline-lg": ["Cinzel"],
                        "headline-xl": ["Cinzel"],
                        "label-sm": ["Montserrat"],
                        "label-md": ["Montserrat"],
                        "body-lg": ["Montserrat"],
                        "body-md": ["Montserrat"],
                        "headline-lg-mobile": ["Cinzel"]
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
                }
            }
        };
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }

        .property-card-shadow {
            box-shadow: 0 12px 32px rgba(0, 91, 150, 0.08);
        }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface overflow-x-hidden">
    <nav class="fixed top-0 w-full z-50 backdrop-blur-md bg-surface/90 shadow-sm border-b border-outline-variant/10">
        <div class="flex justify-between items-center px-4 md:px-margin-desktop py-3 md:py-4 max-w-container-max mx-auto">
            <a href="/">
                <div style="height:68px;overflow:hidden;display:flex;align-items:center;">
                    <img src="/images/logo.png" alt="Margarita Flores" style="height:120px;width:auto;">
                </div>
            </a>
            {{-- Desktop nav --}}
            <div class="hidden md:flex gap-8 items-center">
                <a class="font-label-md text-label-md text-primary border-b-2 border-primary pb-1 transition-all" href="/">Inicio</a>
                <a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-all" href="/properties">Propiedades</a>
                <a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-all" href="#contacto">Contacto</a>
            </div>
            {{-- Hamburger --}}
            <button id="menu-btn" class="md:hidden text-primary p-2 rounded-lg hover:bg-surface-container transition-all" aria-label="Abrir menú">
                <span id="menu-icon" class="material-symbols-outlined">menu</span>
            </button>
        </div>

        {{-- Mobile menu --}}
        <div id="mobile-menu"
             class="md:hidden hidden flex-col bg-surface border-t border-outline-variant/20 px-4 pb-4 pt-2 space-y-1">
            <a href="/" class="flex items-center gap-3 px-4 py-3 rounded-xl text-primary font-semibold bg-primary/5">
                <span class="material-symbols-outlined text-[20px]">home</span> Inicio
            </a>
            <a href="/properties" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all font-medium">
                <span class="material-symbols-outlined text-[20px]">domain</span> Propiedades
            </a>
            <a href="#contacto" id="contacto-link" class="flex items-center gap-3 px-4 py-3 rounded-xl text-on-surface-variant hover:bg-surface-container hover:text-primary transition-all font-medium">
                <span class="material-symbols-outlined text-[20px]">mail</span> Contacto
            </a>
        </div>
    </nav>

    <header class="relative min-h-[100svh] md:min-h-[90vh] flex items-end md:items-center pt-16 pb-12 md:pb-0">
        <div class="absolute inset-0 z-0 overflow-hidden">
            <video id="hero-video" autoplay loop muted playsinline preload="auto"
                   style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;pointer-events:none;"
                   src="/videos/promo.mp4"></video>
            {{-- Mobile: gradiente de abajo hacia arriba --}}
            <div class="absolute inset-0 bg-gradient-to-t from-background via-background/70 to-transparent md:hidden"></div>
            {{-- Desktop: gradiente de izquierda a derecha --}}
            <div class="absolute inset-0 hidden md:block bg-gradient-to-r from-background/90 via-background/40 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-container-max mx-auto px-4 md:px-margin-desktop w-full">
            <div class="max-w-2xl text-center md:text-left">
                <h1 class="font-headline-xl text-headline-lg-mobile md:text-headline-xl text-on-surface mb-4 md:mb-6 leading-tight">Tu próximo capítulo comienza aquí</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-8 md:mb-10 leading-relaxed text-sm md:text-lg">Mi propósito es ayudarte a encontrar más que una propiedad: una oportunidad para construir patrimonio, alcanzar tus metas y crecer junto con Mazatlán.</p>
                <div class="flex flex-col sm:flex-row gap-3 md:gap-4">
                    <a href="/properties" class="bg-primary text-on-primary px-8 py-4 rounded-xl font-label-md text-base md:text-lg transition-all hover:shadow-lg hover:shadow-primary/20 active:scale-95 text-center">Ver Propiedades</a>
                    <a href="#contacto" class="border-2 border-primary text-primary px-8 py-4 rounded-xl font-label-md text-base md:text-lg transition-all hover:bg-primary/5 active:scale-95 text-center">Agenda una Cita</a>
                </div>
            </div>
        </div>
    </header>

    <section class="py-section-gap max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        <div class="text-center mb-16">
            <h2 class="font-headline-lg text-headline-lg text-on-surface mb-4">Propiedades Destacadas</h2>
            <div class="w-16 h-1.5 bg-primary-container rounded-full mx-auto mb-6"></div>
            <p class="font-body-md text-body-md text-on-surface-variant max-w-xl mx-auto">Haz clic sobre cualquier propiedad para ver su galeria de fotos y detalles completos.</p>
        </div>

        @if($featuredProperties->isEmpty())
        <div class="text-center py-12 text-on-surface-variant">
            <span class="material-symbols-outlined text-5xl mb-3 block">home_work</span>
            <p class="font-body-md text-body-md">Próximamente propiedades destacadas.</p>
        </div>
        @else
        <div class="relative" id="featured-carousel-wrapper" data-count="{{ $featuredProperties->count() }}">
            {{-- Flecha izquierda --}}
            <button id="carousel-prev"
                    class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-5 z-10 w-11 h-11 rounded-full bg-surface-container-lowest shadow-md flex items-center justify-center text-on-surface hover:bg-primary hover:text-on-primary transition-all duration-200">
                <span class="material-symbols-outlined">chevron_left</span>
            </button>

            {{-- Track --}}
            <div class="overflow-hidden" id="carousel-overflow">
                <div class="flex gap-6 transition-transform duration-500 ease-in-out" id="carousel-track">
                    @foreach($featuredProperties as $property)
                    <div class="flex-shrink-0 w-full md:w-[calc(33.333%-1rem)] bg-surface-container-lowest rounded-2xl overflow-hidden property-card-shadow group transition-shadow duration-300 hover:shadow-xl flex flex-col">
                        <a href="{{ route('properties.show', $property) }}" class="block">
                        <div class="relative h-64 overflow-hidden">
                            @if($property->cover_image)
                                <img alt="{{ $property->title }}"
                                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                     src="{{ Storage::url($property->cover_image) }}">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-surface-container text-outline">
                                    <span class="material-symbols-outlined text-6xl">home</span>
                                </div>
                            @endif
                            <div class="absolute top-4 right-4 bg-secondary-container text-on-secondary-container px-4 py-1.5 rounded-full font-label-md">
                                {{ $property->currency }} {{ number_format($property->price, 0, '.', ',') }}
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="font-label-sm text-label-sm text-primary tracking-widest uppercase mb-2 block">
                                {{ $property->city }}{{ $property->state ? ', ' . $property->state : '' }}
                            </span>
                            <h3 class="font-headline-md text-headline-md mb-4 text-on-surface">{{ $property->title }}</h3>
                            <div class="flex justify-between items-center py-4 border-t border-outline-variant/30">
                                @if($property->bedrooms !== null)
                                <div class="flex flex-col items-center">
                                    <span class="material-symbols-outlined text-primary-container mb-1">bed</span>
                                    <span class="font-label-sm text-on-surface-variant">{{ $property->bedrooms }} Hab.</span>
                                </div>
                                @endif
                                @if($property->bathrooms !== null)
                                <div class="flex flex-col items-center">
                                    <span class="material-symbols-outlined text-primary-container mb-1">bathtub</span>
                                    <span class="font-label-sm text-on-surface-variant">{{ $property->bathrooms }} Baños</span>
                                </div>
                                @endif
                                @if($property->parking_spaces !== null)
                                <div class="flex flex-col items-center">
                                    <span class="material-symbols-outlined text-primary-container mb-1">directions_car</span>
                                    <span class="font-label-sm text-on-surface-variant">{{ $property->parking_spaces }} Autos</span>
                                </div>
                                @endif
                                @if($property->area)
                                <div class="flex flex-col items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.6" class="text-primary-container mb-1">
                                        <rect x="3" y="3" width="14" height="14" rx="0.5"/>
                                        <line x1="3" y1="20.5" x2="17" y2="20.5"/><polyline points="5,19 3,20.5 5,22"/><polyline points="15,19 17,20.5 15,22"/>
                                        <line x1="20.5" y1="3" x2="20.5" y2="17"/><polyline points="19,5 20.5,3 22,5"/><polyline points="19,15 20.5,17 22,15"/>
                                        <text x="5.5" y="13.5" font-size="6.5" font-family="serif" font-weight="bold" stroke="none" fill="currentColor">m²</text>
                                    </svg>
                                    <span class="font-label-sm text-on-surface-variant">{{ number_format($property->area, 0) }} m²</span>
                                </div>
                                @endif
                            </div>
                        </div>
                        </a>
                        @if($property->maps_url)
                        <div class="px-6 pb-6 mt-auto">
                            <a href="{{ $property->maps_url }}" target="_blank" rel="noopener"
                               class="flex items-center justify-center gap-2 w-full py-2.5 border border-outline-variant text-on-surface-variant text-sm font-semibold rounded-xl hover:bg-surface-container hover:text-primary transition-all">
                                <span class="material-symbols-outlined text-[16px]">map</span>
                                Ver ubicación en Google Maps
                            </a>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Flecha derecha --}}
            <button id="carousel-next"
                    class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-5 z-10 w-11 h-11 rounded-full bg-surface-container-lowest shadow-md flex items-center justify-center text-on-surface hover:bg-primary hover:text-on-primary transition-all duration-200">
                <span class="material-symbols-outlined">chevron_right</span>
            </button>
        </div>

        {{-- Dots --}}
        <div class="flex justify-center gap-2 mt-8" id="carousel-dots">
            @foreach($featuredProperties as $property)
            <button class="carousel-dot h-2.5 rounded-full transition-all duration-300 {{ $loop->first ? 'w-6 bg-primary' : 'w-2.5 bg-outline-variant' }}"
                    data-index="{{ $loop->index }}"></button>
            @endforeach
        </div>

        <script>
        (function () {
            var track    = document.getElementById('carousel-track');
            var overflow = document.getElementById('carousel-overflow');
            var wrapper  = document.getElementById('featured-carousel-wrapper');
            var n        = parseInt(wrapper.dataset.count, 10);
            var pos      = 0;
            var paused   = false;
            var speed    = 0.5; // px por frame (~30px/s a 60fps)
            var dotFrame = 0;

            function visibleCount() {
                return window.innerWidth >= 768 ? 3 : 1;
            }

            // Clonar tarjetas para loop infinito
            Array.from(track.children).forEach(function(c) {
                track.appendChild(c.cloneNode(true));
            });

            // Sin transición CSS — el movimiento lo maneja rAF
            track.style.transition = 'none';

            function cardStep() {
                var c = track.children[0];
                return c ? c.offsetWidth + 24 : 0;
            }

            function loopWidth() {
                return n * cardStep();
            }

            function render() {
                track.style.transform = 'translateX(-' + pos + 'px)';
            }

            function syncDots() {
                var step = cardStep();
                if (!step) return;
                var active = Math.floor(pos / step) % n;
                document.querySelectorAll('.carousel-dot').forEach(function(dot, j) {
                    var a = j === active;
                    dot.classList.toggle('bg-primary', a);
                    dot.classList.toggle('w-6', a);
                    dot.classList.toggle('bg-outline-variant', !a);
                    dot.classList.toggle('w-2.5', !a);
                });
            }

            function needsScroll() {
                return n > visibleCount();
            }

            function tick() {
                if (!paused && needsScroll()) {
                    pos += speed;
                    var lw = loopWidth();
                    if (lw && pos >= lw) pos -= lw;
                    render();
                    dotFrame++;
                    if (dotFrame % 40 === 0) syncDots();
                }
                requestAnimationFrame(tick);
            }

            function jumpTo(newPos) {
                var lw = loopWidth();
                pos = lw ? ((newPos % lw) + lw) % lw : 0;
                render();
                syncDots();
            }

            // Pausa al hover
            wrapper.addEventListener('mouseenter', function() { paused = true; });
            wrapper.addEventListener('mouseleave', function() { paused = false; });

            // Flechas: saltan una tarjeta
            document.getElementById('carousel-prev').addEventListener('click', function() {
                jumpTo(pos - cardStep());
            });
            document.getElementById('carousel-next').addEventListener('click', function() {
                jumpTo(pos + cardStep());
            });

            // Dots: saltan a esa tarjeta
            document.querySelectorAll('.carousel-dot').forEach(function(dot, j) {
                dot.addEventListener('click', function() {
                    jumpTo(j * cardStep());
                });
            });

            // Swipe táctil
            var tx = 0;
            overflow.addEventListener('touchstart', function(e) {
                tx = e.touches[0].clientX;
                paused = true;
            }, { passive: true });
            overflow.addEventListener('touchend', function(e) {
                var d = tx - e.changedTouches[0].clientX;
                if (Math.abs(d) > 50) jumpTo(pos + (d > 0 ? cardStep() : -cardStep()));
                paused = false;
            }, { passive: true });

            // Ocultar controles y clones si no hay suficientes propiedades para scroll
            function updateControls() {
                var show = needsScroll();
                document.getElementById('carousel-prev').style.display = show ? '' : 'none';
                document.getElementById('carousel-next').style.display = show ? '' : 'none';
                document.getElementById('carousel-dots').style.display = show ? '' : 'none';
                // Ocultar tarjetas clonadas cuando no se necesita loop
                Array.from(track.children).forEach(function(card, i) {
                    card.style.display = (show || i < n) ? '' : 'none';
                });
                if (!show) { pos = 0; render(); }
            }

            window.addEventListener('resize', function() { render(); updateControls(); });

            updateControls();
            requestAnimationFrame(tick);

        })();
        </script>
        @endif
    </section>

    {{-- Sección Visión / Misión / Objetivo --}}
    <section class="bg-surface-container py-section-gap overflow-hidden">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="text-center mb-16">
                <h2 class="font-headline-lg text-headline-lg text-on-surface mb-4">Mi Propósito</h2>
                <div class="w-16 h-1.5 bg-primary-container rounded-full mx-auto mb-6"></div>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto italic">
                    "Mi propósito es ayudarte a encontrar más que una propiedad: una oportunidad para construir patrimonio, alcanzar tus metas y crecer junto con Mazatlán."
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mb-16">
                {{-- Visión --}}
                <div class="bg-surface-container-lowest rounded-2xl p-5 md:p-8 property-card-shadow">
                    <div class="w-12 h-12 rounded-xl bg-primary-container/10 flex items-center justify-center text-primary mb-5">
                        <span class="material-symbols-outlined">visibility</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-on-surface mb-3">Visión</h3>
                    <p class="font-body-md text-on-surface-variant leading-relaxed">Ser una de las asesoras inmobiliarias reconocidas de Mazatlán, destacando por brindar experiencias excepcionales, ayudando a mis clientes a construir patrimonio y generar inversiones inteligentes, con un crecimiento constante basado en la confianza, la excelencia y los resultados.</p>
                </div>

                {{-- Misión --}}
                <div class="bg-surface-container-lowest rounded-2xl p-5 md:p-8 property-card-shadow">
                    <div class="w-12 h-12 rounded-xl bg-primary-container/10 flex items-center justify-center text-primary mb-5">
                        <span class="material-symbols-outlined">flag</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-on-surface mb-3">Misión</h3>
                    <p class="font-body-md text-on-surface-variant leading-relaxed">Acompañar a cada cliente de manera personalizada en la búsqueda de la mejor oportunidad inmobiliaria en Mazatlán, ofreciendo asesoría profesional, transparente y estratégica en preventas, compra, venta y renta de inmuebles, generando confianza a través de la ética, la confidencialidad y un servicio enfocado en cumplir sus objetivos patrimoniales.</p>
                </div>

                {{-- Objetivo --}}
                <div class="bg-surface-container-lowest rounded-2xl p-5 md:p-8 property-card-shadow">
                    <div class="w-12 h-12 rounded-xl bg-primary-container/10 flex items-center justify-center text-primary mb-5">
                        <span class="material-symbols-outlined">target</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-on-surface mb-3">Objetivo Principal</h3>
                    <p class="font-body-md text-on-surface-variant leading-relaxed">Consolidarme como una asesora inmobiliaria de referencia en Mazatlán, logrando concretar operaciones mediante estrategias de promoción digital, capacitación continua y un servicio de excelencia que genere recomendaciones y relaciones de largo plazo.</p>
                </div>
            </div>

            {{-- Valores --}}
            <div class="bg-primary rounded-2xl md:rounded-3xl p-6 md:p-12">
                <div class="text-center mb-6 md:mb-10">
                    <h3 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-primary mb-1">Mis Valores</h3>
                    <p class="text-on-primary/70 text-sm md:font-body-md">Los principios que guían cada asesoría</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-6">
                    <div class="text-center p-4 md:p-6 bg-white/10 rounded-xl md:rounded-2xl flex flex-col items-center">
                        <span class="material-symbols-outlined text-on-primary text-3xl md:text-4xl mb-2 block">shield</span>
                        <p class="font-label-md text-on-primary md:tracking-wider uppercase text-[10px] md:text-sm leading-tight">Transparencia</p>
                    </div>
                    <div class="text-center p-4 md:p-6 bg-white/10 rounded-xl md:rounded-2xl flex flex-col items-center">
                        <span class="material-symbols-outlined text-on-primary text-3xl md:text-4xl mb-2 block">balance</span>
                        <p class="font-label-md text-on-primary md:tracking-wider uppercase text-[10px] md:text-sm leading-tight">Ética y<br>Confidencialidad</p>
                    </div>
                    <div class="text-center p-4 md:p-6 bg-white/10 rounded-xl md:rounded-2xl flex flex-col items-center">
                        <span class="material-symbols-outlined text-on-primary text-3xl md:text-4xl mb-2 block">volunteer_activism</span>
                        <p class="font-label-md text-on-primary md:tracking-wider uppercase text-[10px] md:text-sm leading-tight">Empatía</p>
                    </div>
                    <div class="text-center p-4 md:p-6 bg-white/10 rounded-xl md:rounded-2xl flex flex-col items-center">
                        <span class="material-symbols-outlined text-on-primary text-3xl md:text-4xl mb-2 block">workspace_premium</span>
                        <p class="font-label-md text-on-primary md:tracking-wider uppercase text-[10px] md:text-sm leading-tight">Profesionalismo</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Sección Por qué elegirme --}}
    <section class="py-section-gap overflow-hidden">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-1/2 relative flex justify-center lg:block">
                    <div class="relative z-10 rounded-3xl overflow-hidden aspect-[3/4] md:aspect-[4/5] property-card-shadow max-h-[480px] md:max-h-none w-full max-w-xs sm:max-w-sm lg:max-w-none">
                        <img alt="Margarita Flores Portrait" class="w-full h-full object-cover object-center" src="/images/agent-profile.jpeg">
                    </div>
                    <div class="absolute -bottom-10 -right-10 w-48 h-48 bg-primary-container rounded-full opacity-10 blur-3xl"></div>
                    <div class="absolute -top-10 -left-10 w-64 h-64 bg-secondary-container rounded-full opacity-20 blur-3xl"></div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface mb-4 md:mb-2 text-center lg:text-left">¿Por qué elegirme como tu asesora?</h2>

                    <div class="flex gap-4 items-start bg-surface-container-low rounded-2xl p-5 md:p-6 mb-4">
                        <div class="flex-shrink-0 w-11 h-11 md:w-14 md:h-14 rounded-xl md:rounded-2xl bg-primary-container/20 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-[20px] md:text-[24px]">person_check</span>
                        </div>
                        <p class="text-sm md:font-body-md text-on-surface-variant leading-relaxed">Brindo una atención cercana y personalizada, entendiendo las necesidades reales de cada cliente para ofrecer soluciones inmobiliarias seguras y rentables.</p>
                    </div>

                    <div class="flex gap-4 items-start bg-surface-container-low rounded-2xl p-5 md:p-6 mb-4">
                        <div class="flex-shrink-0 w-11 h-11 md:w-14 md:h-14 rounded-xl md:rounded-2xl bg-primary-container/20 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-[20px] md:text-[24px]">handshake</span>
                        </div>
                        <p class="text-sm md:font-body-md text-on-surface-variant leading-relaxed">Mi compromiso es acompañarlos durante todo el proceso con transparencia y conocimiento del mercado de Mazatlán.</p>
                    </div>

                    <div class="flex gap-4 items-start bg-surface-container-low rounded-2xl p-5 md:p-6">
                        <div class="flex-shrink-0 w-11 h-11 md:w-14 md:h-14 rounded-xl md:rounded-2xl bg-primary-container/20 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-[20px] md:text-[24px]">trending_up</span>
                        </div>
                        <p class="text-sm md:font-body-md text-on-surface-variant leading-relaxed">Un enfoque estratégico orientado a proteger y hacer crecer tu patrimonio.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto" class="py-section-gap max-w-container-max mx-auto px-4 md:px-margin-desktop">
        <div class="bg-inverse-surface rounded-3xl md:rounded-[3rem] p-6 md:p-16 flex flex-col md:flex-row justify-between items-center gap-8 md:gap-12 overflow-hidden relative">
            <div class="absolute inset-0 bg-primary/5 pointer-events-none"></div>
            <div class="w-full md:w-3/5 text-center md:text-left relative z-10">
                <span class="font-label-md text-secondary-fixed tracking-[0.2em] uppercase mb-3 block text-xs">¿Listo para dar el paso?</span>
                <h2 class="font-headline-xl text-headline-lg-mobile md:text-headline-xl text-inverse-on-surface mb-4 md:mb-6">Ponte en contacto conmigo</h2>
                <p class="font-body-lg text-body-lg text-outline-variant mb-6 md:mb-10 max-w-lg text-sm md:text-lg">Estoy disponible para resolver tus dudas, agendar una cita o ayudarte a evaluar el valor de mercado de tu inmueble sin compromiso.</p>
                <div class="flex flex-col sm:flex-row gap-4 md:gap-8 items-center md:items-start">
                    <div class="flex items-center gap-4 group">
                        <div class="w-14 h-14 rounded-full bg-surface-variant/10 flex items-center justify-center text-inverse-on-surface border border-outline-variant/20 transition-all group-hover:bg-primary-container">
                            <span class="material-symbols-outlined">call</span>
                        </div>
                        <div class="text-left">
                            <p class="font-label-sm text-outline-variant">Llamada Directa</p>
                            <p class="font-headline-md text-headline-md text-inverse-on-surface">+52 669 110 5734</p>
                        </div>
                    </div>
                    <a class="inline-flex items-center gap-3 bg-[#25D366] text-white px-8 py-4 rounded-full font-label-md hover:shadow-xl hover:scale-105 transition-all" href="https://wa.me/526691105734?text={{ urlencode('Hola Margarita, me gustaría recibir asesoría inmobiliaria.') }}" target="_blank" rel="noopener">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.417-.003 6.557-5.338 11.892-11.893 11.892-1.997-.001-3.951-.5-5.688-1.448l-6.305 1.652zm6.599-3.835c1.523.904 3.13 1.379 4.799 1.38h.003c5.739 0 10.409-4.669 10.412-10.411.002-2.78-1.082-5.393-3.056-7.368-1.973-1.973-4.585-3.055-7.366-3.056-5.738 0-10.402 4.663-10.405 10.41-.001 1.838.48 3.633 1.391 5.219l-1.054 3.847 3.934-1.032zm11.367-7.643c-.31-.155-1.837-.906-2.114-1.006-.277-.1-.478-.15-.678.15s-.777.906-.951 1.106-.349.225-.658.07c-.31-.155-1.307-.482-2.49-1.537-.919-.82-1.539-1.833-1.719-2.143-.18-.31-.019-.477.136-.631.14-.139.31-.35.465-.526.155-.175.206-.299.309-.499.103-.2.052-.375-.026-.531-.077-.156-.678-1.636-.93-2.241-.244-.59-.493-.51-.678-.519-.175-.009-.375-.01-.575-.01s-.526.075-.801.375c-.275.3-.1.575-1.1.575-1.2.75-.525 1.45.1 2.225.5 3.3 1.425 6.488 4.412 8.412 1.45.925 1.9 1.1 2.73 1.18.26.024.448.006.712-.032.274-.038.835-.342 1.052-.942s.217-1.112.15-1.226c-.067-.114-.247-.181-.557-.336z"></path></svg>
                        Chat en WhatsApp
                    </a>
                </div>
            </div>
            <div class="w-full md:w-2/5 bg-white/5 border border-white/10 rounded-3xl p-8 backdrop-blur-sm relative z-10">
                <div class="relative w-24 h-24 mx-auto mb-6">
                    <div class="absolute inset-0 bg-primary rounded-full scale-125 blur-xl opacity-20"></div>
                    <img alt="Margarita Flores Small" class="w-full h-full rounded-full object-cover border-2 border-primary-fixed-dim relative z-10" src="/images/agent-profile.jpeg">
                </div>
                <div class="text-center">
                    <h3 class="font-headline-md text-headline-md text-inverse-on-surface mb-1">Margarita Flores</h3>
                    <p class="font-label-md text-primary-fixed-dim mb-4 uppercase tracking-wider text-xs">Asesora Inmobiliaria Certificada</p>
                    <p class="font-body-md italic text-outline-variant leading-relaxed mb-6">"Mi propósito es ayudarte a encontrar más que una propiedad: una oportunidad para construir patrimonio y crecer junto con Mazatlán."</p>
                    <div class="flex justify-center gap-3">
                        <a href="https://www.tiktok.com/@maggyflog?_r=1&_t=ZS-96pO4xHVKfU" target="_blank" aria-label="TikTok" class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 text-inverse-on-surface transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.78 1.52V6.74a4.85 4.85 0 01-1.01-.05z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/maflga?igsh=dWxpdGdsaTdybHNn" target="_blank" aria-label="Instagram" class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 text-inverse-on-surface transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a href="https://www.threads.com/@maflga" target="_blank" aria-label="Threads" class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 text-inverse-on-surface transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.186 24h-.007c-3.581-.024-6.334-1.205-8.184-3.509C2.35 18.44 1.5 15.586 1.472 12.01v-.017c.03-3.579.879-6.43 2.525-8.482C5.845 1.205 8.6.024 12.18 0h.014c2.746.02 5.043.725 6.826 2.098 1.677 1.29 2.858 3.13 3.509 5.467l-2.04.569c-1.104-3.96-3.898-5.984-8.304-6.015-2.91.022-5.11.936-6.54 2.717C4.307 6.504 3.616 8.914 3.589 12c.027 3.086.718 5.496 2.057 7.164 1.43 1.783 3.631 2.698 6.54 2.717 2.623-.02 4.358-.631 5.8-2.045 1.647-1.613 1.618-3.593 1.09-4.798-.31-.71-.873-1.3-1.634-1.75-.192 1.352-.622 2.446-1.284 3.272-.886 1.102-2.14 1.704-3.73 1.79-1.202.065-2.361-.218-3.259-.801-1.063-.689-1.685-1.74-1.752-2.964-.065-1.19.408-2.285 1.33-3.082.88-.76 2.119-1.207 3.583-1.291a13.853 13.853 0 013.02.142c-.126-.988-.43-1.7-.9-2.121-.595-.533-1.5-.808-2.7-.822h-.036c-.783 0-1.878.169-2.753 1.004l-1.433-1.453C10.4 4.2 11.773 3.73 13.29 3.73h.064c1.695.022 3.057.502 4.049 1.427 1.136 1.057 1.68 2.6 1.61 4.38.63.387 1.144.84 1.542 1.355 1.36 1.83 1.363 4.407-.01 6.462C19.116 23.098 16.81 24 12.186 24zm-1.68-8.413c.086 1.558 1.165 1.752 1.78 1.718.957-.052 1.743-.457 2.237-1.14.42-.58.66-1.39.713-2.417a10.958 10.958 0 00-2.535-.138c-.967.056-1.718.333-2.17.8-.345.358-.51.803-.479 1.294l-.001-.117.455-.002z"/></svg>
                        </a>
                        <a href="https://www.facebook.com/share/18nw7CR8cV/?mibextid=wwXIfr" target="_blank" aria-label="Facebook" class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 text-inverse-on-surface transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/in/margarita-flores-garc%C3%ADa-a318162a8" target="_blank" aria-label="LinkedIn" class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 text-inverse-on-surface transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="https://www.youtube.com/channel/UCD9kUznufAHbX9EL_rI3i0g" target="_blank" aria-label="YouTube" class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 text-inverse-on-surface transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                <div class="grid grid-cols-2 md:grid-cols-4 gap-x-6 gap-y-10 md:gap-xl w-full md:w-auto">
                    <div class="space-y-3 md:space-y-md min-w-0">
                        <h4 class="font-label-md text-on-surface font-bold text-sm">Navegación</h4>
                        <ul class="space-y-2 md:space-y-sm text-sm">
                            <li><a class="hover:text-primary transition-all" href="/">Inicio</a></li>
                            <li><a class="hover:text-primary transition-all" href="/properties">Propiedades</a></li>
                            <li><a class="hover:text-primary transition-all" href="#contacto">Asesoría</a></li>
                        </ul>
                    </div>
                    <div class="space-y-3 md:space-y-md min-w-0">
                        <h4 class="font-label-md text-on-surface font-bold text-sm">Servicios</h4>
                        <ul class="space-y-2 md:space-y-sm text-sm">
                            <li><a class="hover:text-primary transition-all" href="/properties?operation_type=venta">Venta</a></li>
                            <li><a class="hover:text-primary transition-all" href="/properties?operation_type=preventa">Preventa</a></li>
                            <li><a class="hover:text-primary transition-all" href="/properties?operation_type=renta_anual">Renta Anual</a></li>
                            <li><a class="hover:text-primary transition-all" href="/properties?operation_type=renta_vacacional">Renta Vacacional</a></li>
                        </ul>
                    </div>
                    <div class="space-y-3 md:space-y-md min-w-0">
                        <h4 class="font-label-md text-on-surface font-bold text-sm">Contacto</h4>
                        <ul class="space-y-2 md:space-y-sm text-sm">
                            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-[16px] shrink-0">mail</span> <a href="mailto:maggyflog85@gmail.com" class="break-all hover:text-primary transition-all">maggyflog85@gmail.com</a></li>
                            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-[16px] shrink-0">call</span> <a href="https://wa.me/526691105734" target="_blank" rel="noopener" class="hover:text-primary transition-all">+52 669 110 5734</a></li>
                        </ul>
                    </div>
                    <div class="space-y-3 md:space-y-md min-w-0">
                        <h4 class="font-label-md text-on-surface font-bold text-sm">Licencia</h4>
                        <ul class="space-y-2 md:space-y-sm text-sm">
                            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-[16px] shrink-0">order_approve</span> 00153-MAZ</li>
                        </ul>
                        <a href="https://agentesinmobiliarios.sinaloa.gob.mx/agn/check/val.php?id=75f9e8be63f311f093a2d843aeedb8ff" target="_blank" rel="noopener" class="inline-flex items-center gap-2 group">
                            <img src="https://quickchart.io/qr?text={{ urlencode('https://agentesinmobiliarios.sinaloa.gob.mx/agn/check/val.php?id=75f9e8be63f311f093a2d843aeedb8ff') }}&dark=161c27&light=0000&margin=1&size=200" alt="Código QR de verificación de licencia de agente inmobiliario" width="88" height="88" class="shrink-0 rounded">
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
        // Menú mobile
        const menuBtn  = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');

        menuBtn.addEventListener('click', () => {
            const isOpen = !mobileMenu.classList.contains('hidden');
            mobileMenu.classList.toggle('hidden', isOpen);
            mobileMenu.classList.toggle('flex', !isOpen);
            menuIcon.textContent = isOpen ? 'menu' : 'close';
        });

        // Cerrar menú al tocar un enlace
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('flex');
                menuIcon.textContent = 'menu';
            });
        });

        // Forzar reproducción del video en mobile
        var heroVideo = document.getElementById('hero-video');
        if (heroVideo) {
            heroVideo.muted = true;
            var playPromise = heroVideo.play();
            if (playPromise !== undefined) {
                playPromise.catch(function() {
                    document.addEventListener('touchstart', function() {
                        heroVideo.play();
                    }, { once: true });
                });
            }
        }

        // Parallax desactivado (fondo es video)

        // Animación de entrada para tarjetas — sin movimiento en mobile
        const isMobile = window.innerWidth < 768;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    if (!isMobile) entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.08 });

        document.querySelectorAll('.property-card-shadow').forEach(card => {
            if (isMobile) {
                card.style.opacity = '0';
                card.style.transition = 'opacity 0.5s ease';
            } else {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'opacity 0.8s ease, transform 0.8s cubic-bezier(0.22, 1, 0.36, 1)';
            }
            observer.observe(card);
        });
    </script>
</body>
</html>
