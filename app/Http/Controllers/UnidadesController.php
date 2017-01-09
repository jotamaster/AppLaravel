<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Unidad;
use App\Departamento;

class UnidadesController extends Controller
{
    public function view(){


      $unidades = DB::table('unidades')
            ->join('departamentos', 'unidades.id_departamento', '=', 'departamentos.id')
            ->select('unidades.nombre', 'unidades.id', 'departamentos.nombre as nombre_departamento', 'departamentos.id as id_departamento')
            ->get();

            return view('unidades',compact('unidades'));

    }

    public function create() {

      $departamentos = Departamento::pluck('nombre','id as s');
      $unidades = Unidad::all();
        return view('createUnidades' ,compact('unidades','departamentos'));

    }

    public function store(Request $request) {
          $this->validate($request, [
              'nombre' => 'required|max:40',
              'id_departamento' => 'required|max:40',
          ]);

          $data = request()->all();

          $unidad = Unidad::create($data);
          return redirect()->to('crudUnidades')->with('success', 'Unidad creado exitosamente') ;
      }

      public function destroy($id) {
          try {
            $unidades = Unidad::find($id);
            $unidades->delete();
            return redirect()->to('crudUnidades');


      }catch (\Illuminate\Database\QueryException $e){
          return redirect()->to('crudUnidades')->with('success', 'No se puede eliminar el departamento porque tiene asociado Unidades.') ;
      }
      }

      public function edit($id) {
          $unidades = Unidad::find($id);
          return view('editUnidades', ['unidad' => $unidades]);
      }


      public function update($id, Request $request) {
    $nombre = request()->input('nombre');

    $this->validate($request, [
        'nombre' => 'required|max:40',

    ]);
    $unidad = Unidad::find($id);
    $unidad->nombre = $nombre;
    $unidad->save();
    return redirect()->to('crudUnidades');
  }




}
