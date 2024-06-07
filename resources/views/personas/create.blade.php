@extends('yesica')

@section('cuerpo')
    <h4>Personal</h4>
    <div class="add-product">
        <a href="{{asset('index.php/personas')}}">Lista</a>
    </div>
        
    <ul id="myTab3" class="tab-review-design">
        <li class="active"><a href=""><i class="icon nalika-edit" aria-hidden="true"></i> Nueva persona </a></li>
    </ul>

    <form action="{{ route('personas.store') }}" method="post">
        @csrf
        <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        
                        <div class="review-content-section">
                            
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                <input type="text" class="form-control"  name ="nombre" placeholder="Nombres" required>
                            </div>
                                
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                <input type="text" class="form-control"  name ="paterno" placeholder="Paterno">
                            </div>
                            
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                <input type="text" class="form-control"  name="materno" placeholder="Materno">
                            </div>
                            
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="ci" placeholder="CI" required>
                            </div>

                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="celular" placeholder="Celular" required>
                            </div>
                        </div>

                    </div>

        
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="review-content-section">

                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="direccion" placeholder="Direccion" required>
                            </div>

                            <select name="id_cargo" class="form-control pro-edt-select form-control-primary" required>
                                @foreach($cargos as $cargo)
                                    <option value="{{$cargo->id}}" > {{$cargo->cargo}}</option>    
                                @endforeach
							</select>

                            <br/>

                            <select name="id_horario" class="form-control pro-edt-select form-control-primary" required>
                                @foreach($horarios as $horario)
                                    <option value="{{$horario->id}}" > {{$horario->horario}}</option>    
                                @endforeach
							</select>

                            <hr>

                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="id_biometrico" placeholder="Nro Biometrico" required>
                            </div>

                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="nombre_biometrico" placeholder="Nombre Biometrico" required>
                            </div>

                        </div>
                    </div>

                </div>
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="text-center custom-pro-edt-ds">
                            <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10"> Crear Persona</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection