<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Mantenimiento</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <main>
        <header class="top-bar">
            <h1>Editar Registro de Mantenimiento</h1>
            <a href="{{ route('mantenimientos.index') }}" class="btn btn-gray">Cancelar y Volver</a>
        </header>

            <form action="{{ route('mantenimientos.update', $mantenimiento->id_mantenimiento) }}" method="POST" class="form-card">
            @csrf 
            @method('PUT')
            
            <div class="form-group">
                <label>Equipo:</label>
                <select name="id_equipo" required>
                    @foreach($equipos as $equipo)
                        <option value="{{ $equipo->id_equipo }}" {{ $mantenimiento->id_equipo == $equipo->id_equipo ? 'selected' : '' }}>
                            {{ $equipo->marca }} - N/S: {{ $equipo->num_serie }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label>Tipo de Mantenimiento:</label>
                <input type="text" name="tipo_mantenimiento" value="{{ $mantenimiento->tipo_mantenimiento }}" required>
            </div>

            <div class="form-group">
                <label>Descripción de la Falla:</label>
                <textarea name="descripcion_falla" rows="3" required>{{ $mantenimiento->descripcion_falla }}</textarea>
            </div>

            <div class="form-group">
                <label>Acciones Realizadas:</label>
                <textarea name="acciones_realizadas" rows="3" required>{{ $mantenimiento->acciones_realizadas }}</textarea>
            </div>

            <div class="form-group">
                <label>Fecha de Mantenimiento:</label>
                <input type="date" name="fecha_mantenimiento" value="{{ $mantenimiento->fecha_mantenimiento }}" required>
            </div>

            <div class="acciones">
                <button type="submit" class="btn btn-primary" style="width: 100%;">Actualizar Registro</button>
            </div>
        </form>
    </main>
</body>
</html>