<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Mantenimiento</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <main>
        <header class="top-bar">
            <h1>Registrar Mantenimiento</h1>
            <a href="{{ route('mantenimientos.index') }}" class="btn btn-gray">Cancelar y Volver</a>
        </header>

        <form action="{{ route('mantenimientos.store') }}" method="POST" class="form-card">
            @csrf 
            
            <div class="form-group">
                <label>Equipo:</label>
                <select name="id_equipo" required>
                    <option value="">Seleccione el equipo...</option>
                    @foreach($equipos as $equipo)
                        <option value="{{ $equipo->id_equipo }}">{{ $equipo->marca }} - N/S: {{ $equipo->num_serie }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label>Tipo de Mantenimiento (Preventivo/Correctivo):</label>
                <input type="text" name="tipo_mantenimiento" required>
            </div>

            <div class="form-group">
                <label>Descripción de la Falla:</label>
                <textarea name="descripcion_falla" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label>Acciones Realizadas:</label>
                <textarea name="acciones_realizadas" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label>Fecha de Mantenimiento:</label>
                <input type="date" name="fecha_mantenimiento" required>
            </div>

            <div class="acciones">
                <button type="submit" class="btn btn-primary" style="width: 100%;">Guardar Registro</button>
            </div>
        </form>
    </main>
</body>
</html>