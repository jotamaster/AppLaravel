<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documento;

class DocumentoController extends Controller
{
  public function view(){
    $documentos = Documento::all();

    return view('recepcion_buscar',compact('documentos'));
  }
}
