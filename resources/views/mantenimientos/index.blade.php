<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bitácora de Mantenimientos</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <main>
        <header class="top-bar">
            <h1>Bitácora de Mantenimientos</h1>
            <nav>
                <a href="/" class="btn btn-gray">Volver al Inicio</a>
                <a href="{{ route('mantenimientos.create') }}" class="btn btn-primary">+ Nuevo Registro</a>
            </nav>
        </header>

        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Equipo (ID)</th>
                    <th>Tipo</th>
                    <th>Falla Reportada</th>
                    <th style="text-align: right;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mantenimientos as $mantenimiento)
                <tr>
                    <td><strong>{{ $mantenimiento->fecha_mantenimiento }}</strong></td>
                    <td><code>ID: {{ $mantenimiento->id_equipo }}</code></td>
                    <td><span class="estado">{{ $mantenimiento->tipo_mantenimiento }}</span></td>
                    <td>{{ $mantenimiento->descripcion_falla }}</td>
                    <td class="acciones-tabla">
                        <a href="{{ route('mantenimientos.edit', $mantenimiento->id_mantenimiento) }}" class="btn btn-yellow">Editar</a>
                        <form action="{{ route('mantenimientos.destroy', $mantenimiento->id_mantenimiento) }}" method="POST" style="margin: 0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-red" onclick="return confirm('¿Eliminar registro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>