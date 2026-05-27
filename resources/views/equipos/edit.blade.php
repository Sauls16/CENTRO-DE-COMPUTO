<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Equipo</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <main>
        <header class="top-bar">
            <h1>Editar Equipo</h1>
            <a href="{{ route('equipos.index') }}" class="btn btn-gray">Cancelar y Volver</a>
        </header>

        <form action="{{ route('equipos.update', $equipo->id_equipo) }}" method="POST" class="form-card">
            @csrf 
            @method('PUT')
            
            <div class="form-group">
                <label>Tipo de Equipo:</label>
                <input type="text" name="tipo_equipo" value="{{ $equipo->tipo_equipo }}" required>
            </div>
            
            <div class="form-group">
                <label>Número de Serie:</label>
                <input type="text" name="num_serie" value="{{ $equipo->num_serie }}" required>
            </div>
            
            <div class="form-group">
                <label>Marca:</label>
                <input type="text" name="marca" value="{{ $equipo->marca }}" required>
            </div>

            <div class="form-group">
                <label>Modelo:</label>
                <input type="text" name="modelo" value="{{ $equipo->modelo }}" required>
            </div>

            <div class="form-group">
                <label>Características:</label>
                <textarea name="caracteristicas" required>{{ $equipo->caracteristicas }}</textarea>
            </div>

            <div class="form-group">
                <label>Estado:</label>
                <select name="estado" required>
                    <option value="Disponible" {{ $equipo->estado == 'Disponible' ? 'selected' : '' }}>Disponible</option>
                    <option value="En uso" {{ $equipo->estado == 'En uso' ? 'selected' : '' }}>En uso</option>
                    <option value="En mantenimiento" {{ $equipo->estado == 'En mantenimiento' ? 'selected' : '' }}>En mantenimiento</option>
                    <option value="Dado de baja" {{ $equipo->estado == 'Dado de baja' ? 'selected' : '' }}>Dado de baja</option>
                </select>
            </div>

            <div class="form-group">
                <label>Ubicación:</label>
                <select name="ubicacion_id" required>
                    @foreach($ubicaciones as $ubicacion)
                        <option value="{{ $ubicacion->id_ubicacion }}" {{ $equipo->ubicacion_id == $ubicacion->id_ubicacion ? 'selected' : '' }}>
                            {{ $ubicacion->nombre_area }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="acciones">
                <button type="submit" class="btn btn-primary" style="width: 100%;">Actualizar Equipo</button>
            </div>
        </form>
    </main>
</body>
</html>