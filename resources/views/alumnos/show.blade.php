<!-- resources/views/alumnos/show.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Detalles del Alumno</h1>
        <div class="card">
            <div class="card-body">
                <p><strong>Nombre:</strong> {{ $alumno->nombre }}</p>
                <p><strong>Correo:</strong> {{ $alumno->correo }}</p>
                <p><strong>Fecha de Nacimiento:</strong> {{ $alumno->fecha_nacimiento }}</p>
                <p><strong>Ciudad:</strong> {{ $alumno->ciudad }}</p>
            </div>
        </div>
        <a href="{{ route('alumnos.index') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>
</body>
</html>