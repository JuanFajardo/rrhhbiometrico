<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Vehiculo;

class VehiculoController extends Controller
{
    public function index(){
        $datos = Vehiculo::all();
        return view('vehiculo.index', compact('datos'));
    }

    public function create(){
        return view('vehiculo.create');
    }

    public function store(Request $request){
        
        $foto1 = $request->file('foto1')->store('public/images');
        $foto2 = $request->file('foto2')->store('public/images');
        $foto3 = $request->file('foto3')->store('public/images');
        $foto4 = $request->file('foto4')->store('public/images');
        $foto5 = $request->file('foto5')->store('public/images');
        $foto6 = $request->file('foto6')->store('public/images');
        $pdf = $request->file('ficha')->store('public/images');
        

        $dato = new Vehiculo;
        $dato->id_usuario = \Auth::user()->id;
        $dato->titulo= $request['titulo'];
        $dato->marca= $request['marca'];
        $dato->motor= $request['motor'];
        $dato->tipo= $request['tipo'];
        $dato->combustible= $request['combustible'];
        $dato->anio= $request['anio'];
        $dato->color= $request['color'];
        $dato->color_interior= $request['color_interior'];
        $dato->wheels= $request['wheels'];
        $dato->traccion= $request['traccion'];
        $dato->comunicate= $request['comunicate'];
        $dato->correo= $request['correo'];
        $dato->activo= True;
        $dato->foto1 = $foto1;
        $dato->foto2 = $foto2;
        $dato->foto3 = $foto3;
        $dato->foto4 = $foto4;
        $dato->foto5 = $foto5;
        $dato->foto6 = $foto6;
        $dato->ficha = $pdf;
        $dato->popular = False;
        $dato->save();
        
        //Vehiculo::create( $request->all() );

        return redirect()->route('Vehiculo.index')
            ->with('success', 'Product created successfully');
    }

    public function show($id){
        $dato = Vehiculo::find($id);
        $datos = Vehiculo::Where( 'tipo', $dato->tipo )->get();
        return view('vehiculo.show', compact('dato', 'datos'));
    }

    public function edit($id){
        $dato = Vehiculo::find($id);

        return view('vehiculo.edit', compact('dato'));
    }

    public function update(Request $request, $id){
        
        $dato = Vehiculo::find($id);
        $dato->id_usuario = \Auth::user()->id;
        $dato->titulo= $request['titulo'];
        $dato->marca= $request['marca'];
        $dato->motor= $request['motor'];
        $dato->tipo= $request['tipo'];
        $dato->combustible= $request['combustible'];
        $dato->anio= $request['anio'];
        $dato->color= $request['color'];
        $dato->color_interior= $request['color_interior'];
        $dato->wheels= $request['wheels'];
        $dato->traccion= $request['traccion'];
        $dato->comunicate= $request['comunicate'];
        $dato->correo= $request['correo'];
        if ($request->hasFile('foto1')){
            $foto1 = $request->file('foto1')->store('public/images');
            $dato->foto1 = $foto1;  
        }
        if ($request->hasFile('foto2')){
            $foto2 = $request->file('foto2')->store('public/images');
            $dato->foto2 = $foto2;  
        }
        if ($request->hasFile('foto3')){
            $foto3 = $request->file('foto3')->store('public/images');
            $dato->foto3 = $foto3;  
        }
        if ($request->hasFile('foto4')){
            $foto4 = $request->file('foto4')->store('public/images');
            $dato->foto4 = $foto4;  
        }
        if ($request->hasFile('foto5')){
            $foto5 = $request->file('foto5')->store('public/images');
            $dato->foto5 = $foto5;  
        }
        if ($request->hasFile('foto6')){
            $foto6 = $request->file('foto6')->store('public/images');
            $dato->foto6 = $foto6;  
        }

        if ($request->hasFile('ficha')){
            $ficha = $request->file('ficha')->store('public/images');
            $dato->ficha = $ficha;  
        }

        $dato->save();
       

        return redirect()->route('Vehiculo.index')
            ->with('success', 'Product updated successfully');
    }
    
    public function activo($id){
        $dato = Vehiculo::find($id);
        $dato->activo= !($dato->activo);
        $dato->save();
        return redirect()->route('Vehiculo.index')
            ->with('success', 'Activo');
    }
    public function popular($id){
        $dato = Vehiculo::find($id);
        $dato->popular= !($dato->popular);
        $dato->save();
        return redirect()->route('Vehiculo.index')
            ->with('success', 'Popular');
    }

    public function destroy(Product $product){
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }

    public function tienda(){
        $datos = Vehiculo::paginate(12);
        $sucess ="";
        return view('vehiculo.tienda', compact('datos','sucess'));
    }


}
