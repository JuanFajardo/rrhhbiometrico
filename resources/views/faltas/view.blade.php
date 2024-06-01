@extends('yesica')

@section('cuerpo')
    <h4>Personal</h4>
    <div class="add-product">
        <a href="{{asset('index.php/personas')}}">Lista</a>
    </div>
        
    <ul id="myTab3" class="tab-review-design">
        <li class="active"><a href=""><i class="icon nalika-edit" aria-hidden="true"></i> Actualizar persona </a></li>
    </ul>

    
    <form method="POST" action="{{ route('personas.update', $dato->id) }}">

        @csrf
        @method('PUT')

        <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        
                        <div class="review-content-section">
                            
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                <input type="text" class="form-control"  name ="nombre" placeholder="Nombres" required value="{{$dato->nombre}}">
                            </div>
                                
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                <input type="text" class="form-control"  name ="paterno" placeholder="Paterno" value="{{$dato->paterno}}">
                            </div>
                            
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                <input type="text" class="form-control"  name="materno" placeholder="Materno" value="{{$dato->materno}}">
                            </div>
                            
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="ci" placeholder="CI" required value="{{$dato->ci}}">
                            </div>

                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="celular" placeholder="Celular" required value="{{$dato->celular}}">
                            </div>
                        </div>

                    </div>

        
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="review-content-section">

                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="direccion" placeholder="Direccion" required  value="{{$dato->direccion}}">
                            </div>

                            <select name="id_cargo" class="form-control pro-edt-select form-control-primary" required>
							    <option value="">Escoger Cargo</option>
								<option value="2">2</option>
							</select>

                            <br/>

                            <select name="id_horario" class="form-control pro-edt-select form-control-primary" required>
							    <option value="">Escoger Horario</option>
								<option value="2">2</option>
							</select>

                        </div>
                    </div>

                </div>
                
                
            </div>
        </div>
    </form>
@endsection