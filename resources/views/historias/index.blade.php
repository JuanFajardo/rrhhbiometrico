@extends('yesica')
@section('cuerpo')
    <h4>Historial</h4>
    
        <div class="container mt-4">
            <form action="{{ route('historial.cargado') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input type="file" name="archivo" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary w-100">Cargar Archivo</button>
                    </div>
                </div>
            </form>
            <hr>

            <form action="{{ route('historial.reporte') }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="row mb-3">
                    <div class="col-md-3">
                        <select name="persona" id="persona" class="form-control">
                            <option value="0"> Todos  </option>
                            @foreach($datos as $dato)
                                <option value="{{$dato->id}}"> {{$dato->nombre}} {{$dato->paterno}} {{$dato->materno}}  </option>
                            @endforeach
                        </select>
                        
                    </div>
                    <div class="col-md-3">
                        <input type="date" name="inicio" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <input type="date" name="fin" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary w-100">Reporte</button>
                    </div>
                </div>
            </form>

        </div>
        
        <table>
            <tr>
                <th>Persona</th>
                <th>Horario</th>
                <th>Cargo</th>
                <th>Mañana</th>
                <th>Tarde</th>
                <th>Acciones</th>
            </tr>
            @foreach($datos as $dato)
                <tr>
                    <td>{{$dato->persona}} {{$dato->paterno}} {{$dato->materno}} </td>
                    <td>{{$dato->horario}}</td>
                    <td>{{$dato->cargo}}</td>
                    <td>{{$dato->ingresoam}} <br >{{$dato->salidaam}} </td>
                    <td>{{$dato->ingresopm}} <br >{{$dato->salidapm}} </td>
                    <td>
                        <a href="{{asset('index.php/historias/'.$dato->id)}}"> <i class="fa fa-calendar" aria-hidden="true" style="font-size:22px"></i> </a>
                    </td>
                </tr>
            @endforeach
        </table>
    
@endsection