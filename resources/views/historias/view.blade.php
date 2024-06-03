@extends('yesica')

@section('cuerpo')
    <h4>Historial {{ $datos[0]->nombre_biometrico }} </h4>
            
        <table>
            <tr>
                <th>Persona</th>
                <th>Horario</th>
                <th>Cargo</th>
                <th>Mañana</th>
                <th>Tarde</th>
                <th>Retrazo</th>
                <th>Acciones</th>
            </tr>
            @foreach($datos as $dato)
                <tr>
                    <td>{{$dato->persona}} </td>
                    <td>{{$dato->horario}}</td>
                    <td>{{$dato->cargo}}</td>
                    <td>{{$dato->ingresoam}} <br >{{$dato->salidaam}} </td>
                    <td>{{$dato->ingresopm}} <br >{{$dato->salidapm}} </td>
                    <td>{{$dato->retrazo}} </td>
                    <td>
                        <a href="{{asset('index.php/personas/'.$dato->id)}}"> <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:22px"></i> </a>
                    </td>
                </tr>
            @endforeach
        </table>
    
@endsection