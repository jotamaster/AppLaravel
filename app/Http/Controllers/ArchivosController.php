<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;
use App\Archivo;
use DB;

use Session;

class ArchivosController extends Controller
{

public function view(){
  return view('archivos');
}



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
       return Redirect::to('archivos');
     }
     else {
       return Redirect::to('archivos')->withInput()->withErrors($validator);
     }
   }





}
