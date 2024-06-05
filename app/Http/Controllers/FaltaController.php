<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Falta;
use App\Models\Persona;

class FaltaController extends Controller
{
    public function index()
    {
        // Obtener todas las faltas
        $datos = Falta::all();
        return view('faltas.index', compact('datos'));
    }

    public function create()
    {
        $personas = Persona::all();
        return view('faltas.create', compact('personas'));
    }

    public function store(Request $request)
    {   //return $request->all();
        $id = $request->id_persona;
        $request['id_usuario']= \Auth::user()->id;
        if ( $id == "0" )
            $nombre= "Todos";
        else 
            $nombre= $this->persona($id);
        $request['persona'] = $nombre;
        Falta::create($request->all());

        return redirect()->route('faltas.index')
            ->with('success', 'Falta creada correctamente');
    }
    public function persona($id){
        $dato = Persona::find($id);
        return $dato->nombre." ".$dato->paterno." ".$dato->materno;
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

        Falta::where('id', $id)->update($request->except('_token', '_method'));
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