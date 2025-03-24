<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    // Listar todos los alumnos
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));
    }

    // Mostrar el formulario de creación
    public function create()
    {
        return view('alumnos.create');
    }

    // Guardar un nuevo alumno
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'correo' => 'required|email|unique:alumnos,correo',
            'fecha_nacimiento' => 'required|date',
            'ciudad' => 'required|string',
        ]);

        Alumno::create($request->all());
        return redirect()->route('alumnos.index')->with('success', 'Alumno creado correctamente.');
    }

    // Mostrar los detalles de un alumno
    public function show(Alumno $alumno)
    {
        return view('alumnos.show', compact('alumno'));
    }

    // Mostrar el formulario de edición
    public function edit(Alumno $alumno)
    {
        return view('alumnos.edit', compact('alumno'));
    }

    // Actualizar un alumno
    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'nombre' => 'required|string',
            'correo' => 'required|email|unique:alumnos,correo,' . $alumno->id,
            'fecha_nacimiento' => 'required|date',
            'ciudad' => 'required|string',
        ]);

        $alumno->update($request->all());
        return redirect()->route('alumnos.index')->with('success', 'Alumno actualizado correctamente.');
    }

    // Eliminar un alumno
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado correctamente.');
    }
}