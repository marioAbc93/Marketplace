<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Vestuario;
use App\Descuento;
class PagesController extends Controller
{
    public function inicio(){
      $oferta=descuento::all();
    return view('welcome', compact('oferta'));
    }
    public function productos(){
      $vestuario= vestuario::all();
      return view('productos', compact('vestuario'));
    }
    public function articulo(){
      return view('articulo');
    }
    public function compra(){
      return view('compra');
    }
    public function contacto(){
      return view('contacto');
    }
    public function outlet(){
      return view('outlet');
    }
    public function blog(){
      return view('blog');
    }

    public function usuarios(){
      $user= User::all();
      return view('dashboard.usuarios');
    }
}
