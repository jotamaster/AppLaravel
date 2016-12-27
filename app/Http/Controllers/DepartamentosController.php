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
            'nombre' => 'required|max:15',

        ]);

        $data = request()->all();

        $departamento = Departamento::create($data);
        return redirect()->to('crudDepartamentos')->with('success', 'Departamento creado exitosamente') ;
    }


}
