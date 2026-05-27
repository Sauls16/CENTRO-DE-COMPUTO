<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Inventario CC</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <main>
        <section class="welcome-box">
            <h2>Sistema de Gestión</h2>
        </section>

        <header class="top-bar">
            <h1>Accesos Rápidos</h1>
        </header>

        <section class="quick-actions">
            <article class="action-card">
                <div>
                    <h3>Ubicaciones</h3>
                    <p>Ver salas y laboratorios</p>
                </div>
                <a href="{{ route('ubicaciones.index') }}" class="btn btn-primary">Ir</a>
            </article>

            <article class="action-card">
                <div>
                    <h3>Equipos</h3>
                    <p>Inventario de hardware</p>
                </div>
                <a href="{{ route('equipos.index') }}" class="btn btn-primary">Ir</a>
            </article>

            <article class="action-card">
                <div>
                    <h3>Mantenimientos</h3>
                    <p>Bitácora de soporte técnico</p>
                </div>
                <a href="{{ route('mantenimientos.index') }}" class="btn btn-primary">Ir</a>
            </article>
        </section>
    </main>

</body>
</html>