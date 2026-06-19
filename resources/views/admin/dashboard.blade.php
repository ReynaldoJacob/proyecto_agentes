<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Panel Admin | Margarita Flores</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <nav class="fixed top-0 w-full z-50 bg-white shadow-sm border-b border-gray-200">
        <div class="px-6 py-4 max-w-7xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">Admin Dashboard</h1>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">Cerrar Sesión</button>
            </form>
        </div>
    </nav>

    <main class="pt-20 px-6 py-8 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow">
                <p class="text-gray-600 text-sm">Total de Usuarios</p>
                <p class="text-3xl font-bold text-gray-800 mt-2">42</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <p class="text-gray-600 text-sm">Propiedades Activas</p>
                <p class="text-3xl font-bold text-gray-800 mt-2">156</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <p class="text-gray-600 text-sm">Transacciones Hoy</p>
                <p class="text-3xl font-bold text-gray-800 mt-2">8</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <p class="text-gray-600 text-sm">Ingresos Mes</p>
                <p class="text-3xl font-bold text-green-600 mt-2">$24,500</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Gestión de Usuarios</h2>
            <p class="text-gray-600">Aquí irá el panel de gestión de usuarios, propiedades y reportes.</p>
        </div>
    </main>
</body>
</html>
