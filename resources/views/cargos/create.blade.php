@extends('yesica')

@section('cuerpo')
    <h4>Cargos</h4>
    <div class="add-product">
        <a href="{{asset('index.php/cargos')}}">Lista</a>
    </div>
        
    <ul id="myTab3" class="tab-review-design">
        <li class="active"><a href=""><i class="icon nalika-edit" aria-hidden="true"></i> Nueva Cargo </a></li>
    </ul>



    <form action="{{ route('cargos.store') }}" method="post">
        @csrf
        <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        
                        <div class="review-content-section">
                            
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                <input type="text" class="form-control"  name ="cargo" placeholder="Cargo" required>
                            </div>
                            
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="descripcion" placeholder="Descripcion" required>
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