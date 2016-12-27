<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Unidad;

class UnidadesController extends Controller
{
    public function view(){

      $unidades = Unidad::all();

      return view('unidades',compact('unidades'));
    }
}
