<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function index(){

        return view('auth.login');
    }


    public function store(Request $request){
        

        $this->validate($request,[
            'email'=>'required|email|min:5',
            'password'=>'required'
        ]);

        //buscar si el usuario esta registrado
        $user=User::where('email',$request->email)->first();
        
        if(!$user){
            return back()->with('mensaje','EL email no esta registrado');
        }

        //si existe entonces procedemos a intentar iniciar sesion
        if(!auth()->attempt($request->only('email','password'), $request->remember)){
            return back()->with('mensaje','Error password incorrecto');
        }

        //redireccionamos
        //$admin=User::where('email',$request->email)->first();
        
        if($user->admin===1){ //si es 1 que se vaya a la pagina de admin
            return redirect()->route('admin.index');
        }else{//si es cero o cualquier otro admin se tiene que ir al index
            return redirect()->route('dashboard.index');
        }
        
    }
}
