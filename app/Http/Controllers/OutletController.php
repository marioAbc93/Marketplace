<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\descuento;
use Illuminate\Support\Facades\Storage;
class OutletController extends Controller
{
    public function descuento(){
      return view('dashboard.descuento');
    }
    public function crear(){
      return view('dashboard.creardescuento');
    }
    public function store(Request $request)
    {

    $descuento = new Descuento;
    $descuento->nombre    = $request->nombre;
    $descuento->precioanterior    = $request->precioanterior;
    $descuento->precio    = $request->precio;
    $descuento->tipo     = $request->tipo;
    $descuento->descuento    = $request->descuento;
    $descuento->Genero  = $request->genero;
    $descuento->talla     = $request->talla;
    $descuento->cantidad    = $request->cantidad;
    $descuento->color    = $request->color;
    $descuento->imagen1    = $request->imagen1;
    $descuento->imagen2    = $request->imagen2;
    $descuento->imagen3    = $request->imagen3;
    $descuento->save();

    
    if($request->file('imagen2')){
      $path= Storage::disk('public')->put('descuento', $request->file('imagen2'));
      $descuento->fill(['imagen2'=>asset($path)])->save();
    };
    if($request->file('imagen3')){
      $path= Storage::disk('public')->put('descuento', $request->file('imagen3'));
      $descuento->fill(['imagen3'=>asset($path)])->save();
    };

    return back()->with('mensaje', 'Producto añadido!');
    }
}
