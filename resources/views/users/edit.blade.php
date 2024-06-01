@extends('yesica')


@section('cuerpo')
<div class="page-title">
    <div class="title_left">
        <h3>Editar Usuario</h3>
    </div>
    <div class="title_rigth">
        <h3>
            <a href="{{ route('usuarios.index') }}" class="btn btn-primary"> <i class="fa fa-backward"></i> </a>
            @if ($errors->any())
                <div>
                    <strong>Error de validación:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </h3>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_content">

                <form method="POST" action="{{ route('usuarios.update', $user->id) }}"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                    <div class="col">
                            <label for="name">Nombre Completo</label>
                            <input type="text" id="name" name="name" value="{{ $user->name }}" required class="form-control">
                        </div>

                        <div class="col">
                            <label for="email">Usuario</label>
                            <input type="text" id="email" name="email" value="{{ $user->email }}" required class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="password">Contraseña</label>
                            <input type="text" id="password" name="password" value="" class="form-control">
                        </div>

                        <div class="col">
                            <label for="tipo">Tipo</label>
                            <select name="tipo" id="tipo" required class="form-control">
                                <option value="administrador" {{ $user->tipo == 'administrador' ? 'selected' : '' }}>Administrador</option>
                                <option value="usuario" {{ $user->tipo == 'usuario' ? 'selected' : '' }}>Usuario</option>
                                <option value="reporte" {{ $user->tipo == 'reporte' ? 'selected' : '' }}>Reporte</option>
                            </select>
                        </div>
                    </div>

                    <br/><br/>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop