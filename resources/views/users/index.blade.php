@extends('yesica')
@section('cuerpo')
    <h4>Usuario</h4>
        <div class="add-product">
            <a href="{{ route('usuarios.create') }}">Agregar Usuario</a>
        </div>

        <div class="card-body">
                    
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Usuario</th>
                                <th>Tipo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if( $user->tipo == "administrador" )
                                        <span class="badge badge-primary">Administrador</span>
                                    @elseif($user->tipo == "usuario" )
                                        <span class="badge badge-secondary">Usuario</span>
                                    @elseif($user->tipo == "reporte" )
                                        <span class="badge badge-info">Reporte</span>
                                    @endif
                                </td>
                                
                                <td>
                                    <a href="{{ route('usuarios.edit', $user->id) }}"> <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:22px"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
@stop













