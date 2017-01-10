<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use App\Unidad;
use DB;
use App\Quotation;
use App\Documento;
use App\Responsable;


class RecepcionController extends Controller
{
    public function view(){

      $departamentos = Departamento::pluck('nombre','id');
      $unidades = Unidad::all();
      $documentos = Documento::all();

      return view('createdoc', compact('departamentos','unidades','documentos'));
    }

    public function getUnidad(Request $request, $id){

      if ($request->ajax()) {
         $unidades = Unidad::unidades($id);
         return response()->json($unidades);
      }
    }


    public function store(Request $request) {
          $this->validate($request, [
             'nombreDocumento'=> 'required',
             'tipoDocumento'=> 'required',
             'unidades'=> 'required',
             'unidades'=> 'required',
             'tipoSolicitante'=> 'required',
             'rutResponsable'=> 'required|integer',
             'nombreResposable'=> 'required',
             'Apellido'=> 'required',
             'telefono'=> 'required',
             'direccion'=> 'required',





          ]);

          $users = DB::table('responsables')->where('rut', '=', $request->rutResponsable)->get();



try {

  $documento = new Documento;
      $documento->nombre = $request->nombreDocumento;
      $documento->tipoDoc = $request->tipoDocumento;
      $documento->id_unidad =$request->unidades;
      $documento->asunto = $request->asunto;
      $documento->tipoSolicitante = $request->tipoSolicitante;
      $documento->rut_responsable = $request->rutResponsable;
      $documento->save();

  $responsable = new Responsable;
  $responsable->rut = $request->rutResponsable;
  $responsable->nombre = $request->nombreResposable;
  $responsable->apellido = $request->Apellido;
  $responsable->telefono = $request->telefono;
  $responsable->direccion = $request->direccion;
  $responsable->correo = $request->correo;
  $responsable->save();
  return redirect()->to('subirdoc')->with('success', 'Departamento creado exitosamente') ;

}catch (\Illuminate\Database\QueryException $e){
  $documento = new Documento;
      $documento->nombre = $request->nombreDocumento;
      $documento->tipoDoc = $request->tipoDocumento;
      $documento->id_unidad =$request->unidades;
      $documento->asunto = $request->asunto;
      $documento->tipoSolicitante = $request->tipoSolicitante;
      $documento->rut_responsable = $request->rutResponsable;
      $documento->save();
      return redirect()->to('subirdoc')->with('success', 'Departamento creado exitosamente') ;

}



}




}
