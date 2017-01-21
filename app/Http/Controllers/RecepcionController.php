<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Departamento;
use App\Unidad;
use DB;
use App\Quotation;
use App\Documento;
use App\Responsable;
use App\Archivo;


use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

use Session;

class RecepcionController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  // ---------------------------------------------------------------------------
    public function view(){

      $departamentos = Departamento::pluck('nombre','id');
      $unidades = Unidad::all();
      $documentos = Documento::all();

      return view('createdoc', compact('departamentos','unidades','documentos'));
    }

  // ---------------------------------------------------------------------------

    public function getUnidad(Request $request, $id){

      if ($request->ajax()) {
         $unidades = Unidad::unidades($id);
         return response()->json($unidades);
      }
    }
  // ---------------------------------------------------------------------------

  // ---------------------------------------------------------------------------

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
          return redirect()->to('subirdoc')->with('success', 'Documento creado exitosamente') ;

    }catch (\Illuminate\Database\QueryException $e){
          $documento = new Documento;
              $documento->nombre = $request->nombreDocumento;
              $documento->tipoDoc = $request->tipoDocumento;
              $documento->id_unidad =$request->unidades;
              $documento->asunto = $request->asunto;
              $documento->tipoSolicitante = $request->tipoSolicitante;
              $documento->rut_responsable = $request->rutResponsable;
              $documento->save();
              return redirect()->to('subirdoc')->with('success', 'Documento creado exitosamente') ;
        }
      }
  // ---------------------------------------------------------------------------
  public function guardarArchivos() {
     // getting all of the post data
     $files = Input::file('images');
     // Making counting of uploaded images
     $file_count = count($files);
     // start count how many uploaded
     $uploadcount = 0;
  
       foreach($files as $file) {
         $rules = array('file' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,pptx,docx,ppt|max:500000'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
         $validator = Validator::make(array('file'=> $file), $rules);
         if($validator->passes()){
           $destinationPath = 'uploads';
           $filename = str_random(10) . '-' .$file->getClientOriginalName();
           $upload_success = $file->move($destinationPath, $filename);
           $uploadcount ++;
           $archivo = new Archivo();
           $archivo->ruta = $destinationPath."/".$filename;
           $archivo->nombre = $filename;
           $archivo->save();
         }
       }
       if($uploadcount == $file_count){
         Session::flash('success', 'Enviado Correctamente');
         return Redirect::to('subirdoc');
       }
       else {
         return Redirect::to('subirdoc')->withInput()->withErrors($validator);
       }


   }






}
