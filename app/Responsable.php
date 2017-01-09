<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
  protected $table = 'responsables';
  protected $fillable = ['nombre','id','rut','apellido','telefono','direccion','correo'];
}
