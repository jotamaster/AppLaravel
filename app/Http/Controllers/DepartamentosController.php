<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Departamento;
class DepartamentosController extends Controller
{


  public function view(){

    $departamentos = Departamento::all();
    return view('departamentos',compact('departamentos'));
  }

  public function create() {
      return view('createDepartamentos');
  }
  public function store(Request $request) {
        $this->validate($request, [
            'nombre' => 'required|max:40',

        ]);

        $data = request()->all();

        $departamento = Departamento::create($data);
        return redirect()->to('crudDepartamentos')->with('success', 'Departamento creado exitosamente') ;
    }

    public function destroy($id) {
        try {

          $departamentos = Departamento::find($id);
          $departamentos->delete();
          return redirect()->to('crudDepartamentos');


    }catch (\Illuminate\Database\QueryException $e){
        return redirect()->to('crudDepartamentos')->with('success', 'No se puede eliminar el departamento porque tiene asociado Unidades.') ;
    }
    }







    public function edit($id) {
        $departamentos = Departamento::find($id);
        return view('editDepartamentos', ['departamento' => $departamentos]);
    }

    public function update($id, Request $request) {
  $nombre = request()->input('nombre');

  $this->validate($request, [
      'nombre' => 'required|max:40',

  ]);
  $departamento = Departamento::find($id);
  $departamento->nombre = $nombre;
  $departamento->save();
  return redirect()->to('crudDepartamentos');
}


}
