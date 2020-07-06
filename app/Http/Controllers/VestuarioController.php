<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vestuario;
use Illuminate\Support\Facades\Storage;
class VestuarioController extends Controller
{
  public function vestuario(){
    $vestuario = vestuario::all();
    return view('dashboard.vestuario', compact('vestuario'));
  }
  public function index(){
    return view('dashboard.crearvestuario');
  }
  public function store(Request $request)
  {

  $vestuario = new Vestuario;
  $vestuario->nombre    = $request->nombre;
  $vestuario->precio    = $request->precio;
  $vestuario->tipo     = $request->tipo;
  $vestuario->Genero  = $request->genero;
  $vestuario->talla     = $request->talla;
  $vestuario->cantidad    = $request->cantidad;
  $vestuario->color    = $request->color;
  $vestuario->imagen2    = $request->imagen2;
  $vestuario->imagen3    = $request->imagern3;
  $vestuario->save();

  
  if($request->file('imagen2')){
    $imagen2=$request->file('imagen2');
    $name= $imagen2->getClientOriginalExtension();
    $path= Storage::disk('public')->put('vestuario', $request->file('imagen2'));
    $vestuario->fill(['imagen2'=>asset($path)])->save();
  };
  if($request->file('imagen3')){
    $imagen3=$request->file('imagen3');
    $name= $imagen3->getClientOriginalExtension();
    $path= Storage::disk('public')->put('vestuario', $request->file('imagen3'));
    $vestuario->fill(['imagen3'=>asset($path)])->save();
  };

  return back()->with('mensaje', 'Producto añadido!');
  }
}
