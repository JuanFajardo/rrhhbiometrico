@extends('yesica')
@section('cuerpo')
    <h4>Horario</h4>
        <div class="add-product">
            <a href="{{asset('index.php/horarios/create')}}">Agregar Horario</a>
        </div>
        
        <table>
            <tr>
                <th>ID</th>
                <th>Horario</th>
                <th>Descripcion</th>
                <th>Mañana</th>
                <th>Tarde</th>
                <th>Retrazo</th>
                <th>Acciones</th>
            </tr>
            @foreach($datos as $dato)
                <tr>
                    <td>{{$dato->id}}</td>
                    <td>{{$dato->horario}}</td>
                    <td>{{$dato->descripcion}} </td>
                    <td>{{$dato->ingresoam}} <br >{{$dato->salidaam}} </td>
                    <td>{{$dato->ingresopm}} <br >{{$dato->salidapm}} </td>
                    <td>{{$dato->retrazo}}</td>
                    <td>
                        <a href="{{asset('index.php/horarios/'.$dato->id.'/edit')}}"> <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:22px"></i> </a>
                        <a href="{{asset('index.php/horarios/'.$dato->id)}}"> <i class="fa fa-eyefa fa-eye" aria-hidden="true" style="font-size:22px"></i> </a>
                    </td>

                </tr>
            @endforeach
        </table>
    
@endsection