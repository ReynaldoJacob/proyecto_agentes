<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $property->title }} | Margarita Flores</title>
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
        .thumb { cursor: pointer; transition: opacity 0.2s, outline 0.2s; }
        .thumb:hover { opacity: 0.85; }
        .thumb.active { outline: 2px solid #004370; outline-offset: 2px; }
    </style>
</head>
<body class="bg-surface min-h-screen">

@php
    $badge = [
        'disponible' => ['bg-emerald-50 text-emerald-700 border-emerald-200', 'check_circle'],
        'vendido'    => ['bg-violet-50 text-violet-700 border-violet-200',    'sell'],
        'rentado'    => ['bg-blue-50 text-blue-700 border-blue-200',          'key'],
        'reservado'  => ['bg-amber-50 text-amber-700 border-amber-200',       'bookmark'],
    ][$property->status] ?? ['bg-surface-container text-on-surface-variant border-outline-variant', 'radio_button_unchecked'];
@endphp

{{-- Navbar --}}
<nav class="fixed top-0 w-full z-50 bg-white border-b border-outline-variant shadow-sm">
    <div class="max-w-5xl mx-auto px-6 py-3 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <a href="{{ route('agent.properties.index') }}"
               class="flex items-center gap-1.5 text-sm text-on-surface-variant hover:text-primary transition font-medium">
                <span class="material-symbols-outlined text-base">arrow_back</span>
                <span class="hidden sm:inline">Mis Propiedades</span>
            </a>
            <span class="text-outline-variant hidden sm:inline">|</span>
            <p class="hidden sm:block text-sm font-medium text-on-surface truncate max-w-xs">{{ $property->title }}</p>
        </div>
        <div class="flex items-center gap-2">
            <a href="{{ route('agent.properties.edit', $property) }}"
               class="inline-flex items-center gap-1.5 bg-primary text-white px-4 py-2 rounded-xl text-sm font-semibold hover:bg-primary-container transition">
                <span class="material-symbols-outlined text-base">edit</span>
                Editar
            </a>
            <form method="POST" action="{{ route('agent.properties.destroy', $property) }}"
                  onsubmit="return confirm('¿Eliminar esta propiedad permanentemente?')">
                @csrf
                @method('DELETE')
                <button class="inline-flex items-center gap-1.5 px-4 py-2 border border-red-200 text-red-500 text-sm rounded-xl hover:bg-red-50 transition font-medium">
                    <span class="material-symbols-outlined text-base">delete</span>
                    <span class="hidden sm:inline">Eliminar</span>
                </button>
            </form>
        </div>
    </div>
</nav>

<main class="pt-20 max-w-5xl mx-auto px-4 py-8">

    @if(session('success'))
        <div class="mb-6 flex items-center gap-3 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-2xl px-5 py-3 text-sm font-medium">
            <span class="material-symbols-outlined text-base">check_circle</span>
            {{ session('success') }}
        </div>
    @endif

    {{-- Galería --}}
    @if($property->cover_image)
        <div class="relative mb-4 rounded-2xl overflow-hidden h-72 md:h-96 bg-surface-container group">
            <img id="main-img" src="{{ Storage::url($property->cover_image) }}"
                 alt="{{ $property->title }}" onclick="openLightbox()" class="w-full h-full object-cover cursor-zoom-in">
            @if($property->images && count($property->images))
                <button type="button" onclick="navGallery(-1)"
                        class="absolute left-3 top-1/2 -translate-y-1/2 flex items-center justify-center w-10 h-10 rounded-full bg-black/40 text-white hover:bg-black/60 transition">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <button type="button" onclick="navGallery(1)"
                        class="absolute right-3 top-1/2 -translate-y-1/2 flex items-center justify-center w-10 h-10 rounded-full bg-black/40 text-white hover:bg-black/60 transition">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            @endif
        </div>
        @if($property->images && count($property->images))
            <div class="flex gap-2 mb-8 overflow-x-auto pb-1">
                <img src="{{ Storage::url($property->cover_image) }}"
                     class="thumb active h-16 w-24 flex-shrink-0 rounded-xl object-cover"
                     onclick="setMain(this, 0)">
                @foreach($property->images as $img)
                    <img src="{{ Storage::url($img) }}"
                         class="thumb h-16 w-24 flex-shrink-0 rounded-xl object-cover"
                         onclick="setMain(this, {{ $loop->index + 1 }})">
                @endforeach
            </div>
        @else
            <div class="mb-8"></div>
        @endif
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        {{-- Columna principal --}}
        <div class="lg:col-span-2 space-y-5">

            {{-- Header --}}
            <div class="bg-white rounded-2xl border border-outline-variant/50 shadow-sm p-6">
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="inline-flex items-center gap-1 text-xs font-semibold px-2.5 py-1 rounded-full border {{ $badge[0] }}">
                        <span class="material-symbols-outlined" style="font-size:13px">{{ $badge[1] }}</span>
                        {{ $property->getStatusLabel() }}
                    </span>
                    <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-primary/10 text-primary border border-primary/20">
                        {{ $property->getTypeLabel() }}
                    </span>
                    <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-secondary/10 text-secondary border border-secondary/20">
                        {{ $property->getOperationLabel() }}
                    </span>
                    @if($property->is_featured)
                        <span class="inline-flex items-center gap-1 text-xs font-semibold px-2.5 py-1 rounded-full bg-amber-50 text-amber-700 border border-amber-200">
                            <span class="material-symbols-outlined" style="font-size:13px">star</span>
                            Destacada
                        </span>
                    @endif
                    @if(!$property->is_active)
                        <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-surface-container text-on-surface-variant border border-outline-variant">Inactiva</span>
                    @endif
                </div>

                <h2 class="font-heading text-xl md:text-2xl font-semibold text-on-surface mb-2">{{ $property->title }}</h2>

                @if($property->city || $property->address)
                    <div class="flex items-center gap-2 mb-4">
                        <span class="material-symbols-outlined text-outline text-base">location_on</span>
                        <p class="text-sm text-on-surface-variant">
                            {{ $property->address ? $property->address.', ' : '' }}{{ $property->city }}{{ $property->state ? ', '.$property->state : '' }}
                        </p>
                        @if($property->maps_url)
                            <a href="{{ $property->maps_url }}" target="_blank" rel="noopener"
                               class="inline-flex items-center gap-1 text-xs font-semibold text-white bg-emerald-500 hover:bg-emerald-600 px-2.5 py-1 rounded-full transition flex-shrink-0">
                                <span class="material-symbols-outlined" style="font-size:13px">open_in_new</span>
                                Maps
                            </a>
                        @endif
                    </div>
                @endif

                <p class="font-heading font-bold text-2xl text-primary">
                    {{ $property->currency }} {{ number_format($property->price, 0, '.', ',') }}
                    @if($property->isRental())
                        <span class="text-sm font-body font-normal text-on-surface-variant">/ {{ $property->operation_type === 'renta_vacacional' ? 'noche' : 'mes' }}</span>
                    @endif
                </p>
            </div>

            {{-- Características --}}
            @php
                $chars = collect([
                    $property->bedrooms !== null    ? ['bed',           $property->bedrooms,                   'Recámaras'] : null,
                    $property->bathrooms !== null   ? ['shower',        $property->bathrooms,                  'Baños']     : null,
                    $property->parking_spaces !== null ? ['directions_car', $property->parking_spaces,         'Estac.']    : null,
                    $property->area                 ? ['square_foot',   number_format($property->area, 0).' m²', 'Const.']  : null,
                    $property->land_area            ? ['landscape',     number_format($property->land_area, 0).' m²', 'Terreno'] : null,
                    $property->year_built           ? ['calendar_today',$property->year_built,                 'Año construido'] : null,
                ])->filter();
            @endphp
            @if($chars->isNotEmpty())
                <div class="bg-white rounded-2xl border border-outline-variant/50 shadow-sm p-6">
                    <h3 class="font-heading text-sm font-semibold text-on-surface mb-4">Características</h3>
                    <div class="grid grid-cols-3 sm:grid-cols-4 gap-3">
                        @foreach($chars as $char)
                            <div class="flex flex-col items-center text-center p-3 bg-surface-container-low rounded-xl">
                                <span class="material-symbols-outlined text-primary mb-1">{{ $char[0] }}</span>
                                <p class="font-heading font-bold text-on-surface text-base">{{ $char[1] }}</p>
                                <p class="text-xs text-on-surface-variant mt-0.5">{{ $char[2] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- Descripción --}}
            @if($property->description)
                <div class="bg-white rounded-2xl border border-outline-variant/50 shadow-sm p-6">
                    <h3 class="font-heading text-sm font-semibold text-on-surface mb-3">Descripción</h3>
                    <p class="text-sm text-on-surface-variant leading-relaxed whitespace-pre-line">{{ $property->description }}</p>
                </div>
            @endif

            {{-- Amenidades --}}
            @if($property->features && count($property->features))
                <div class="bg-white rounded-2xl border border-outline-variant/50 shadow-sm p-6">
                    <h3 class="font-heading text-sm font-semibold text-on-surface mb-3">Amenidades</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($property->features as $feat)
                            <span class="inline-flex items-center gap-1 text-xs bg-primary/10 text-primary px-3 py-1.5 rounded-full font-medium">
                                <span class="material-symbols-outlined" style="font-size:13px">check</span>
                                {{ $feat }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- Preventa --}}
            @if($property->isPresale() && ($property->delivery_date || $property->construction_progress !== null))
                <div class="bg-white rounded-2xl border border-outline-variant/50 shadow-sm p-6">
                    <h3 class="font-heading text-sm font-semibold text-on-surface mb-4">Detalles de Preventa</h3>
                    @if($property->delivery_date)
                        <div class="flex items-center gap-2 text-sm text-on-surface-variant mb-4">
                            <span class="material-symbols-outlined text-primary text-base">event</span>
                            Entrega estimada: <strong class="text-on-surface">{{ $property->delivery_date->format('d/m/Y') }}</strong>
                        </div>
                    @endif
                    @if($property->construction_progress !== null)
                        <div>
                            <div class="flex justify-between text-sm mb-1.5">
                                <span class="text-on-surface-variant">Avance de construcción</span>
                                <span class="font-semibold text-primary">{{ $property->construction_progress }}%</span>
                            </div>
                            @php $progress = (int) $property->construction_progress; @endphp
                            <div class="bg-surface-container rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full transition-all" style="width:<?= $progress ?>%"></div>
                            </div>
                        </div>
                    @endif
                </div>
            @endif

            {{-- Renta vacacional --}}
            @if($property->operation_type === 'renta_vacacional' && ($property->min_nights || $property->max_nights))
                <div class="bg-white rounded-2xl border border-outline-variant/50 shadow-sm p-6">
                    <h3 class="font-heading text-sm font-semibold text-on-surface mb-3">Condiciones de Renta</h3>
                    <div class="flex gap-6 text-sm text-on-surface-variant">
                        @if($property->min_nights)
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-base">nights_stay</span>
                                Mínimo: <strong class="text-on-surface">{{ $property->min_nights }} noches</strong>
                            </div>
                        @endif
                        @if($property->max_nights)
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-base">date_range</span>
                                Máximo: <strong class="text-on-surface">{{ $property->max_nights }} noches</strong>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

        </div>

        {{-- Sidebar --}}
        <div class="space-y-4">

            @if($property->notes)
                <div class="bg-amber-50 border border-amber-200 rounded-2xl p-4">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="material-symbols-outlined text-amber-600 text-base">sticky_note_2</span>
                        <h3 class="font-heading text-sm font-semibold text-amber-800">Notas Internas</h3>
                    </div>
                    <p class="text-sm text-amber-700 whitespace-pre-line leading-relaxed">{{ $property->notes }}</p>
                </div>
            @endif

            <div class="bg-white rounded-2xl border border-outline-variant/50 shadow-sm p-4 space-y-2.5">
                <h3 class="font-heading text-xs font-semibold text-on-surface-variant uppercase tracking-wider mb-3">Información</h3>
                <div class="flex items-center gap-2 text-sm text-on-surface-variant">
                    <span class="material-symbols-outlined text-outline" style="font-size:16px">tag</span>
                    ID: <span class="font-medium text-on-surface">#{{ $property->id }}</span>
                </div>
                <div class="flex items-center gap-2 text-sm text-on-surface-variant">
                    <span class="material-symbols-outlined text-outline" style="font-size:16px">schedule</span>
                    Publicada: <span class="font-medium text-on-surface">{{ $property->created_at->format('d/m/Y') }}</span>
                </div>
                <div class="flex items-center gap-2 text-sm text-on-surface-variant">
                    <span class="material-symbols-outlined text-outline" style="font-size:16px">update</span>
                    Actualizada: <span class="font-medium text-on-surface">{{ $property->updated_at->format('d/m/Y') }}</span>
                </div>
            </div>

            <a href="{{ route('agent.properties.edit', $property) }}"
               class="flex items-center justify-center gap-2 w-full bg-primary text-white py-3 rounded-2xl font-semibold text-sm hover:bg-primary-container transition shadow-sm shadow-primary/20">
                <span class="material-symbols-outlined text-base">edit</span>
                Editar propiedad
            </a>

        </div>
    </div>
