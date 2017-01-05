<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Auth;

class PerfilController extends Controller
{

  public function view(){

return view('perfil');

  }


  public function updateProfile(Request $request){
        $rules = ['image' => 'required|image|max:1024*1024*1',];
        $messages = [
            'image.required' => 'La imagen es requerida',
            'image.image' => 'Formato no permitido',
            'image.max' => 'El máximo permitido es 1 MB',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()){
            return redirect('perfil')->withErrors($validator);
        }
        else{
            $name = str_random(30) . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move('usuImg', $name);
            $user = new User;
            $user->where('email', '=', Auth::user()->email)
                 ->update(['usuImg' => 'usuImg/'.$name]);
            return redirect('perfil')->with('status', 'Su imagen de perfil ha sido cambiada con éxito');
        }
    }

}
