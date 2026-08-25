<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Propiedad | Margarita Flores</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#004370',
                        'primary-dark': '#005b96',
                        surface: '#f9f9ff',
                        'on-surface': '#161c27',
                        'on-muted': '#414750',
                        border: '#c1c7d1',
                    },
                    fontFamily: {
                        heading: ['Cinzel', 'serif'],
                        body: ['Montserrat', 'sans-serif'],
                    }
                }
            }
        };
    </script>
    <style>
        * { font-family: 'Montserrat', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block; line-height: 1; vertical-align: middle;
        }
        .inp {
            display: block; width: 100%;
            border: 1.5px solid #c1c7d1; border-radius: 10px;
            padding: 10px 14px; font-size: 14px; color: #161c27;
            background: #fff; outline: none; transition: border-color .15s, box-shadow .15s;
            font-family: 'Montserrat', sans-serif;
        }
        .inp:focus { border-color: #004370; box-shadow: 0 0 0 3px rgba(0,67,112,.1); }
        .inp::placeholder { color: #a0aab4; }
        .lbl {
            display: block; font-size: 11px; font-weight: 600;
            color: #414750; text-transform: uppercase; letter-spacing: .06em;
            margin-bottom: 6px;
        }
        .card {
            background: #fff; border: 1.5px solid #e2e6f0;
            border-radius: 16px; padding: 24px;
        }
        .card-title {
            display: flex; align-items: center; gap: 10px;
            margin-bottom: 20px; padding-bottom: 14px;
            border-bottom: 1px solid #f0f2f8;
        }
        .card-icon {
            width: 34px; height: 34px; border-radius: 10px;
            background: rgba(0,67,112,.08);
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
        }
        .drop-zone {
            border: 2px dashed #c1c7d1; border-radius: 12px;
            padding: 28px 20px; text-align: center; cursor: pointer;
            transition: border-color .2s, background .2s;
        }
        .drop-zone:hover, .drop-zone.over { border-color: #004370; background: #f0f4ff; }
    </style>
</head>
<body style="background:#f4f6fb; min-height:100vh;">

{{-- Navbar --}}
<nav style="position:fixed;top:0;width:100%;z-index:50;background:#fff;border-bottom:1px solid #e2e6f0;box-shadow:0 1px 4px rgba(0,0,0,.06);">
    <div style="max-width:860px;margin:0 auto;padding:12px 24px;display:flex;align-items:center;gap:12px;">
        <a href="{{ route('agent.properties.show', $property) }}"
           style="display:flex;align-items:center;gap:6px;color:#414750;font-size:13px;font-weight:500;text-decoration:none;transition:color .15s;"
           onmouseover="this.style.color='#004370'" onmouseout="this.style.color='#414750'">
            <span class="material-symbols-outlined" style="font-size:18px;">arrow_back</span>
            Ver Propiedad
        </a>
        <span style="width:1px;height:16px;background:#e2e6f0;"></span>
        <span style="font-family:'Cinzel',serif;color:#004370;font-weight:600;font-size:13px;letter-spacing:.04em;">Editar Propiedad</span>
    </div>
</nav>

<main style="max-width:860px;margin:0 auto;padding:88px 24px 80px;">

    @if($errors->any())
    <div style="margin-bottom:20px;background:#fff5f5;border:1.5px solid #fecaca;border-radius:12px;padding:16px;display:flex;gap:12px;">
        <span class="material-symbols-outlined" style="color:#ef4444;flex-shrink:0;">error</span>
        <div>
            <p style="font-weight:600;font-size:13px;color:#b91c1c;margin-bottom:6px;">Corrige los siguientes errores:</p>
            <ul style="font-size:13px;color:#dc2626;list-style:disc;padding-left:16px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    <form method="POST" action="{{ route('agent.properties.update', $property) }}" enctype="multipart/form-data" id="property-form">
        @csrf
        @method('PUT')

        <div style="display:flex;flex-direction:column;gap:20px;">

        {{-- 1. Clasificación --}}
        <div class="card">
            <div class="card-title">
                <div class="card-icon"><span class="material-symbols-outlined" style="color:#004370;font-size:18px;">category</span></div>
                <span style="font-family:'Cinzel',serif;font-weight:600;font-size:13px;color:#161c27;letter-spacing:.04em;">Clasificación</span>
            </div>
            <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px;">
                <div>
                    <label class="lbl">Operación <span style="color:#ef4444;text-transform:none;">*</span></label>
                    <select name="operation_type" id="operation_type" required class="inp">
                        @foreach($operationLabels as $val => $label)
                            <option value="{{ $val }}" @selected(old('operation_type', $property->operation_type) === $val)>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="lbl">Tipo de Propiedad <span style="color:#ef4444;text-transform:none;">*</span></label>
                    <select name="type" id="type" required class="inp">
                        @foreach($typeLabels as $val => $label)
                            <option value="{{ $val }}" @selected(old('type', $property->type) === $val)>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="lbl">Estado</label>
                    <select name="status" class="inp">
                        @foreach($statusLabels as $val => $label)
                            <option value="{{ $val }}" @selected(old('status', $property->status) === $val)>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @php $isFeatured = old('is_featured', $property->is_featured); @endphp
            <label style="display:flex;align-items:center;gap:10px;margin-top:16px;cursor:pointer;width:fit-content;">
                <div style="position:relative;">
                    <input type="checkbox" name="is_featured" id="is_featured" value="1" @checked($isFeatured)
                           style="position:absolute;opacity:0;width:0;height:0;" onchange="toggleSwitch(this)">
                    <div id="switch-track" data-on="{{ $isFeatured ? '1' : '0' }}" style="width:40px;height:22px;border-radius:99px;background:#c1c7d1;transition:background .2s;"></div>
                    <div id="switch-thumb" style="position:absolute;top:3px;left:3px;width:16px;height:16px;border-radius:50%;background:#fff;box-shadow:0 1px 3px rgba(0,0,0,.25);transition:left .2s;"></div>
                </div>
                <span style="font-size:13px;font-weight:500;color:#161c27;">Marcar como Propiedad Destacada</span>
            </label>
        </div>

        {{-- 2. Información General --}}
        <div class="card">
            <div class="card-title">
                <div class="card-icon"><span class="material-symbols-outlined" style="color:#004370;font-size:18px;">description</span></div>
                <span style="font-family:'Cinzel',serif;font-weight:600;font-size:13px;color:#161c27;letter-spacing:.04em;">Información General</span>
            </div>
            <div style="display:flex;flex-direction:column;gap:16px;">
                <div>
                    <label class="lbl">Título <span style="color:#ef4444;text-transform:none;">*</span></label>
                    <input type="text" name="title" value="{{ old('title', $property->title) }}" required
                           placeholder="Ej. Casa en Marina con vista al mar" class="inp">
                </div>
                <div>
                    <label class="lbl">Descripción</label>
                    <textarea name="description" rows="4"
                              placeholder="Describe la propiedad..."
                              class="inp" style="resize:none;">{{ old('description', $property->description) }}</textarea>
                </div>
                <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px;">
                    <div>
                        <label class="lbl">Precio <span style="color:#ef4444;text-transform:none;">*</span></label>
                        <input type="number" name="price" value="{{ old('price', $property->price) }}" required min="0" step="0.01" class="inp">
                    </div>
                    <div>
                        <label class="lbl">Moneda</label>
                        <select name="currency" class="inp">
                            <option value="USD" @selected(old('currency', $property->currency) === 'USD')>USD — Dólares</option>
                            <option value="MXN" @selected(old('currency', $property->currency) === 'MXN')>MXN — Pesos</option>
                        </select>
                    </div>
                    <div>
                        <label class="lbl">Año de Construcción</label>
                        <input type="number" name="year_built" value="{{ old('year_built', $property->year_built) }}"
                               min="1900" max="{{ date('Y') + 5 }}" placeholder="{{ date('Y') }}" class="inp">
                    </div>
                </div>
            </div>
        </div>

        {{-- 3. Características --}}
        <div class="card">
            <div class="card-title">
                <div class="card-icon"><span class="material-symbols-outlined" style="color:#004370;font-size:18px;">home</span></div>
                <span style="font-family:'Cinzel',serif;font-weight:600;font-size:13px;color:#161c27;letter-spacing:.04em;">Características Físicas</span>
            </div>
            <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-bottom:20px;">
                <div id="bedrooms-field">
                    <label class="lbl">🛏 Recámaras</label>
                    <input type="number" name="bedrooms" value="{{ old('bedrooms', $property->bedrooms) }}" min="0" class="inp">
                </div>
                <div id="bathrooms-field">
                    <label class="lbl">🚿 Baños</label>
                    <input type="number" name="bathrooms" value="{{ old('bathrooms', $property->bathrooms) }}" min="0" step="0.5" class="inp">
                </div>
                <div>
                    <label class="lbl">🚗 Estacionamientos</label>
                    <input type="number" name="parking_spaces" value="{{ old('parking_spaces', $property->parking_spaces) }}" min="0" class="inp">
                </div>
                <div>
                    <label class="lbl" style="display:flex;align-items:center;gap:4px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="3" y="3" width="14" height="14" rx="0.5"/>
                            <line x1="3" y1="20.5" x2="17" y2="20.5"/><polyline points="5,19 3,20.5 5,22"/><polyline points="15,19 17,20.5 15,22"/>
                            <line x1="20.5" y1="3" x2="20.5" y2="17"/><polyline points="19,5 20.5,3 22,5"/><polyline points="19,15 20.5,17 22,15"/>
                            <text x="5.5" y="13.5" font-size="6.5" font-family="serif" font-weight="bold" stroke="none" fill="currentColor">m²</text>
                        </svg>
                        m² Construcción
                    </label>
                    <input type="number" name="area" value="{{ old('area', $property->area) }}" min="0" step="0.01" class="inp">
                </div>
                <div style="grid-column:span 2;">
                    <label class="lbl">🌿 m² Terreno</label>
                    <input type="number" name="land_area" value="{{ old('land_area', $property->land_area) }}" min="0" step="0.01" class="inp">
                </div>
            </div>

            <div>
                <label class="lbl">Amenidades</label>
                <div id="features-container" style="display:flex;flex-wrap:wrap;gap:8px;margin-bottom:10px;min-height:32px;">
                    @foreach(old('features', $property->features ?? []) as $feat)
                    <div class="feature-tag" style="display:flex;align-items:center;gap:6px;background:rgba(0,67,112,.08);color:#004370;font-size:12px;font-weight:600;padding:5px 12px;border-radius:99px;">
                        <input type="hidden" name="features[]" value="{{ $feat }}">
                        <span>{{ $feat }}</span>
                        <button type="button" onclick="this.parentElement.remove()" style="display:flex;background:none;border:none;cursor:pointer;color:#004370;padding:0;" onmouseover="this.style.color='#ef4444'" onmouseout="this.style.color='#004370'">
                            <span class="material-symbols-outlined" style="font-size:13px;">close</span>
                        </button>
                    </div>
                    @endforeach
                </div>
                <div style="display:flex;gap:8px;">
                    <input type="text" id="feature-input" placeholder="Ej. Alberca, Terraza, A/C…"
                           class="inp" style="flex:1;">
                    <button type="button" onclick="addFeature()"
                            style="display:flex;align-items:center;gap:6px;padding:10px 16px;background:#f0f4ff;color:#004370;border:1.5px solid #c1c7d1;border-radius:10px;font-size:13px;font-weight:600;cursor:pointer;white-space:nowrap;"
                            onmouseover="this.style.background='rgba(0,67,112,.12)'" onmouseout="this.style.background='#f0f4ff'">
                        <span class="material-symbols-outlined" style="font-size:16px;">add</span> Agregar
                    </button>
                </div>
            </div>
        </div>

        {{-- 4. Ubicación --}}
        <div class="card">
            <div class="card-title">
                <div class="card-icon"><span class="material-symbols-outlined" style="color:#004370;font-size:18px;">location_on</span></div>
                <span style="font-family:'Cinzel',serif;font-weight:600;font-size:13px;color:#161c27;letter-spacing:.04em;">Ubicación</span>
            </div>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <div style="grid-column:span 2;">
                    <label class="lbl">Dirección</label>
                    <input type="text" name="address" value="{{ old('address', $property->address) }}"
                           placeholder="Calle, número, colonia..." class="inp">
                </div>
                <div>
                    <label class="lbl">Ciudad</label>
                    <input type="text" name="city" value="{{ old('city', $property->city) }}" class="inp">
                </div>
                <div>
                    <label class="lbl">Estado</label>
                    <input type="text" name="state" value="{{ old('state', $property->state) }}" class="inp">
                </div>
                <div style="grid-column:span 2;">
                    <label class="lbl">Link de Google Maps</label>
                    <div style="position:relative;">
                        <span class="material-symbols-outlined" style="position:absolute;left:12px;top:50%;transform:translateY(-50%);color:#a0aab4;font-size:18px;pointer-events:none;">map</span>
                        <input type="url" name="maps_url" value="{{ old('maps_url', $property->maps_url) }}"
                               placeholder="https://maps.google.com/..."
                               class="inp" style="padding-left:40px;">
                    </div>
                    <p style="font-size:11px;color:#a0aab4;margin-top:5px;">
                        Abre Google Maps → busca la propiedad → "Compartir" → "Copiar enlace" → pégalo aquí.
                    </p>
                </div>
            </div>
        </div>

        {{-- 5. Imágenes --}}
        <div class="card">
            <div class="card-title">
                <div class="card-icon"><span class="material-symbols-outlined" style="color:#004370;font-size:18px;">photo_library</span></div>
                <span style="font-family:'Cinzel',serif;font-weight:600;font-size:13px;color:#161c27;letter-spacing:.04em;">Imágenes</span>
            </div>

            {{-- Portada --}}
            <p style="font-size:11px;font-weight:700;color:#414750;text-transform:uppercase;letter-spacing:.06em;margin-bottom:8px;">
                Foto de portada
            </p>
            <div id="cover-drop" class="drop-zone" onclick="document.getElementById('cover-input').click()">
                <div id="cover-placeholder" @if($property->cover_image) style="display:none;" @endif>
                    <span class="material-symbols-outlined" style="font-size:40px;color:#c1c7d1;display:block;margin-bottom:8px;">add_photo_alternate</span>
                    <p style="font-size:14px;font-weight:600;color:#414750;margin:0 0 4px;">Arrastra aquí o haz clic para seleccionar</p>
                    <p style="font-size:12px;color:#a0aab4;margin:0;">JPG, PNG, WEBP · Máx. 5 MB</p>
                </div>
                <div id="cover-preview-wrap" @if(!$property->cover_image) style="display:none;" @endif>
                    <img id="cover-preview-img"
                         style="max-height:180px;border-radius:10px;object-fit:cover;margin:0 auto;display:block;"
                         src="{{ $property->cover_image ? Storage::url($property->cover_image) : '' }}" alt="">
                    <button type="button" onclick="event.stopPropagation();removeCover()"
                            style="margin:10px auto 0;display:flex;align-items:center;gap:4px;background:none;border:none;cursor:pointer;color:#ef4444;font-size:12px;font-weight:600;">
                        <span class="material-symbols-outlined" style="font-size:15px;">delete</span>
                        {{ $property->cover_image ? 'Reemplazar portada' : 'Quitar portada' }}
                    </button>
                </div>
            </div>
            <input type="file" id="cover-input" name="cover_image" accept="image/*" style="display:none;">







            {{-- Galería --}}
            <p style="font-size:11px;font-weight:700;color:#414750;text-transform:uppercase;letter-spacing:.06em;margin:20px 0 8px;">
                Galería de fotos <span style="font-weight:400;text-transform:none;color:#a0aab4;">— arrastra para ordenar</span>
            </p>
            <div id="gallery-drop" class="drop-zone" onclick="document.getElementById('gallery-trigger').click()">
                <span class="material-symbols-outlined" style="font-size:40px;color:#c1c7d1;display:block;margin-bottom:8px;">collections</span>
                <p id="gallery-label" style="font-size:14px;font-weight:600;color:#414750;margin:0 0 4px;">Arrastra fotos o haz clic para agregar</p>
                <p style="font-size:12px;color:#a0aab4;margin:0;">Puedes agregar una por una o varias al mismo tiempo</p>
            </div>
            <input type="file" id="gallery-trigger" accept="image/*" multiple style="display:none;">
            <input type="file" id="gallery-input" name="images[]" accept="image/*" multiple style="display:none;">
            <div id="remove-images-container"></div>
            <div id="order-container"></div>
            <div id="gallery-grid" style="display:grid;grid-template-columns:repeat(5,1fr);gap:10px;margin-top:14px;"></div>
        </div>

        {{-- 6. Preventa (condicional) --}}
        <div id="preventa-section" class="card" style="display:none;">
            <div class="card-title">
                <div class="card-icon" style="background:rgba(217,119,6,.08);"><span class="material-symbols-outlined" style="color:#d97706;font-size:18px;">construction</span></div>
                <span style="font-family:'Cinzel',serif;font-weight:600;font-size:13px;color:#161c27;letter-spacing:.04em;">Detalles de Preventa</span>
            </div>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <div>
                    <label class="lbl">Fecha estimada de entrega</label>
                    <input type="date" name="delivery_date"
                           value="{{ old('delivery_date', $property->delivery_date?->format('Y-m-d')) }}"
                           class="inp">
                </div>
                <div>
                    <label class="lbl">Avance de construcción (%)</label>
                    <input type="number" name="construction_progress"
                           value="{{ old('construction_progress', $property->construction_progress) }}"
                           min="0" max="100" placeholder="0–100" class="inp">
                </div>
            </div>
        </div>

        {{-- 7. Vacacional (condicional) --}}
        <div id="vacacional-section" class="card" style="display:none;">
            <div class="card-title">
                <div class="card-icon" style="background:rgba(14,116,144,.08);"><span class="material-symbols-outlined" style="color:#0e7490;font-size:18px;">beach_access</span></div>
                <span style="font-family:'Cinzel',serif;font-weight:600;font-size:13px;color:#161c27;letter-spacing:.04em;">Renta Vacacional</span>
            </div>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <div>
                    <label class="lbl">Noches mínimas</label>
                    <input type="number" name="min_nights" value="{{ old('min_nights', $property->min_nights) }}" min="1" placeholder="2" class="inp">
                </div>
                <div>
                    <label class="lbl">Noches máximas</label>
                    <input type="number" name="max_nights" value="{{ old('max_nights', $property->max_nights) }}" min="1" placeholder="30" class="inp">
                </div>
            </div>
        </div>

        {{-- 8. Notas --}}
        <div class="card">
            <div class="card-title">
                <div class="card-icon"><span class="material-symbols-outlined" style="color:#004370;font-size:18px;">sticky_note_2</span></div>
                <span style="font-family:'Cinzel',serif;font-weight:600;font-size:13px;color:#161c27;letter-spacing:.04em;">Notas Internas</span>
            </div>
            <textarea name="notes" rows="3"
                      placeholder="Notas privadas, recordatorios, datos de contacto..."
                      class="inp" style="resize:none;">{{ old('notes', $property->notes) }}</textarea>
        </div>

        {{-- Botones --}}
        <div style="display:flex;justify-content:flex-end;gap:12px;padding-top:4px;">
            <a href="{{ route('agent.properties.show', $property) }}"
               style="padding:11px 24px;border:1.5px solid #c1c7d1;color:#414750;border-radius:10px;font-size:14px;font-weight:500;text-decoration:none;transition:background .15s;"
               onmouseover="this.style.background='#f0f4ff'" onmouseout="this.style.background='transparent'">
                Cancelar
            </a>
            <button type="submit"
                    style="display:flex;align-items:center;gap:8px;padding:11px 28px;background:#004370;color:#fff;border:none;border-radius:10px;font-size:14px;font-weight:700;cursor:pointer;box-shadow:0 2px 8px rgba(0,67,112,.25);transition:background .15s;font-family:'Montserrat',sans-serif;"
                    onmouseover="this.style.background='#005b96'" onmouseout="this.style.background='#004370'">
                <span class="material-symbols-outlined" style="font-size:18px;">save</span>
                Guardar Cambios
            </button>
        </div>

        </div>{{-- end flex column --}}
    </form>
</main>

<script>
// ── Toggle switch ────────────────────────────────────────
function toggleSwitch(cb) {
    document.getElementById('switch-track').style.background = cb.checked ? '#004370' : '#c1c7d1';
    document.getElementById('switch-thumb').style.left = cb.checked ? '21px' : '3px';
}

// ── Secciones condicionales ──────────────────────────────
var opSel = document.getElementById('operation_type');
function toggleSections() {
    var v = opSel.value;
    document.getElementById('preventa-section').style.display   = v === 'preventa'        ? '' : 'none';
    document.getElementById('vacacional-section').style.display = v === 'renta_vacacional' ? '' : 'none';
}
opSel.addEventListener('change', toggleSections); toggleSections();

var typeSel = document.getElementById('type');
function toggleType() {
    var t = typeSel.value === 'terreno';
    ['bedrooms-field','bathrooms-field'].forEach(function(id){ document.getElementById(id).style.opacity = t ? '.35' : '1'; });
}
typeSel.addEventListener('change', toggleType); toggleType();

// ── Amenidades ───────────────────────────────────────────
function addFeature() {
    var inp = document.getElementById('feature-input');
    var v   = inp.value.trim(); if (!v) return;
    var c   = document.getElementById('features-container');
    var tag = document.createElement('div');
    tag.className = 'feature-tag';
    tag.style = 'display:flex;align-items:center;gap:6px;background:rgba(0,67,112,.08);color:#004370;font-size:12px;font-weight:600;padding:5px 12px;border-radius:99px;';
    tag.innerHTML = '<input type="hidden" name="features[]" value="' + v.replace(/"/g,'&quot;') + '"><span>' + v + '</span>'
        + '<button type="button" onclick="this.parentElement.remove()" style="display:flex;background:none;border:none;cursor:pointer;color:#004370;padding:0;" onmouseover="this.style.color=\'#ef4444\'" onmouseout="this.style.color=\'#004370\'">'
        + '<span class="material-symbols-outlined" style="font-size:13px;">close</span></button>';
    c.appendChild(tag); inp.value = ''; inp.focus();
}
document.getElementById('feature-input').addEventListener('keydown', function(e){ if(e.key==='Enter'){e.preventDefault();addFeature();} });

// ── Portada ──────────────────────────────────────────────
var coverInput = document.getElementById('cover-input');
var coverDrop  = document.getElementById('cover-drop');

function showCover(src) {
    document.getElementById('cover-preview-img').src = src;
    document.getElementById('cover-placeholder').style.display = 'none';
    document.getElementById('cover-preview-wrap').style.display = '';
}
function removeCover() {
    coverInput.value = '';
    document.getElementById('cover-preview-img').src = '';
    document.getElementById('cover-placeholder').style.display = '';
    document.getElementById('cover-preview-wrap').style.display = 'none';
}
coverInput.addEventListener('change', function(){
    if(this.files[0]){ var r=new FileReader(); r.onload=function(e){showCover(e.target.result);}; r.readAsDataURL(this.files[0]); }
});
coverDrop.addEventListener('dragover',  function(e){ e.preventDefault(); this.classList.add('over'); });
coverDrop.addEventListener('dragleave', function(){  this.classList.remove('over'); });
coverDrop.addEventListener('drop',      function(e){ e.preventDefault(); this.classList.remove('over');
    var f=e.dataTransfer.files[0]; if(f&&f.type.startsWith('image/')){
        var dt=new DataTransfer(); dt.items.add(f); coverInput.files=dt.files;
        var r=new FileReader(); r.onload=function(ev){showCover(ev.target.result);}; r.readAsDataURL(f);
    }
});

// ── Galería (fotos existentes + nuevas, con reordenamiento) ──
var galleryDrop      = document.getElementById('gallery-drop');
var galleryTrigger   = document.getElementById('gallery-trigger');
var galleryInput     = document.getElementById('gallery-input');
var galleryGrid      = document.getElementById('gallery-grid');
var removeContainer  = document.getElementById('remove-images-container');
var orderContainer   = document.getElementById('order-container');

var existingImageUrls = @json(collect($property->images ?? [])->mapWithKeys(fn($p) => [$p => Storage::url($p)]));

var galleryItems = (@json(array_values($property->images ?? []))).map(function(path){
    return { type: 'existing', path: path };
});

var dragSrcIdx = null;

function renderGallery() {
    galleryGrid.innerHTML = '';
    galleryItems.forEach(function(it, i) {
        var url  = it.type === 'existing' ? existingImageUrls[it.path] : URL.createObjectURL(it.file);
        var item = document.createElement('div');
        item.draggable = true;
        item.style = 'position:relative;border-radius:10px;overflow:hidden;aspect-ratio:1;background:#e8eeff;cursor:grab;';
        item.innerHTML = '<img src="'+url+'" style="width:100%;height:100%;object-fit:cover;pointer-events:none;">'
            +'<span style="position:absolute;top:4px;left:4px;min-width:20px;height:20px;padding:0 5px;background:rgba(0,67,112,.85);color:#fff;border-radius:99px;font-size:11px;font-weight:700;display:flex;align-items:center;justify-content:center;">'+(i+1)+'</span>'
            +'<span class="material-symbols-outlined" style="position:absolute;bottom:4px;left:4px;font-size:16px;color:#fff;background:rgba(0,0,0,.45);border-radius:6px;padding:1px;">drag_indicator</span>'
            +'<button type="button" onclick="removeGalleryItem('+i+')" style="position:absolute;top:4px;right:4px;width:22px;height:22px;background:rgba(0,0,0,.55);border:none;border-radius:50%;cursor:pointer;display:flex;align-items:center;justify-content:center;" onmouseover="this.style.background=\'#ef4444\'" onmouseout="this.style.background=\'rgba(0,0,0,.55)\'">'
            +'<span class="material-symbols-outlined" style="font-size:13px;color:#fff;">close</span></button>';
        item.addEventListener('dragstart', function(e){ dragSrcIdx = i; e.dataTransfer.effectAllowed = 'move'; setTimeout(function(){ item.style.opacity = '.4'; }, 0); });
        item.addEventListener('dragend',   function(){ item.style.opacity = '1'; dragSrcIdx = null; });
        item.addEventListener('dragover',  function(e){ e.preventDefault(); });
        item.addEventListener('drop',      function(e){
            e.preventDefault();
            if (dragSrcIdx === null || dragSrcIdx === i) return;
            var moved = galleryItems.splice(dragSrcIdx, 1)[0];
            galleryItems.splice(i, 0, moved);
            renderGallery();
        });
        galleryGrid.appendChild(item);
    });
    syncGalleryInputs();
}

function syncGalleryInputs() {
    var sync = new DataTransfer();
    galleryItems.forEach(function(it){ if (it.type === 'new') sync.items.add(it.file); });
    galleryInput.files = sync.files;

    orderContainer.innerHTML = '';
    var newIdx = 0;
    galleryItems.forEach(function(it){
        var input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'image_order[]';
        input.value = it.type === 'existing' ? ('existing:' + it.path) : ('new:' + (newIdx++));
        orderContainer.appendChild(input);
    });

    document.getElementById('gallery-label').textContent = galleryItems.length
        ? galleryItems.length+' foto'+(galleryItems.length===1?'':'s')+' · arrastra para ordenar o haz clic para agregar más'
        : 'Arrastra fotos o haz clic para agregar';
}

function addGalleryFiles(files) {
    Array.from(files).forEach(function(f){
        if(!f.type.startsWith('image/')) return;
        var dup = galleryItems.some(function(it){ return it.type === 'new' && it.file.name === f.name && it.file.size === f.size; });
        if(!dup) galleryItems.push({ type: 'new', file: f });
    });
    renderGallery();
}

function removeGalleryItem(idx) {
    var it = galleryItems[idx];
    if (it.type === 'existing') {
        var input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'remove_images[]';
        input.value = it.path;
        removeContainer.appendChild(input);
    }
    galleryItems.splice(idx, 1);
    renderGallery();
}

galleryTrigger.addEventListener('change', function(){ addGalleryFiles(this.files); this.value=''; });
galleryDrop.addEventListener('dragover',  function(e){ e.preventDefault(); this.classList.add('over'); });
galleryDrop.addEventListener('dragleave', function(){  this.classList.remove('over'); });
galleryDrop.addEventListener('drop',      function(e){ e.preventDefault(); this.classList.remove('over'); addGalleryFiles(e.dataTransfer.files); });

renderGallery();
</script>
</body>
</html>