</main>

{{-- Lightbox --}}
@if($property->cover_image)
    <div id="lightbox" class="fixed inset-0 z-50 hidden bg-black/90 items-center justify-center">
        <button type="button" onclick="closeLightbox()"
                class="absolute top-4 right-4 flex items-center justify-center w-11 h-11 rounded-full bg-white/10 text-white hover:bg-white/20 transition">
            <span class="material-symbols-outlined">close</span>
        </button>

        @if($property->images && count($property->images))
            <button type="button" onclick="navGallery(-1)"
                    class="absolute left-3 md:left-6 top-1/2 -translate-y-1/2 flex items-center justify-center w-11 h-11 rounded-full bg-white/10 text-white hover:bg-white/20 transition">
                <span class="material-symbols-outlined">chevron_left</span>
            </button>
            <button type="button" onclick="navGallery(1)"
                    class="absolute right-3 md:right-6 top-1/2 -translate-y-1/2 flex items-center justify-center w-11 h-11 rounded-full bg-white/10 text-white hover:bg-white/20 transition">
                <span class="material-symbols-outlined">chevron_right</span>
            </button>
            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 text-white text-sm font-medium bg-black/40 px-3 py-1 rounded-full">
                <span id="lightbox-counter"></span>
            </div>
        @endif

        <img id="lightbox-image" src="" alt="{{ $property->title }}"
             class="max-w-[92vw] max-h-[88vh] object-contain select-none">
    </div>
