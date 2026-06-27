<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Mi Cuenta | Margarita Flores</title>
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
    </style>
</head>
<body class="bg-surface min-h-screen">

{{-- Navbar --}}
<nav class="fixed top-0 w-full z-50 bg-white border-b border-outline-variant shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <div class="w-8 h-8 rounded-lg bg-primary flex items-center justify-center">
                <span class="material-symbols-outlined text-white text-base">home_work</span>
            </div>
            <span class="font-heading text-primary font-semibold tracking-wide text-sm">Margarita Flores</span>
            <span class="text-xs bg-surface-container text-on-surface-variant px-2.5 py-0.5 rounded-full font-body font-medium">Agente</span>
        </div>
        <div class="flex items-center gap-4">
            <a href="{{ route('agent.dashboard') }}"
               class="flex items-center gap-1.5 px-3 py-1.5 text-sm text-on-surface-variant hover:text-primary transition font-medium">
                <span class="material-symbols-outlined text-base">arrow_back</span>
                <span class="hidden sm:inline">Dashboard</span>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="flex items-center gap-1.5 px-3 py-1.5 text-sm text-red-600 border border-red-200 rounded-lg hover:bg-red-50 transition font-medium">
                    <span class="material-symbols-outlined text-base">logout</span>
                    <span class="hidden sm:inline">Salir</span>
                </button>
            </form>
        </div>
    </div>
</nav>

<main class="pt-20 max-w-lg mx-auto px-4 py-12 space-y-8">

    <div>
        <h1 class="font-heading text-2xl text-primary font-semibold">Mi cuenta</h1>
        <p class="text-sm text-on-surface-variant mt-1">Actualiza tu correo y contraseña.</p>
    </div>

    {{-- Cambiar correo --}}
    <div class="bg-white rounded-2xl border border-outline-variant/50 shadow-sm p-6">
        <h2 class="font-heading text-base text-on-surface font-semibold mb-1">Correo electrónico</h2>
        <p class="text-xs text-on-surface-variant mb-5">Correo actual: <span class="font-medium text-on-surface">{{ auth()->user()->email }}</span></p>

        @if(session('success_email'))
            <div class="mb-4 flex items-center gap-2 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-xl px-4 py-3 text-sm font-medium">
                <span class="material-symbols-outlined text-base">check_circle</span>
                {{ session('success_email') }}
            </div>
        @endif

        <form method="POST" action="{{ route('agent.email.update') }}" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-on-surface mb-1.5" for="email">Nuevo correo</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                       class="w-full rounded-xl border border-outline-variant bg-surface-container-low px-4 py-2.5 text-sm text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/40 focus:border-primary transition @error('email') border-red-400 @enderror">
                @error('email')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-on-surface mb-1.5" for="email_password">Confirma tu contraseña</label>
                <input type="password" id="email_password" name="password"
                       class="w-full rounded-xl border border-outline-variant bg-surface-container-low px-4 py-2.5 text-sm text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/40 focus:border-primary transition @error('email_password') border-red-400 @enderror">
                @error('email_password')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                    class="w-full bg-primary text-white py-2.5 rounded-xl font-semibold text-sm hover:bg-primary-container transition shadow-sm shadow-primary/20">
                Actualizar correo
            </button>
        </form>
    </div>

    {{-- Cambiar contraseña --}}
    <div class="bg-white rounded-2xl border border-outline-variant/50 shadow-sm p-6">
        <h2 class="font-heading text-base text-on-surface font-semibold mb-5">Contraseña</h2>

        @if(session('success_password'))
            <div class="mb-4 flex items-center gap-2 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-xl px-4 py-3 text-sm font-medium">
                <span class="material-symbols-outlined text-base">check_circle</span>
                {{ session('success_password') }}
            </div>
        @endif

        <form method="POST" action="{{ route('agent.password.update') }}" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-on-surface mb-1.5" for="current_password">Contraseña actual</label>
                <input type="password" id="current_password" name="current_password"
                       class="w-full rounded-xl border border-outline-variant bg-surface-container-low px-4 py-2.5 text-sm text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/40 focus:border-primary transition @error('current_password') border-red-400 @enderror">
                @error('current_password')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-on-surface mb-1.5" for="password">Nueva contraseña</label>
                <input type="password" id="password" name="password"
                       class="w-full rounded-xl border border-outline-variant bg-surface-container-low px-4 py-2.5 text-sm text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/40 focus:border-primary transition @error('password') border-red-400 @enderror">
                @error('password')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-on-surface mb-1.5" for="password_confirmation">Confirmar nueva contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                       class="w-full rounded-xl border border-outline-variant bg-surface-container-low px-4 py-2.5 text-sm text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/40 focus:border-primary transition">
            </div>
            <button type="submit"
                    class="w-full bg-primary text-white py-2.5 rounded-xl font-semibold text-sm hover:bg-primary-container transition shadow-sm shadow-primary/20">
                Actualizar contraseña
            </button>
        </form>
    </div>

</main>
</body>
</html>
