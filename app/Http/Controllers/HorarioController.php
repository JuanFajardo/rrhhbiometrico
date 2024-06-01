<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;

class HorarioController extends Controller
{
    public function index()
    {
        // Obtener todos los horarios
        $datos = Horario::all();
        return view('horarios.index', compact('datos'));
    }

    public function create()
    {
        return view('horarios.create');
    }

    public function store(Request $request){
        $request->validate([
            'horario' => 'required',
        ]);

        $request['id_usuario'] = 1;
        Horario::create($request->all());

        return redirect()->route('horarios.index')
            ->with('success', 'Horario creado correctamente');
    }

    public function edit($id)
    {
        $dato = Horario::find($id);
        return view('horarios.edit', compact('dato'));
    }

    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate([
            'horario' => 'required',
            // Agregar más reglas de validación según tus necesidades
        ]);

        $request['id_usuario'] = 1;
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