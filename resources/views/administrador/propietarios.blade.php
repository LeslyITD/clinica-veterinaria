<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Propietarios</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px;">
        <h2 style="color: #3B0000;;">Registrar Nuevo Propietario</h2>

        <form action="{{ route('propietarios.store') }}" method="POST">
            @csrf
            <div style="margin-bottom: 15px;">
                <label>Nombre Completo</label><br>
                <input type="text" name="nombre" required style="width: 100%; padding: 8px; margin-top: 5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label>Telédfono:</label><br>
                <input type="text" name="telefono" required style="width: 100%; padding: 8px; margin-top: 5px;">
            </div>

            <div style="margin-bottom: 15px">
                <label>Correo Eléctronico</label><br>
                <input type="email" name="email" required style="width: 100%; padding: 8px; margin-top: 5px;">
            </div>

            <button type="submit" style="background: #3B0000; color:white; padding: 10px 20px; border-radius: 4px; cursor: pointer;">Guardar Propietario</button>
        </form>
    </div>    
</body>
</html>