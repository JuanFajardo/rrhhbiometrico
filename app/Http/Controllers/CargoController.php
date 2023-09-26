<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{
    public function index()
    {
        // Obtener todos los cargos
        $cargos = Cargo::all();
        return view('cargos.index', compact('cargos'));
    }

    public function create()
    {
        return view('cargos.create');
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'cargo' => 'required',
            // Agregar más reglas de validación según tus necesidades
        ]);

        // Crear un nuevo cargo
        Cargo::create($request->all());

        // Redireccionar a la lista de cargos
        return redirect()->route('cargos.index')
            ->with('success', 'Cargo creado correctamente');
    }

    public function edit($id)
    {
        $cargo = Cargo::find($id);
        return view('cargos.edit', compact('cargo'));
    }

    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate([
            'cargo' => 'required',
            // Agregar más reglas de validación según tus necesidades
        ]);

        // Actualizar el cargo
        Cargo::where('id', $id)->update($request->except('_token', '_method'));

        // Redireccionar a la lista de cargos
        return redirect()->route('cargos.index')
            ->with('success', 'Cargo actualizado correctamente');
    }

    public function destroy($id)
    {
        // Eliminar el cargo
        Cargo::destroy($id);

        // Redireccionar a la lista de cargos
        return redirect()->route('cargos.index')
            ->with('success', 'Cargo eliminado correctamente');
    }

}
