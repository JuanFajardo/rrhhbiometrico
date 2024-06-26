<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historia;
use App\Models\Persona;

class HistoriaController extends Controller
{
    public function index()
    {
        //$datos = Historia::Where('id_usuario', '<>', '0')->get();
        $datos = Persona::join('horarios', 'personas.id_horario', '=', 'horarios.id')
                        ->join('cargos', 'personas.id_cargo', '=', 'cargos.id')
                        ->select('personas.*', 'horarios.*', 'cargos.*')
                        ->get();
        return view('historias.index', compact('datos'));
    }

    public function create()
    {
        return view('historias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Agregar reglas de validación según tus necesidades
        ]);
        Historia::create($request->all());
        return redirect()->route('historias.index')
            ->with('success', 'Historia creada correctamente');
    }

    public function show($id)
    {
        $datos = Historia::Where('id_persona', $id)->orderBy('fecha', 'desc')->get();
        return view('historias.view', compact('datos'));
    }

    public function edit($id)
    {
        $dato = Historia::find($id);
        return view('historias.edit', compact('dato'));
    }

    public function update(Request $request, $id)
    {
        Historia::where('id', $id)->update($request->except('_token', '_method'));
        return redirect()->route('historias.edit', $id)
            ->with('success', 'Horas actualizados correctamente');
    }

    public function destroy($id)
    {
        Historia::destroy($id);
        return redirect()->route('historias.index')
            ->with('success', 'Historia eliminada correctamente');
    }

    public function cargado(Request $request){
        $archivo = $request->file('archivo');
        $nombreArchivo = 'TIQUEO.csv';
        $ruta = $archivo->storeAs('public', $nombreArchivo);

        $ruta = public_path('public\\TIQUEO.csv');
        $f = fopen($ruta, 'r');
        $datos = fread($f, filesize($ruta));
        $filas = explode("\n", $datos);
        
        foreach($filas as $fila){
            $columnas = explode(',', $fila);
            if (count($columnas) < 13) {
                continue; 
            }
            
            try {
                $date = \DateTime::createFromFormat( 'm/d/Y', $columnas[2] );
                $fecha = $date->format('Y-m-d');
                
                $registro_existente = Historia::where('fecha', $fecha)
                                        ->where('id_biometrico', $columnas[0])->exists();
                if(!$registro_existente){
                    Historia::create([
                        'id_usuario' => '0',
                        'id_persona' => '0',
                        'persona'    => '0',
                        'id_horario' => '0',
                        'horario'    => '0',
                        'id_cargo'   => '0',
                        'cargo'      => '0',
                        'id_falta'   => '0',
                        'falta'      => '0',
                        'id_biometrico' => $columnas[0],
                        'nombre_biometrico' => $columnas[1],
                        'fecha' => $fecha,
                        'ingresoam' => $columnas[4],
                        'salidaam'  => $columnas[5],
                        'ingresopm' => $columnas[6],
                        'salidapm'  => $columnas[7],
                        'retrazo' => '0', 'observacion' => '0', 'aceptado' => '0',
                    ]);
                }

            } catch (\Exception $e) {
                echo 'Error al insertar en la tabla Historia: ' . $e->getMessage();
            }
        }

        $personas = Persona::join('horarios', 'personas.id_horario', '=', 'horarios.id')
                        ->join('cargos', 'personas.id_cargo', '=', 'cargos.id')
                        ->select('personas.*', 'horarios.*', 'cargos.*')->get();

        foreach($personas as $persona){
            $historias = Historia::where('id_biometrico', $persona->id_biometrico)
                                ->where('fecha', '>=', '2023-01-01') // Ajusta la fecha según tu necesidad
                                ->get();
            $retrazo = $persona->retrazo;
            foreach ($historias as $historia) {
                // Calcular el retraso acumulado
                $ingresoam = !empty($historia->ingresoam) && $historia->ingresoam !== '0:00' ? new \DateTime($historia->ingresoam) : null;
                $ingresopm = !empty($historia->ingresopm) && $historia->ingresopm !== '0:00' ? new \DateTime($historia->ingresopm) : null;
                $horarioIngresoAM = !empty($persona->ingresoam) ? new \DateTime($persona->ingresoam) : null;
                $horarioIngresoPM = !empty($persona->ingresopm) ? new \DateTime($persona->ingresopm) : null;

                $retrazoAM = $ingresoam && $horarioIngresoAM ? max(0, $horarioIngresoAM->diff($ingresoam)->i) : -1;
                $retrazoPM = $ingresopm && $horarioIngresoPM ? max(0, $horarioIngresoPM->diff($ingresopm)->i) : -1;

                $retrazoTotal = 0;
                if ($retrazoAM == -1 || $retrazoPM == -1) {
                    $retrazoTotal = -1;
                } else {
                    $retrazoTotal = $retrazoAM + $retrazoPM;
                }

                // Comparar con el retraso permitido
                $retrazoPermitido = $persona->retrazo;
                $retrazoExcedido = $retrazoTotal > $retrazoPermitido ? $retrazoTotal - $retrazoPermitido : 0;

                $valores = [
                    'id_usuario' => \Auth::user()->id,
                    'id_persona' => $persona->id,
                    'persona'    => $persona->nombre." ".$persona->paterno." ".$persona->materno,
                    'id_horario' => $persona->id_horario,
                    'horario'    => $persona->horario,
                    'id_cargo'   => $persona->id_cargo,
                    'cargo'      => $persona->cargo,
                    'retrazo'    => $retrazoTotal == -1 ? -1 : $retrazoExcedido,
                    'observacion'  => $retrazoTotal == -1 ? "Sin Asistencia" : ($retrazoTotal < $retrazo ? "Normal" : "retrazo") ,
                ];            
                Historia::where('id', $historia->id)->update($valores);
            }
        }

        return redirect('historias');
    }


    public function reporte(Request $request){
        $idPersona = $request->input('persona');
        $inicio = $request->input('inicio');
        $fin = $request->input('fin');
        
        $historias = Historia::where('id_persona', $idPersona)
            ->whereBetween('fecha', [$inicio, $fin])
            ->select('persona', 'horario', 'cargo', 'fecha',
            'ingresoam', 'salidaam', 'ingresopm', 'salidapm', 'retrazo', 'observacion')
            ->get();

        $csvData = $this->convertToCsv($historias);
        return \Response::make($csvData, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="historias.csv"',
        ]);
    }

    private function convertToCsv($data)
    {
        $csv = '';
        $columns = [
            'Persona', 'Horario', 'Cargo', 'Fecha',
            'Ing. AM', 'Sal. AM', 'Ing. PM', 'Sal. PM', 'Retrazo', 'Observacion'
        ];

        $csv .= implode(',', $columns) . "\n";
        foreach ($data as $row) {
            $csv .= implode(',', $row->only($columns)) . "\n";
        }
        return $csv;
    }


}