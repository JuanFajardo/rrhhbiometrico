@extends('yesica')

@section('cuerpo')
<style>
        .table {
            display: flex;
            width: 100%;
        }
        .table .row {
            display: flex;
        }
        .table .cell {
            padding: 10px;
            text-align: center;
        }
    </style>

    <h4>Historial {{ $datos[0]->nombre_biometrico }} </h4>

    <div class="add-product">
        <a href="{{asset('index.php/historias/')}}">Lista</a>
    </div>
            
        <table>
            <tr>
                <th>Fecha</th>
                <th>Horario</th>
                <th>Cargo</th>
                <th>
                    <div class="table">
                        <div class="row">
                            <div class="cell">Mañana</div>
                            <div class="cell">Tarde</div>
                        </div>
                    </div>  
                </th>
                <th>Retrazo</th>
                <th>Acciones</th>
            </tr>
            @foreach($datos as $dato)
                <tr>
                    <td>{{ explode(" ", $dato->fecha)[0] }} </td>
                    <td>{{$dato->horario}}</td>
                    <td>{{$dato->cargo}}</td>
                    
                    <td> 
                        <div class="table">
                            <div class="row">
                                <div class="cell"> {{$dato->ingresoam}} <br >{{$dato->salidaam}} </div>
                                <div class="cell"> {{$dato->ingresopm}} <br >{{$dato->salidapm}} </div>
                            </div>
                        </div>
                    </td>
                    <td>{{$dato->retrazo}} </td>
                    <td>
                        <a href="{{asset('index.php/historias/'.$dato->id.'/edit')}}"> <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:22px"></i> </a>
                    </td>
                </tr>
            @endforeach
        </table>
    
@endsection