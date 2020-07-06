<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complemento extends Model
{
  protected $table = 'complementos';

  protected $fillable= [ 'nombre', 'precio', 'tipo', 'genero', 'talla',
                         'color', 'cantidad', 'imagen1', 'imagen2', 'imagen3', ];
}
