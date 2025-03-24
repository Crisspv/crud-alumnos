<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/alumnos/create.blade.php -->
    @extends('layouts.app')

    @section('content')
        <h1>Crear Alumno</h1>
        <form action="{{ route('alumnos.store') }}" method="POST">
            @csrf
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
                @error('nombre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="correo">Correo:</label>
                <input type="email" name="correo" id="correo" value="{{ old('correo') }}" required>
                @error('correo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required>
                @error('fecha_nacimiento')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="ciudad">Ciudad:</label>
                <input type="text" name="ciudad" id="ciudad" value="{{ old('ciudad') }}" required>
                @error('ciudad')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">Guardar</button>
        </form>
    @endsection
</body>
</html>