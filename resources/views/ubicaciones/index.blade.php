<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ubicaciones</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <main>
        <header class="top-bar">
            <h1>Áreas y Ubicaciones</h1>
            <nav>
                <a href="/" class="btn btn-gray">Volver al Inicio</a>
                <a href="{{ route('ubicaciones.create') }}" class="btn btn-primary">+ Nueva Ubicación</a>
            </nav>
        </header>

        <table>
            <thead>
                <tr>
                    <th>Nombre de Área</th>
                    <th>Capacidad Máxima</th>
                    <th style="text-align: right;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ubicaciones as $ubicacion)
                <tr>
                    <td><strong>{{ $ubicacion->nombre_area }}</strong></td>
                    <td>{{ $ubicacion->capacidad }} equipos</td>
                    <td class="acciones-tabla">
                        <a href="{{ route('ubicaciones.edit', $ubicacion->id_ubicacion) }}" class="btn btn-yellow">Editar</a>
                        <form action="{{ route('ubicaciones.destroy', $ubicacion->id_ubicacion) }}" method="POST" style="margin: 0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-red" onclick="return confirm('¿Eliminar área?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>