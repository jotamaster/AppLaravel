<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use App\Unidad;
use DB;
use App\Quotation;
use App\Documento;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $departamentos = Departamento::pluck('nombre','id');
            $unidades = Unidad::all();
            $documentos = Documento::all();

            return view('recepcion_buscar', compact('departamentos','unidades','documentos'));
          }

          public function getUnidad(Request $request, $id){

            if ($request->ajax()) {
               $unidades = Unidad::unidades($id);
               return response()->json($unidades);
            }
          }
}
