<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Clínica Veterinaria</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <style>
        .login-logo {
            width: 68px;
            height: 68px;
            background: linear-gradient(135deg, #00A896, #007f71);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin: 0 auto 16px;
            box-shadow: 0 8px 20px rgba(0, 168, 150, 0.3);
        }

        .login-container {
            border-top: 5px solid #00A896;
            max-width: 420px;
        }

        .login-btn {
            width: 100%;
            padding: 13px;
            font-size: 15px;
            letter-spacing: 0.5px;
            margin-top: 8px;
            text-transform: uppercase;
            background: linear-gradient(135deg, #00A896, #007f71);
            box-shadow: 0 6px 15px rgba(0, 168, 150, 0.25);
        }

        .login-btn:hover {
            background: linear-gradient(135deg, #008f80, #00665b);
        }

        .login-footer {
            margin-top: 22px;
            padding-top: 15px;
            border-top: 1px solid #edf2f7;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body class="login-bg">
    <div class="login-container">
        <div class="login-logo">🐾</div>
        <h2>VetCare Clínica</h2>
        <p>Inicia sesión para acceder al sistema de gestión</p>

        @if(session('error'))
            <div class="alert-error">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ url('/login') }}" method="POST">
            @csrf

            <div class="input-group">
                <label for="rol">Perfil de acceso</label>
                <select name="rol" id="rol" required>
                    <option value="admin">Administrador</option>
                    <option value="vet">Veterinario</option>
                    <option value="prop">Propietario / Cliente</option>
                </select>
            </div>

            <div class="input-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" id="email" placeholder="ejemplo@correo.com" required>
            </div>

            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="••••••••" required>
            </div>

            <button type="submit" class="btn-primary login-btn">Ingresar al Sistema</button>
        </form>

        <div class="login-footer">
            Sistema de Gestión Veterinaria &copy; {{ date('Y') }}
        </div>
    </div>
</body>
</html>