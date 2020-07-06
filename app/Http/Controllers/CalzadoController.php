<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\zapato;
use Illuminate\Support\Facades\Storage;

class CalzadoController extends Controller
{
    public function index(){
      return view('dashboard.crearcalzado');
    }
    public function store(Request $request)
    {

    $calzado = new Zapato;
    $calzado->nombre    = $request->nombre;
    $calzado->precio    = $request->precio;
    $calzado->tipo     = $request->tipo;
    $calzado->Genero  = $request->genero;
    $calzado->talla     = $request->talla;
    $calzado->cantidad    = $request->cantidad;
    $calzado->color    = $request->color;
    $calzado->imagen1    = $request->imagen1;
    $calzado->imagen2    = $request->imagen2;
    $calzado->imagen3    = $request->imagen3;
    $calzado->save();

    if($request->file('imagen1')){
      $path= Storage::disk('public')->put('calzado', $request->file('imagen1'));
      $calzado->fill(['imagen'=>asset($path)])->save();
    };
    if($request->file('imagen2')){
      $path= Storage::disk('public')->put('calzado', $request->file('imagen2'));
      $calzado->fill(['imagen2'=>asset($path)])->save();
    };
    if($request->file('imagen3')){
      $path= Storage::disk('public')->put('calzado', $request->file('imagen3'));
      $calzado->fill(['imagen3'=>asset($path)])->save();
    };

    return back()->with('mensaje', 'Producto añadido!');
    }
}
