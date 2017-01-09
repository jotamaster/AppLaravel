<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
  protected $table = 'documentos';
  protected $fillable = ['nombre','id','tipoDoc','id_unidad','tipoSolicitante','rut_responsable','asunto','create_at'];
}
