<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('diablito.ico') }}">
    <title>ERP Industrial</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">

    <nav class="bg-slate-800 text-white p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">ERP Industrial v1.0</h1>
            <div class="space-x-4">
                <a href="{{ route('dashboard') }}" class="hover:text-blue-300">Dashboard</a>
                <a href="{{ route('lineas.index') }}" class="hover:text-blue-300">Monitoreo</a>
                <a href="{{ route('alertas.create') }}" class="hover:text-blue-300">Alertas</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

</body>
</html>