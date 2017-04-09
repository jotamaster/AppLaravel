<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Documento;

use App\User;

class DashboardController extends Controller
{
    public function view(){


    return view('dashboard',$docus);
    }

  public function numDoc()
  {
    $docus1 = DB::table('documentos')->where('id_unidad', 2)->count();
    $docus2 = DB::table('documentos')->where('id_unidad', 5)->count();
    $totalDec = DB::table('documentos')->where('tipoDoc', 'decreto')->count();
    $totalOfi = DB::table('documentos')->where('tipoDoc', 'oficio')->count();
    $totalSoli = DB::table('documentos')->where('tipoDoc', 'solicitud')->count();
    $totalDepFinanza = $docus1 +$docus2;
    return view ('dashboard',compact('totalDepFinanza','totalDec','totalOfi','totalSoli'));
  }




}
