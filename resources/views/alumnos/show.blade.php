<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/alumnos/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Detalles del Alumno</h1>
    <p><strong>Nombre:</strong> {{ $alumno->nombre }}</p>
    <p><strong>Correo:</strong> {{ $alumno->correo }}</p>
    <p><strong>Fecha de Nacimiento:</strong> {{ $alumno->fecha_nacimiento }}</p>
    <p><strong>Ciudad:</strong> {{ $alumno->ciudad }}</p>
    <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Volver</a>
@endsection
</body>
</html>