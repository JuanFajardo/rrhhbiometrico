@extends('yesica')

@section('cuerpo')

                <div class="card-header">
                    <a href="{{ route('usuarios.create') }}" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> </a>
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
                                        <span class="badge badge-secondary">Mesero</span>
                                    @elseif($user->tipo == "reporte" )
                                        <span class="badge badge-info">Cajero</span>
                                    @endif
                                </td>
                                
                                <td>
                                    <a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-warning"> <i class="fa fa-edit"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
      
@stop













