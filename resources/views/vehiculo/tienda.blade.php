@extends('veloci')

@section('producto')
@if( strlen($sucess) > 2 )
        <h1>{{$sucess}} </h1>
    @else
        <h1>Vehiculos </h1>
    @endif


<section class="section-padding section-bg" id="section_3">
    <div class="container">
        <div class="col-lg-12 col-12 text-left mb-4">
            <hr style="width:50px; height:2px; background:rgb(15, 38, 114)">
            @if( isset($busqueda) )
              <h2>{{$busqueda}}</h2>
            @else
              <h2>Inventario</h2>
            @endif
            

            <hr style="width:100px; height:2px; background:rgb(15, 38, 114)">
        </div>
        <div class="row">
            <div class="col-lg-3 col-12 mb-4">
                <div class="container mt-3">
                    <h4>Filtro</h4>
                    <div id="accordion">
                      <div class="card">
                        <div class="card-header">
                          <a class=" dropdown-item btn" data-bs-toggle="collapse" href="#collapseOne">
                            Año
                          </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                          <div class="card-body">
                            <ul class="list-group" >
                                <li class="list-group-item">
                                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                  2019
                                </li>
                                <li class="list-group-item">
                                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                  2020
                                </li>
                                <li class="list-group-item">
                                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                  2021
                                </li>
                                <li class="list-group-item">
                                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                 2022
                                </li>
                                <li class="list-group-item">
                                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                  2023
                                </li>
                              </ul>
                          </div>
                        </div>
                      </div>
                      
                      <div class="card">
                        <div class="card-header">
                          <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                          Marca
                        </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                      Jaguar
                                    </li>
                                    <li class="list-group-item">
                                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                      Toyota
                                    </li>
                                    <li class="list-group-item">
                                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                      Ram
                                    </li>
                                    <li class="list-group-item">
                                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                      Volvo
                                    </li>
                                    <li class="list-group-item">
                                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                      Hyundai
                                    </li>
                                  </ul>
                              </div>
                          
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                            Tipo de Vehículo
                          </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                          <div class="card-body">
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                      Camioneta
                                    </li>
                                    <li class="list-group-item">
                                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                      Vagoneta
                                    </li>
                                    <li class="list-group-item">
                                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                      Eléctrico
                                    </li>
                                    <li class="list-group-item">
                                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                      Híbrido
                                    </li>
                                    <li class="list-group-item">
                                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                      Semi-Nuevo
                                    </li>
                                  </ul>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseFour">
                            Combustible
                          </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
                          <div class="card-body">
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                      Gasolina
                                    </li>
                                    <li class="list-group-item">
                                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                      Diesel
                                    </li>
                                    <li class="list-group-item">
                                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                      Eléctrico
                                    </li>
                                    
                                  </ul>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            
            <div class="col-lg-9 col-12 mb-4">
                <?php $id=3; ?>
                @foreach ($datos as $dato)
                @if($id%3 ==0 )    
                <div class="row">
                @endif    

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <a href="{{asset('index.php/Tienda/'.$dato->id)}}" class="d-block">
                            <img src="{{asset('storage/images/'.explode("/", $dato->foto1)[2] )}}" class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">{{$dato->titulo}}</h5>
                                    <hr style="width: 230px;">
                                    <p class="mb-0"> Motor <strong> {{$dato->motor}}</strong></p>
                                    <p class="mb-0"> Traccion <strong>{{$dato->traccion}}</strong></p>
                                    <p class="mb-0"> Combustible <strong>{{$dato->combustible}}</strong></p>
                                    <hr style="width: 230px;">
                                     <div class="d-flex align-items-center mb-0 ">
                                    
                                    <a href="{{asset('index.php/Tienda/'.$dato->id)}}" class="custom-btn btn me-2"><i class="bi-plus-lg"></i></a>
                                    <a href="https://wa.me/59178718632&text=Hola me comunico por el auto {{$dato->titulo}}" class="custom-btn btn  me-2"><i class="bi-whatsapp"></i></a>
                                    <a href="{{asset('storage/images/'.explode("/", $dato->ficha)[2] )}}" class="custom-btn btn me-2"><i class="bi-download"></i></a>

                                    </div>
                                </div>
                                
                            </div>
                            </a>
                        </div>
                    </div>
                    
                
                @if($id%6 ==0 )    
                </div>
                @endif    
                

                <?php $id++; ?>
                @endforeach

                <div class="mt-5">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link active" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          {{ $datos->links() }}
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
    </div>
    
    
</section>



    
    

    
@endsection