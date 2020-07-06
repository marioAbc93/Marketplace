<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\complemento;
use Illuminate\Support\Facades\Storage;
class ComplementoController extends Controller
{
  public function index(){
    return view('dashboard.crearcomplemento');
  }
  public function store(Request $request)
  {

  $complemento = new Complemento;
  $complemento->nombre    = $request->nombre;
  $complemento->precio    = $request->precio;
  $complemento->tipo     = $request->tipo;
  $complemento->Genero  = $request->genero;
  $complemento->talla     = $request->talla;
  $complemento->cantidad    = $request->cantidad;
  $complemento->color    = $request->color;
  $complemento->imagen1    = $request->imagen1;
  $complemento->imagen2    = $request->imagen2;
  $complemento->imagen3    = $request->imagen3;
  $complemento->save();

  if($request->file('imagen1')){
    $path= Storage::disk('public')->put('complemento', $request->file('imagen1'));
    $complemento->fill(['imagen'=>asset($path)])->save();
  };
  if($request->file('imagen2')){
    $path= Storage::disk('public')->put('complemento', $request->file('imagen2'));
    $complemento->fill(['imagen2'=>asset($path)])->save();
  };
  if($request->file('imagen3')){
    $path= Storage::disk('public')->put('complemento', $request->file('imagen3'));
    $complemento->fill(['imagen3'=>asset($path)])->save();
  };

  return back()->with('mensaje', 'Producto añadido!');
  }

}
