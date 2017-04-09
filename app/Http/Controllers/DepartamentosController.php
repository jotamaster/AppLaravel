<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Departamento;
use Illuminate\Support\Facades\DB;
use App\User;
class DepartamentosController extends Controller
{

  // -------------------------------------------------------------------------------------------------------------
  public function view(){
    $departamentos = DB::table('departamentos')
          ->join('users', 'departamentos.cargo', '=', 'users.id')
          ->select('departamentos.nombre', 'departamentos.id', 'users.name as nombre_cargo', 'users.id as id_user')
          ->get();


    return view('departamentos',compact('departamentos'));
  }

  // -------------------------------------------------------------------------------------------------------------
  public function create() {

       
       $jefes = User::select(DB::raw("CONCAT(name,' ',apellido) AS nombre"),'id')->pluck('nombre', 'id');


      return view('createDepartamentos',compact('jefes'));
  }

  // -------------------------------------------------------------------------------------------------------------
  public function store(Request $request) {
        $this->validate($request, [
            'nombre' => 'required|max:40',
        ]);

        $departamento = new Departamento;
        $departamento->nombre = $request->nombre;
        $departamento->cargo = $request->encargado;
        $departamento->save();
        return redirect()->to('crudDepartamentos')->with('success', 'Departamento creado exitosamente') ;
    }
      // -------------------------------------------------------------------------------------------------------------

    public function destroy($id) {
        try {

          $departamentos = Departamento::find($id);
          $departamentos->delete();
          return redirect()->to('crudDepartamentos');


    }catch (\Illuminate\Database\QueryException $e){
        return redirect()->to('crudDepartamentos')->with('success', 'No se puede eliminar el departamento porque tiene asociado Unidades.') ;
    }
    }

  // -------------------------------------------------------------------------------------------------------------





    public function edit($id) {
        $departamentos = Departamento::find($id);
        return view('editDepartamentos', ['departamento' => $departamentos]);
    }
  // -------------------------------------------------------------------------------------------------------------
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
  // -------------------------------------------------------------------------------------------------------------

}
