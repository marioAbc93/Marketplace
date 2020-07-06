<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vestuario extends Model
{
  protected $table = 'vestuarios';

  protected $fillable= [ 'nombre', 'precio', 'tipo', 'genero', 'talla',
                         'color', 'cantidad', 'imagen1', 'imagen2', 'imagen3', ];
}
