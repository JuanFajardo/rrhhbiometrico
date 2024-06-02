<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Cargo;
use App\Models\Horario;

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
        $cargos    = Cargo::all();
        $horarios  = Horario::all();
        $dato = Persona::find($id);
        return view('personas.view', compact('dato', 'cargos', 'horarios' ));
    }

    public function create()
    {
        $cargos    = Cargo::all();
        $horarios  = Horario::all();
        
        return view('personas.create', compact('cargos', 'horarios' ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'paterno' => 'required',
        ]);

        $request['id_usuario'] = 1;
        $request['activo'] = 1;
        Persona::create($request->all());
        
        return redirect()->route('personas.index')
            ->with('success', 'Persona creada correctamente');
    }

    public function edit($id){
        $cargos    = Cargo::all();
        $horarios  = Horario::all();
        $dato = Persona::find($id);
        return view('personas.edit', compact('dato', 'cargos', 'horarios' ));
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