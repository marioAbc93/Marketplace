<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vestuario;

class ProductoController extends Controller
{
    

    public function calzado(){
      return view('dashboard.calzado');
    }
    public function complementos(){
      return view('dashboard.complementos');
    }

}
