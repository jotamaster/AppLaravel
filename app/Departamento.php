<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
  protected $table = 'departamentos';
  protected $fillable = ['nombre','id'];

  public function unidades(){
    return $this->hasMany('App\Unidad');
}

}