@endif

<script>
var galleryImages = [
    @if($property->cover_image)
        '{{ Storage::url($property->cover_image) }}',
        @foreach($property->images ?? [] as $img)
            '{{ Storage::url($img) }}',
        @endforeach
    @endif
];
var galleryIndex = 0;

function setMain(el, index) {
    galleryIndex = index;
    document.getElementById('main-img').src = galleryImages[galleryIndex];
    document.querySelectorAll('.thumb').forEach(function(t) { t.classList.remove('active'); });
    el.classList.add('active');
    updateLightboxImage();
}

function navGallery(direction) {
    if (!galleryImages.length) return;
    galleryIndex = (galleryIndex + direction + galleryImages.length) % galleryImages.length;
    document.getElementById('main-img').src = galleryImages[galleryIndex];
    document.querySelectorAll('.thumb').forEach(function(t, i) {
        t.classList.toggle('active', i === galleryIndex);
    });
    updateLightboxImage();
}

var lightbox = document.getElementById('lightbox');

function updateLightboxImage() {
    if (!lightbox || lightbox.classList.contains('hidden')) return;
    document.getElementById('lightbox-image').src = galleryImages[galleryIndex];
    var counter = document.getElementById('lightbox-counter');
    if (counter) counter.textContent = (galleryIndex + 1) + ' / ' + galleryImages.length;
}

function openLightbox() {
    if (!lightbox || !galleryImages.length) return;
    lightbox.classList.remove('hidden');
    lightbox.classList.add('flex');
    document.body.classList.add('overflow-hidden');
    updateLightboxImage();
}

function closeLightbox() {
    if (!lightbox) return;
    lightbox.classList.add('hidden');
    lightbox.classList.remove('flex');
    document.body.classList.remove('overflow-hidden');
}

if (lightbox) {
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) closeLightbox();
    });
}

document.addEventListener('keydown', function(e) {
    if (!lightbox || lightbox.classList.contains('hidden')) return;
    if (e.key === 'Escape') closeLightbox();
    if (e.key === 'ArrowLeft') navGallery(-1);
    if (e.key === 'ArrowRight') navGallery(1);
});
</script>
</body>
</html>
