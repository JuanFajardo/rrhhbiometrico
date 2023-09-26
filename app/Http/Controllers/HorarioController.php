<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;

class HorarioController extends Controller
{
    public function index()
    {
        // Obtener todos los horarios
        $horarios = Horario::all();
        return view('horarios.index', compact('horarios'));
    }

    public function create()
    {
        return view('horarios.create');
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'horario' => 'required',
            // Agregar más reglas de validación según tus necesidades
        ]);

        // Crear un nuevo horario
        Horario::create($request->all());

        // Redireccionar a la lista de horarios
        return redirect()->route('horarios.index')
            ->with('success', 'Horario creado correctamente');
    }

    public function edit($id)
    {
        $horario = Horario::find($id);
        return view('horarios.edit', compact('horario'));
    }

    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate([
            'horario' => 'required',
            // Agregar más reglas de validación según tus necesidades
        ]);

        // Actualizar el horario
        Horario::where('id', $id)->update($request->except('_token', '_method'));

        // Redireccionar a la lista de horarios
        return redirect()->route('horarios.index')
            ->with('success', 'Horario actualizado correctamente');
    }

    public function destroy($id)
    {
        // Eliminar el horario
        Horario::destroy($id);

        // Redireccionar a la lista de horarios
        return redirect()->route('horarios.index')
            ->with('success', 'Horario eliminado correctamente');
    }
}