<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{
    public function index()
    {
        // Obtener todos los cargos
        $datos = Cargo::all();
        return view('cargos.index', compact('datos'));
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
        $request['id_usuario'] = 1;
        Cargo::create($request->all());

        // Redireccionar a la lista de cargos
        return redirect()->route('cargos.index')
            ->with('success', 'Cargo creado correctamente');
    }

    public function edit($id)
    {
        $dato = Cargo::find($id);
        return view('cargos.edit', compact('dato'));
    }

    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate([
            'cargo' => 'required',
        ]);
        $request['id_usuario'] = 1;
        Cargo::where('id', $id)->update($request->except('_token', '_method'));
        return redirect()->route('cargos.index')
            ->with('success', 'Cargo actualizado correctamente');
    }

    public function destroy($id){
        //Cargo::destroy($id);
        //return redirect()->route('cargos.index') ->with('success', 'Cargo eliminado correctamente');
    }

}
