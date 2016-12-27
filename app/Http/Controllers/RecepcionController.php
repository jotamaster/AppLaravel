<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use App\Unidad;
use DB;
use App\Quotation;


class RecepcionController extends Controller
{
    public function view(){

      $departamentos = Departamento::pluck('nombre','id');
      $unidades = Unidad::all();

      return view('recepcion', compact('departamentos','unidades'));
    }

    public function getUnidad(Request $request, $id){

      if ($request->ajax()) {
         $unidades = Unidad::unidades($id);
         return response()->json($unidades);
      }
    }
}
