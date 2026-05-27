<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Ubicación</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <main>
        <header class="top-bar">
            <h1>Registrar Nueva Área</h1>
            <a href="{{ route('ubicaciones.index') }}" class="btn btn-gray">Cancelar y Volver</a>
        </header>

        <form action="{{ route('ubicaciones.store') }}" method="POST" class="form-card">
            @csrf 
            <div class="form-group">
                <label>Nombre del Área (Ej. Laboratorio A):</label>
                <input type="text" name="nombre_area" required>
            </div>
            
            <div class="form-group">
                <label>Capacidad Máxima (Número de equipos):</label>
                <input type="number" name="capacidad" required>
            </div>

            <div class="acciones">
                <button type="submit" class="btn btn-primary" style="width: 100%;">Guardar Área</button>
            </div>
        </form>
    </main>
</body>
</html>