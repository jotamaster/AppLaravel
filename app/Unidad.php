<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $table ='unidades';
    protected $fillable = ['nombre','id_departamento'];

    public function departamento(){
      return $this->belongsTo('App\Departamento');
    }
    public static function unidades($id){
      return Unidad::where('id_departamento','=', $id)
      ->get();
    }

}
