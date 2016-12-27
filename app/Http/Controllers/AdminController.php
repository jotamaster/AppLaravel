<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function ViewAddUser(){
      return view('addUser');
    }

    public function ViewAdmUser(){

      return view('admUser');
    }

    public function plan(){

      return view('subirDocumento');
    }


}
