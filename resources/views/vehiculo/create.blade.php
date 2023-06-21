@extends('veloci')

@section('producto')
<style>
    label {
        font-weight: bold;
    }
</style>    
<form action="{{ route('Vehiculo.store') }}" method="POST" enctype="multipart/form-data" class="col-md-12 m-auto card-body" >
    @csrf

    <div class="row">
        <div class="form-group col-md-3 mb-3">
            <label> <b>Titulo</b> </label>
            <input type="text" class="form-control mt-1" name="titulo" placeholder="2022 Jeep Gladiator Willys" required  autocomplete="off" >
        </div>
        <div class="form-group col-md-3 mb-3">
            <label> <b>Marca</b> </label>
            <input type="text" class="form-control mt-1" name="marca" placeholder="Toyota" required  autocomplete="off" list="marca-list">
            <datalist id="marca-list">             
                <option value="Land Rover">Land Rover</option> 
                <option value="Jaguar">Jaguar</option> 
                <option value="Mercedes Benz">Mercedes Benz</option> 
                <option value="Cadillac">Cadillac</option> 
                <option value="Audi">Audi</option> 
                <option value="Dodge">Dodge</option> 
                <option value="RAM">RAM</option> 
                <option value="Jeep">Jeep</option> 
                <option value="Bronco">Bronco</option> 
                <option value="Toyota">Toyota</option> 
                <option value="Volkswagen">Volkswagen</option> 
                <option value="Volvo">Volvo</option> 
                <option value="Nissan">Nissan</option> 
                <option value="Hyundai">Hyundai</option> 
                <option value="Mitsubishi">Mitsubishi</option> 
            </datalist>

        </div>
        <div class="form-group col-md-3 mb-3">
            <label> <b>Motor</b> </label>
            <input type="text" name="motor" class="form-control mt-1" placeholder="--" required  autocomplete="off">
        </div>
        <div class="form-group col-md-3 mb-3">
            <label> <b>Tipo</b> </label>
            <input type="text" class="form-control mt-1" name="tipo" placeholder="Camioneta" required  list="tipo-list" autocomplete="off" >
            <datalist id="tipo-list"> 
                <option value="Caminioneta">Caminioneta</option> 
                <option value="Vagoneta">Vagoneta</option> 
            </datalist>        
        </div>
    </div>
        
    <div class="row">
        <div class="form-group col-md-3 mb-3">
            <label> <b>Combustible</b> </label>
            <input type="text" class="form-control mt-1" name="combustible" placeholder="Gasolina" required  list="combustible-list" autocomplete="off">
            <datalist id="combustible-list"> 
                <option value="Gasolina">Gasolina</option> 
                <option value="Diesel">Diesel</option> 
                <option value="Hibrido">Hibrido</option> 
                <option value="Electrico">Electrico</option> 
            </datalist>
        </div>
        <div class="form-group col-md-3 mb-3">
            <label> <b>Año</b> </label>
            <input type="text" class="form-control mt-1" name="anio" placeholder="2022" required  list="anio-list" autocomplete="off">
            <datalist id="anio-list"> 
                @for($i=date('Y'); $i>=2018; $i--)
                    <option value="{{$i}}">{{$i}}</option> 
                @endfor
            </datalist>
        </div>
        <div class="form-group col-md-3 mb-3">
            <label> <b>Color</b> </label>
            <input type="text" class="form-control mt-1" name="color" placeholder="Verde" required  autocomplete="off">
        </div>
        <div class="form-group col-md-3 mb-3">
            <label> <b>Color Interior</b> </label>
            <input type="text" class="form-control mt-1" name="color_interior" placeholder="Negro – Plomo" required  autocomplete="off" >
        </div>
    </div>
    
    <div class="row">
        <div class="form-group col-md-3 mb-3">
            <label> <b>Wheels</b> </label>
            <input type="text" class="form-control mt-1" name="wheels" placeholder="LT 255/75SR17C" required  autocomplete="off" >  
        </div>
        <div class="form-group col-md-3 mb-3">
            <label> <b>Traccion</b> </label>
            <input type="text" class="form-control mt-1" name="traccion" placeholder="4x4" required  autocomplete="off" >
        </div>
        <div class="form-group col-md-3 mb-3">
            <label> <b>Whatsapp</b> </label>
            <input type="text" class="form-control mt-1" name="comunicate" placeholder="59177889944" required  autocomplete="off" >
        </div>
        <div class="form-group col-md-3 mb-3">
            <label> <b>Correo</b> </label>
            <input type="text" class="form-control mt-1" name="correo" placeholder="correo@correo.com" required  autocomplete="off" >
        </div>
    </div>


    <div class="row">
        <div class="form-group col-md-3 mb-3">
            <label> <b>Foto 1</b> </label>
            <input type="file" name="foto1" autocomplete="off"> 
        </div>
        <div class="form-group col-md-3 mb-3">
            <label> <b> Foto 2</b> </label>
            <input type="file" name="foto2" autocomplete="off">
        </div>
        <div class="form-group col-md-3 mb-3">
            <label> <b>Foto 3</b> </label>
            <input type="file" name="foto3" autocomplete="off">
        </div>
        <div class="form-group col-md-3 mb-3">
            <label> <b>Foto 4</b> </label>
            <input type="file" name="foto4"   autocomplete="off">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-3 mb-3">
            <label> <b>Foto 5</b> </label>
            <input type="file" name="foto5"   autocomplete="off">
        </div>
        <div class="form-group col-md-3 mb-3">
            <label> <b>Foto 6</b> </label>
            <input type="file" name="foto6"   autocomplete="off">
        </div>
        <div class="form-group col-md-3 mb-3">
            <label> <b>Ficha Tecnica</b> </label>
            <input type="file" name="ficha"   autocomplete="off"> <a> <i class="fa fa-download"></i> Ficha</a> 
        </div>
        <div class="form-group col-md-3 mb-3">
            <input type="submit" value="Insertar" class="btn btn-primary">
        </div>
    </div>

</form>
@stop