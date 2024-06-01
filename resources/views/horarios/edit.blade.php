@extends('yesica')

@section('cuerpo')
    <h4>Horario</h4>
    <div class="add-product">
        <a href="{{asset('index.php/personas')}}">Lista</a>
    </div>
        
    <ul id="myTab3" class="tab-review-design">
        <li class="active"><a href=""><i class="icon nalika-edit" aria-hidden="true"></i> Actualizar horario </a></li>
    </ul>

    
    <form method="POST" action="{{ route('horarios.update', $dato->id) }}">

        @csrf
        @method('PUT')

        <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="review-content-section">
                            
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-clock" aria-hidden="true"></i></span>
                                <input type="time" class="form-control"  name ="ingresoam" placeholder="Ingreso AM" required value="{{$dato->ingresoam}}">
                            </div>
                                
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon clock" aria-hidden="true"></i></span>
                                <input type="time" class="form-control"  name ="salidaam" placeholder="Salida AM" value="{{$dato->salidaam}}">
                            </div>
                            
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon clock" aria-hidden="true"></i></span>
                                <input type="time" class="form-control"  name="ingresopm" placeholder="Ingreso PM" value="{{$dato->ingresopm}}">
                            </div>
                            
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon clock" aria-hidden="true"></i></span>
                                <input type="time" class="form-control" name="salidapm" placeholder="Salida PM" required value="{{$dato->salidapm}}">
                            </div>

                        </div>
                    </div>

        
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="review-content-section">

                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="horario" placeholder="Horario" required value="{{$dato->horario}}">
                            </div>

                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="descripcion" placeholder="Descripcion" required value="{{$dato->descripcion}}">
                            </div>

                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <input type="number" class="form-control" name="retrazo" placeholder="Retrazo" required value="{{$dato->retrazo}}">
                            </div>

                        </div>
                    </div>

                

                </div>
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="text-center custom-pro-edt-ds">
                            <button type="submit" class="btn btn-warning btn-sm"> Actualizar </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection