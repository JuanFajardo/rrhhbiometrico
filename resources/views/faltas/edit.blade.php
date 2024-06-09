@extends('yesica')

@section('cuerpo')
    <h4>Permiso</h4>
    <div class="add-product">
        <a href="{{ asset('index.php/faltas') }}">Lista</a>
    </div>
        
    <ul id="myTab3" class="tab-review-design">
        <li class="active"><a href=""><i class="icon nalika-edit" aria-hidden="true"></i> Editar Permiso </a></li>
    </ul>

    <form action="{{ isset($permiso) ? route('faltas.update', $permiso->id) : route('faltas.store') }}" method="post">
        @csrf
        @if(isset($permiso))
            @method('PUT')
        @endif
        <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">

                <div class="row">
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        
                        <div class="review-content-section">
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                <select class="form-control" name="id_persona" id="id_persona">
                                    <option value="0">Todos</option>
                                    @foreach($personas as $persona)
                                        <option value="{{ $persona->id }}" {{ isset($permiso) && $permiso->id_persona == $persona->id ? 'selected' : '' }}>{{ $persona->nombre }} {{ $persona->paterno }} {{ $persona->materno }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="falta" placeholder="Nombre del permiso" value="{{ isset($permiso) ? $permiso->falta : '' }}" required>
                            </div>
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="observacion" placeholder="Descripción del permiso" value="{{ isset($permiso) ? $permiso->observacion : '' }}" required>
                            </div>

                            <div class="review-content-section">
                                <h4> Mañana</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="input-group mg-b-pro-edt">
                                            <input type="time" class="form-control" name="ingresoam" placeholder="Ingreso Mañana" value="{{ isset($permiso) ? $permiso->ingresoam : '' }}" required>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="input-group mg-b-pro-edt">
                                            <input type="time" class="form-control" name="salidaam" placeholder="Salida Mañana" value="{{ isset($permiso) ? $permiso->salidaam : '' }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                        <div class="review-content-section">
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <input type="date" class="form-control" name="fecha" placeholder="Fecha" value="{{ isset($permiso) ? \Carbon\Carbon::parse($permiso->fecha)->format('Y-m-d') : '' }}" required>
                            </div>
                        
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <select class="form-control" name="accion" id="accion">
                                    <option value="falta" {{ isset($permiso) && $permiso->accion == 'falta' ? 'selected' : '' }}>Falta</option>
                                    <option value="atraso" {{ isset($permiso) && $permiso->accion == 'atraso' ? 'selected' : '' }}>Atraso</option>
                                    <option value="permiso" {{ isset($permiso) && $permiso->accion == 'permiso' ? 'selected' : '' }}>Permiso</option>
                                    <option value="feriado" {{ isset($permiso) && $permiso->accion == 'feriado' ? 'selected' : '' }}>Feriado</option>
                                </select>
                            </div>
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <select class="form-control" name="tipo" id="tipo">
                                    <option value="todo" {{ isset($permiso) && $permiso->tipo == 'todo' ? 'selected' : '' }}>Todos</option>
                                    <option value="personal" {{ isset($permiso) && $permiso->tipo == 'personal' ? 'selected' : '' }}>Personal</option>
                                </select>
                            </div>
                        
                            <h4> Tarde</h4>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="input-group mg-b-pro-edt">
                                        <input type="time" class="form-control" name="ingresopm" placeholder="Ingreso Tarde" value="{{ isset($permiso) ? $permiso->ingresopm : '' }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    
                                    <div class="input-group mg-b-pro-edt">
                                        <input type="time" class="form-control" name="salidapm" placeholder="Salida Tarde" value="{{ isset($permiso) ? $permiso->salidapm : '' }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="text-center custom-pro-edt-ds">
                            <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">{{ isset($permiso) ? 'Actualizar' : 'Crear' }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection