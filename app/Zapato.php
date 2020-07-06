<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zapato extends Model
{
  protected $table = 'zapatos';

  protected $fillable= [ 'nombre', 'precio', 'tipo', 'genero', 'talla',
                         'color', 'cantidad', 'imagen1', 'imagen2', 'imagen3', ];
}
