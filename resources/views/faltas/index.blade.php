@extends('yesica')
@section('cuerpo')
    <h4>Personal</h4>
        <div class="add-product">
            <a href="{{asset('index.php/personas/create')}}">Agregar Personal</a>
        </div>
        
        <table>
            <tr>
                <th>Activo</th>
                <th>CI</th>
                <th>Nombre Completo</th>
                <th>Cargo</th>
                <th>Acciones</th>
            </tr>
            @foreach($datos as $dato)
                <tr>
                    <td>
                        @if($dato->activo)
                        <a href="{{asset('index.php/personas/'.$dato->id.'/activo')}}" class="pd-setting">Activo</a>                    
                        @else
                        <a href="{{asset('index.php/personas/'.$dato->id.'/activo')}}" class="ds-setting">Desactivo</a>
                        @endif
                    </td>
                    <td>{{$dato->ci}}</td>
                    <td>{{$dato->materno}} {{$dato->paterno}} {{$dato->nombre}}</td>
                    <td>{{$dato->id_cargo}}</td>

                    <td>
                        <a href="{{asset('index.php/personas/'.$dato->id.'/edit')}}"> <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:22px"></i> </a>
                        <a href="{{asset('index.php/personas/'.$dato->id)}}"> <i class="fa fa-eyefa fa-eye" aria-hidden="true" style="font-size:22px"></i> </a>
                        
                    </td>

                </tr>
            @endforeach
        </table>
    
@endsection