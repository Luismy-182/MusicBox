<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\AccountVerificationMail;

class RegisterController extends Controller
{
    //
    public function index(){

        
        return view('auth.register');
    }


    public function store(Request $request){
    
        //validando campos del form
        $this->validate($request,[
            'name'=>'required|min:5|max:30',
            'apellido'=>'required|min:5|max:80',
            'email'=>['required','unique:users','email','max:60'],
            'password'=>'required|confirmed|min:5'
        ]);
       
        //crea un token
        $token=User::createToken();
        
        //insertando
        User::create([
            'name'=>$request->name,
            'apellido'=>$request->apellido,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'verification_token'=>$token,
            'admin'=>0 //0 usuario normal 1 admin
        ]);

        //mandando email de confirmacion con Mailer de LV
        $verificationUrl=route('verify.email');
        
        Mail::to($request->get('email'))->send( new AccountVerificationMail($verificationUrl, $token));        
        
        return back()->with('mensaje','Exito, se mandaron las instrucciones a tu email, confirma tu cuenta para iniciar sesión');

    }
}
