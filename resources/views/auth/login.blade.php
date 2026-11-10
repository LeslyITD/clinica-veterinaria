<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Clínica veterinaria</title>
    <style> 
        body {
            front-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-item: center;
            height: 100vh;
            margin: 0;
        }

        .login-box {
            background: white;
            padding: 30px;
            border-radius; 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 300px;
            text-align: center;
            border-top: 5px solid #40E0D0; 
        }

        .btn-ingresar {
            background-color: #8B0000;
            color: white;
            border: none;
            padding: 10px 20px;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 15px;
            font-weight: bold;
        }

        .btn-ingresar:hover { background-color: #660000; }
        select {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Clínica Veterinaria</h2>
        <p>Inicie sesión en su cuenta</p>

        <form action="/login" method="POST">
            @csrf
            <label for="rol">Seleccione su perfil:</label>
            <select name="rol" id="rol" required>
                <option value="admin">administrador</option>
                <option value="vet">veterinario</option>
                <option value="prop">propietario</option>
            </select>

            <button type="submit" class="btn-ingresar">ingresar</button>
        </form>
    </div>
</body>
</html>