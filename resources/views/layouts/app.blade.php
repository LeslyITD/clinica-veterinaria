<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Clínica Veterinaria')</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <div class="dashboard">
        <aside class="sidebar">
            <h3>🐾 VetCare Admin</h3>
            <ul>
                <li><a href="{{ url('/administrador') }}" class="{{ request()->is('administrador') ? 'active' : '' }}">📊 Panel Principal</a></li>
                <li><a href="{{ route('propietarios.create') }}" class="{{ request()->is('propietarios*') ? 'active' : '' }}">👥 Propietarios</a></li>
                <li><a href="{{ url('/administrador/mascotas') }}" class="{{ request()->is('administrador/mascotas*') ? 'active' : '' }}">🐶 Mascotas</a></li>
                <li><a href="{{ url('/administrador/veterinarios') }}" class="{{ request()->is('administrador/veterinarios*') ? 'active' : '' }}">🩺 Veterinarios</a></li>
            </ul>
        </aside>

        <main class="main-content">
            <header class="topbar">
                <h1>@yield('header', 'Panel de Administración')</h1>
                <a href="{{ url('/') }}" class="logout-btn">Cerrar Sesión</a>
            </header>

            @if(session('success'))
                <div class="alert-success">
                    ✅ {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert-error">
                    <strong>Revisa los siguientes datos:</strong>
                    <ul style="margin: 5px 0 0 18px;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>