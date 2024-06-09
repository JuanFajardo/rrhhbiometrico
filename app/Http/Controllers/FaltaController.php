<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Falta;
use App\Models\Persona;
use App\Models\Historia;
class FaltaController extends Controller
{
    public function index()
    {
        // Obtener todas las faltas
        $datos = Falta::all();
        return view('faltas.index', compact('datos'));
    }

    public function create(){
        $personas = Persona::all();
        return view('faltas.create', compact('personas'));
    }

    public function store(Request $request){   
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

    public function edit($id){
        $permiso = Falta::findOrFail($id);
        $personas = Persona::all();
        return view('faltas.edit', compact('permiso', 'personas'));
    }

    public function update(Request $request, $id){
        $request->validate([
            // Agregar reglas de validación según tus necesidades
        ]);

        Falta::where('id', $id)->update($request->except('_token', '_method'));
        return redirect()->route('faltas.index')
            ->with('success', 'Falta actualizada correctamente');
    }

    public function destroy($id){
        Falta::destroy($id);
        return redirect()->route('faltas.index')
            ->with('success', 'Falta eliminada correctamente');
    }

    public function activo($id)
    {
        try {
            // Buscar la falta por ID
            $falta = Falta::findOrFail($id);
            
            // Preparar los valores para la actualización
            $valores = [
                'ingresoam' => $falta->ingresoam,
                'salidaam'  => $falta->salidaam,
                'ingresopm' => $falta->ingresopm,
                'salidapm'  => $falta->salidapm,
                'observacion'  => $falta->falta,
                'retrazo'   => 0,
            ];
            
            // Actualizar la tabla Historia
            if ($falta->tipo == "personal") {
                Historia::where('fecha', $falta->fecha)
                        ->where('id_persona', $falta->id_persona)
                        ->update($valores);
            } else {
                Historia::where('fecha', $falta->fecha)
                        ->update($valores);
            }
            
            // Actualizar el estado de aprobación en la tabla Falta
            $affectedRows = Falta::where('id', $id)
                                ->update(['aprobado' => 'si']);
            
            // Verificar si la actualización fue exitosa
            if ($affectedRows > 0) {
                return redirect()->route('faltas.index');
            } else {
                return redirect()->route('faltas.index');
            }
        } catch (\Exception $e) {
            return redirect()->route('faltas.index');
        }
    }
}