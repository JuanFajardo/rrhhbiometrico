<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index()
    {
        // Obtener todas las personas
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    public function create()
    {
        return view('personas.create');
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre' => 'required',
            'paterno' => 'required',
            // Agregar más reglas de validación según tus necesidades
        ]);

        // Crear una nueva persona
        Persona::create($request->all());

        // Redireccionar a la lista de personas
        return redirect()->route('personas.index')
            ->with('success', 'Persona creada correctamente');
    }

    public function edit($id)
    {
        $persona = Persona::find($id);
        return view('personas.edit', compact('persona'));
    }

    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate([
            'nombre' => 'required',
            'paterno' => 'required',
            // Agregar más reglas de validación según tus necesidades
        ]);

        // Actualizar la persona
        Persona::where('id', $id)->update($request->except('_token', '_method'));

        // Redireccionar a la lista de personas
        return redirect()->route('personas.index')
            ->with('success', 'Persona actualizada correctamente');
    }

    public function destroy($id)
    {
        // Eliminar la persona
        Persona::destroy($id);

        // Redireccionar a la lista de personas
        return redirect()->route('personas.index')
            ->with('success', 'Persona eliminada correctamente');
    }
}