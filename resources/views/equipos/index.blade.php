<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario de Equipos</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <main>
        <header class="top-bar">
            <h1>Inventario de Equipos</h1>
            <nav>
                <a href="/" class="btn btn-gray">Volver al Inicio</a>
                <a href="{{ route('equipos.create') }}" class="btn btn-primary">+ Registrar Equipo</a>
            </nav>
        </header>

        <table>
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>N/S</th>
                    <th>Marca/Modelo</th>
                    <th>Estado</th>
                    <th style="text-align: right;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($equipos as $equipo)
                <tr>
                    <td><strong>{{ $equipo->tipo_equipo }}</strong></td>
                    <td><code>{{ $equipo->num_serie }}</code></td>
                    <td>{{ $equipo->marca }} {{ $equipo->modelo }}</td>
                    <td><span class="estado">{{ $equipo->estado }}</span></td>
                    <td class="acciones-tabla">
                        <a href="{{ route('equipos.edit', $equipo->id_equipo) }}" class="btn btn-yellow">Editar</a>
                        <form action="{{ route('equipos.destroy', $equipo->id_equipo) }}" method="POST" style="margin: 0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-red" onclick="return confirm('¿Eliminar equipo?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>

</body>
</html>