<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historia;

class HistoriaController extends Controller
{
    public function index()
    {
        // Obtener todas las historias
        $historias = Historia::all();
        return view('historias.index', compact('historias'));
    }

    public function create()
    {
        return view('historias.create');
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            // Agregar reglas de validación según tus necesidades
        ]);

        // Crear una nueva historia
        Historia::create($request->all());

        // Redireccionar a la lista de historias
        return redirect()->route('historias.index')
            ->with('success', 'Historia creada correctamente');
    }

    public function edit($id)
    {
        $historia = Historia::find($id);
        return view('historias.edit', compact('historia'));
    }

    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate([
            // Agregar reglas de validación según tus necesidades
        ]);

        // Actualizar la historia
        Historia::where('id', $id)->update($request->except('_token', '_method'));

        // Redireccionar a la lista de historias
        return redirect()->route('historias.index')
            ->with('success', 'Historia actualizada correctamente');
    }

    public function destroy($id)
    {
        // Eliminar la historia
        Historia::destroy($id);

        // Redireccionar a la lista de historias
        return redirect()->route('historias.index')
            ->with('success', 'Historia eliminada correctamente');
    }
}