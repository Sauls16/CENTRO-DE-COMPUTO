<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Ubicación</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <main>
        <header class="top-bar">
            <h1>Editar Área</h1>
            <a href="{{ route('ubicaciones.index') }}" class="btn btn-gray">Cancelar y Volver</a>
        </header>

        <form action="{{ route('ubicaciones.update', $ubicacion->id_ubicacion) }}" method="POST" class="form-card">
            @csrf 
            @method('PUT')
            
            <div class="form-group">
                <label>Nombre del Área:</label>
                <input type="text" name="nombre_area" value="{{ $ubicacion->nombre_area }}" required>
            </div>
            
            <div class="form-group">
                <label>Capacidad Máxima:</label>
                <input type="number" name="capacidad" value="{{ $ubicacion->capacidad }}" required>
            </div>

            <div class="acciones">
                <button type="submit" class="btn btn-primary" style="width: 100%;">Actualizar Área</button>
            </div>
        </form>
    </main>
</body>
</html>