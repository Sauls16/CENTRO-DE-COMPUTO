<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Equipo</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <main>
        <header class="top-bar">
            <h1>Registrar Nuevo Equipo</h1>
            <a href="{{ route('equipos.index') }}" class="btn btn-gray">Cancelar y Volver</a>
        </header>

        <form action="{{ route('equipos.store') }}" method="POST" class="form-card">
    @csrf 
    
    <div class="form-group">
        <label>Tipo de Equipo:</label>
        <input type="text" name="tipo_equipo" required placeholder="Ej. Laptop, Monitor">
    </div>
    
    <div class="form-group">
        <label>Número de Serie:</label>
        <input type="text" name="num_serie" required>
    </div>
    
    <div class="form-group">
        <label>Marca:</label>
        <input type="text" name="marca" required>
    </div>

    <div class="form-group">
        <label>Modelo:</label>
        <input type="text" name="modelo" required>
    </div>

    <div class="form-group">
        <label>Características:</label>
        <textarea name="caracteristicas" required placeholder="Procesador, RAM, Disco Duro..."></textarea>
    </div>

    <div class="form-group">
        <label>Estado Inicial:</label>
        <select name="estado" required>
            <option value="Disponible">Disponible</option>
            <option value="En uso">En uso</option>
            <option value="En mantenimiento">En mantenimiento</option>
        </select>
    </div>
    <div class="form-group">
        <label>Ubicación:</label>
        <select name="ubicacion_id" required>
            <option value="">Seleccione un área...</option>
            @foreach($ubicaciones as $ubicacion)
                <option value="{{ $ubicacion->id_ubicacion }}">{{ $ubicacion->nombre_area }}</option>
            @endforeach
        </select>
    </div>

    <div class="acciones">
        <button type="submit" class="btn btn-primary" style="width: 100%;">Guardar Equipo</button>
    </div>
</form>
    </main>

</body>
</html>