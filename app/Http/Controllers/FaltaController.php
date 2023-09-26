<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Falta;

class FaltaController extends Controller
{
    public function index()
    {
        // Obtener todas las faltas
        $faltas = Falta::all();
        return view('faltas.index', compact('faltas'));
    }

    public function create()
    {
        return view('faltas.create');
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            // Agregar reglas de validación según tus necesidades
        ]);

        // Crear una nueva falta
        Falta::create($request->all());

        // Redireccionar a la lista de faltas
        return redirect()->route('faltas.index')
            ->with('success', 'Falta creada correctamente');
    }

    public function edit($id)
    {
        $falta = Falta::find($id);
        return view('faltas.edit', compact('falta'));
    }

    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate([
            // Agregar reglas de validación según tus necesidades
        ]);

        // Actualizar la falta
        Falta::where('id', $id)->update($request->except('_token', '_method'));

        // Redireccionar a la lista de faltas
        return redirect()->route('faltas.index')
            ->with('success', 'Falta actualizada correctamente');
    }

    public function destroy($id)
    {
        // Eliminar la falta
        Falta::destroy($id);

        // Redireccionar a la lista de faltas
        return redirect()->route('faltas.index')
            ->with('success', 'Falta eliminada correctamente');
    }
}