@extends('yesica')

@section('cuerpo')
    <h4>Permiso</h4>
    <div class="add-product">
        <a href="{{asset('index.php/faltas')}}">Lista</a>
    </div>
        
    <ul id="myTab3" class="tab-review-design">
        <li class="active"><a href=""><i class="icon nalika-edit" aria-hidden="true"></i> Nueva Permiso </a></li>
    </ul>



    <form action="{{ route('faltas.store') }}" method="post">
        @csrf
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
                                        <option value="{{$persona->id}}">{{$persona->nombre}} {{$persona->paterno}} {{$persona->materno}} </option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="falta" placeholder="Nombre del permiso" required>
                            </div>
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="observacion" placeholder="Descripcion del permiso" required>
                            </div>

                            <div class="review-content-section">
                                <h4> Mañana</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="input-group mg-b-pro-edt">
                                            <input type="time" class="form-control" name="ingresoam" placeholder="Ingreso Mañana" required>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="input-group mg-b-pro-edt">
                                            <input type="time" class="form-control" name="salidaam" placeholder="Salida Mañana" required>
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
                                    <input type="date" class="form-control" name="fecha" placeholder="Fecha" required>
                            </div>
                        
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <select class="form-control" name="accion" id="accion">
                                    <option value="falta">Falta</option>'falta, atraso, permiso, feriado');
                                    <option value="atraso">Atraso</option>
                                    <option value="permiso">Permiso</option>
                                    <option value="feriado">Feriado</option>
                                </select>
                            </div>
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <select class="form-control" name="tipo" id="tipo">
                                    <option value="todo">Todos</option>
                                    <option value="personal">Personal</option>
                                </select>
                            </div>
                        
                            <h4> Tarde</h4>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="input-group mg-b-pro-edt">
                                        <input type="time" class="form-control" name="ingresopm" placeholder="Ingreso Tarde" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    
                                    <div class="input-group mg-b-pro-edt">
                                        <input type="time" class="form-control" name="salidapm" placeholder="Salida Tarde" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="text-center custom-pro-edt-ds">
                            <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10"> Crear </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection