@extends('yesica')


@section('cuerpo')
<h4>Usuarios</h4>
    <div class="add-product">
        <a href="{{asset('index.php/usuarios')}}">Lista</a>
    </div>
        
<div class="page-title">
    <div class="title_rigth">
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
    </div>
</div>

<ul id="myTab3" class="tab-review-design">
    <li class="active"><a href=""><i class="icon nalika-edit" aria-hidden="true"></i> Nuevo Usuario </a></li>
</ul>

<form method="POST" action="{{ route('usuarios.store') }}" enctype="multipart/form-data">
@csrf

<div id="myTabContent" class="tab-content custom-product-edit">
    <div class="product-tab-list tab-pane fade active in" id="description">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">  
                <div class="review-content-section">
                            
                    <div class="input-group mg-b-pro-edt">
                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                        <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" required  placeholder="Nombre Completo">
                    </div>
                                
                    <div class="input-group mg-b-pro-edt">
                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                        <input type="text" id="email" name="email" value="{{ old('email') }}" required  class="form-control"  placeholder="usuario@betanzos.com">
                    </div>
                            
                    <div class="input-group mg-b-pro-edt">
                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                        <input type="text" id="password" name="password" value="{{ old('password') }}" required  class="form-control" placeholder="Contraseña">
                    </div>
                            
                    <div class="input-group mg-b-pro-edt">
                        <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                        <select name="tipo" id="tipo" required  class="form-control">
                            <option value="administrador">Administrador</option>
                            <option value="usuario">Usuario</option>
                            <option value="reporte">Reporte</option>
                        </select>
                    </div>
                            
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="text-center custom-pro-edt-ds">
            <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10"> Crear Usuario</button>
        </div>
    </div>
</div>
</form>               
      
@stop