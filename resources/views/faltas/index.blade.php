@extends('yesica')
@section('cuerpo')
    <h4>Permisos</h4>
        <div class="add-product">
            <a href="{{asset('index.php/faltas/create')}}">Agregar Permiso</a>
        </div>
        <table>
            <tr>
                <th>Permiso</th>
                <th>Pesonal</th>
                <th>Horario</th>
                <th>Clase Permiso</th>
                <th>Tipo Permiso</th>
                <th>Aprobado</th>
                <th>Acciones</th>
            </tr>
            @foreach($datos as $dato)
                <tr>
                <td>{{$dato->falta}} <br> {{$dato->fecha}} </td>
                <td>{{$dato->persona}}</td>
                <td>{{$dato->ingresoam}} a {{$dato->salidaam}} <br> {{$dato->ingresopm}} a {{$dato->salidapm}} </td>
                <td>{{$dato->accion}}</td>
                <td>{{$dato->tipo}}</td>
                <td>
                        @if($dato->aprobado == "si")
                        <a href="{{asset('index.php/faltas/'.$dato->id.'/activo')}}" class="pd-setting">Aprobado</a>                    
                        @else
                        <a href="{{asset('index.php/faltas/'.$dato->id.'/activo')}}" class="ds-setting">Rechazado</a>
                        @endif
                </td>
                    <td>
                        <a href="{{asset('index.php/faltas/'.$dato->id.'/edit')}}"> <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:22px"></i> </a>
                    </td>
                </tr>
            @endforeach
        </table>
    
@endsection