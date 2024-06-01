@extends('yesica')
@section('cuerpo')
    <h4>Cargos</h4>
        <div class="add-product">
            <a href="{{asset('index.php/cargos/create')}}">Agregar Cargo</a>
        </div>
        
        <table>
            <tr>
                <th>ID</th>
                <th>Cargo</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
            @foreach($datos as $dato)
                <tr>
                    
                    <td>{{$dato->id}}</td>
                    <td>{{$dato->cargo}}</td>
                    <td>{{$dato->descripcion}}</td>

                    <td>
                        <a href="{{asset('index.php/cargos/'.$dato->id.'/edit')}}"> <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:22px"></i> </a>
                        
                    </td>

                </tr>
            @endforeach
        </table>
    
@endsection