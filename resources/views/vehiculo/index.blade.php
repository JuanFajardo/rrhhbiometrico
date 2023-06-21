@extends('veloci')

@section('producto')
<a href="{{asset('index.php/Vehiculo/create')}}" class="btn btn-success"> Nuevo Vehiculo</a>
<br>
<table class="table" border="1">
    <thead>
        <tr>
            <th> Titulo </th>
            <th> Tipo </th>
            <th> Combustible </th>
            <th> Año </th>
            <th> Color </th>
            <th> Accion </th>
        </tr>
    </thead>
    <tbody>
    @foreach($datos as $dato)
        <tr>
            <td>{{$dato->titulo}}</td>
            <td>{{$dato->tipo}}</td>
            <td>{{$dato->combustible}}</td>
            <td>{{$dato->anio}}</td>
            <td>{{$dato->color}}</td>
            <td>
                <a href="{{asset('index.php/Tienda/'.$dato->id)}}" target="_blank"  class="btn btn-success">Ver</a> 

                <a href="{{asset('index.php/Vehiculo/'.$dato->id.'/edit')}}"  class="btn btn-warning">Modificar</a> 
                @if($dato->activo)
                    <a href="{{asset('index.php/Vehiculo/'.$dato->id.'/activo')}}" class="btn btn-primary">Desactivar</a> 
                @else
                    <a href="{{asset('index.php/Vehiculo/'.$dato->id.'/activo')}}" class="btn btn-danger">Activar</a> 
                @endif

                @if($dato->popular)
                    <a href="{{asset('index.php/Vehiculo/'.$dato->id.'/popular')}}" class="btn btn-primary">Popular</a> 
                @else
                    <a href="{{asset('index.php/Vehiculo/'.$dato->id.'/popular')}}" class="btn btn-danger">No Popular</a> 
                @endif
                
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@stop
