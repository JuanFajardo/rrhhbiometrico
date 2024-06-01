<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;


class PersonaController extends Controller
{
    public function index()
    {
        // Obtener todas las personas
        $datos = Persona::all();
        return view('personas.index', compact('datos'));
    }

    public function show($id)
    {
        $dato = Persona::find($id);
        return view('personas.view', compact('dato'));
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
        $request['id_usuario'] = 1;
        $request['activo'] = 1;
        Persona::create($request->all());

        // Redireccionar a la lista de personas
        return redirect()->route('personas.index')
            ->with('success', 'Persona creada correctamente');
    }

    public function edit($id){
        $dato = Persona::find($id);
        return view('personas.edit', compact('dato'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nombre' => 'required',
            'paterno' => 'required',
        ]);
        $request['id_usuario'] = 1;
        Persona::where('id', $id)->update($request->except('_token', '_method'));
        return redirect()->route('personas.index')
            ->with('success', 'Persona actualizada correctamente');
    }

    public function destroy($id){
        $dato = Persona::find($id);
        Persona::where('id', $id)->update( ['activo' => !($dato->activo)] );
        return redirect()->route('personas.index')
            ->with('success', 'Persona estado cambiado');
    }
}