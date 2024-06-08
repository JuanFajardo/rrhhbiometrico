@extends('yesica')

@section('cuerpo')
    <h4>{{$dato->persona}}</h4>
    <div class="add-product">
        <a href="{{asset('index.php/historias/'.$dato->id_persona)}}">Lista</a>
    </div>
        
    <ul id="myTab3" class="tab-review-design">
        <li class="active"><a href=""><i class="icon nalika-edit" aria-hidden="true"></i> Actualizar Horario {{ explode(" ", $dato->fecha)[0]}} </a></li>
    </ul>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
        
    <form method="POST" action="{{ route('historias.update', $dato->id) }}">
        @csrf
        @method('PUT')

        <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label for=""> Ingreso AM</label>
                        <div class="review-content-section">
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-gear" aria-hidden="true"></i></span>
                                <input type="time" class="form-control" name="ingresoam" placeholder="ingresoam"   value="{{$dato->ingresoam}}">
                            </div>

                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-gear" aria-hidden="true"></i></span>
                                <input type="time" class="form-control" name="salidaam" placeholder="salidaam"   value="{{$dato->salidaam}}">
                            </div>
                        </div>

                    </div>

        
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label for=""> Ingreso PM</label> 
                        <div class="review-content-section">

                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-gear" aria-hidden="true"></i></span>
                                <input type="time" class="form-control" name="ingresopm" placeholder="ingresopm"   value="{{$dato->ingresopm}}">
                            </div>

                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-gear" aria-hidden="true"></i></span>
                                <input type="time" class="form-control" name="salidapm" placeholder="salidapm"   value="{{$dato->salidapm}}">
                            </div>
                            <input type="hidden" class="form-control" name="id"    value="{{$dato->id}}">
                        </div>
                    </div>

                </div>

                <div class="row">
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label for=""> Retraso</label>
                        <div class="review-content-section">
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-gear" aria-hidden="true"></i></span>
                                <input type="number" class="form-control" name="retrazo" placeholder="ingresoam" required  value="{{$dato->retrazo}}">
                            </div>
                        </div>
                    </div>

        

                </div>
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="text-center custom-pro-edt-ds">
                            <button type="submit" class="btn btn-warning btn-sm" style="color:black;"> Actualizar Horario </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection