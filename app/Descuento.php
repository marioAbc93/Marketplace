<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
  protected $table = 'descuentos';

  protected $fillable= [ 'nombre', 'precio', 'tipo', 'genero', 'talla',
                         'color', 'cantidad', 'imagen1', 'imagen2', 'imagen3', ];
}
