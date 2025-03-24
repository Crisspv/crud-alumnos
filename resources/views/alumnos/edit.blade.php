<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/alumnos/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Editar Alumno</h1>
    <form action="{{ route('alumnos.update', $alumno) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $alumno->nombre }}" required>
        </div>
        <div>
            <label for="correo">Correo:</label>
            <input type="email" name="correo" id="correo" value="{{ $alumno->correo }}" required>
        </div>
        <div>
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ $alumno->fecha_nacimiento }}" required>
        </div>
        <div>
            <label for="ciudad">Ciudad:</label>
            <input type="text" name="ciudad" id="ciudad" value="{{ $alumno->ciudad }}" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection
</body>
</html>