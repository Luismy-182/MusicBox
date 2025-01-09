<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    //
    public function index(){

        $verification_token=$_GET['token'];
        
        $user=User::where("verification_token", $verification_token)->first(); //en lugar de get que trae todos, agregamos first para que nos traiga el primer valor y no usemos $user[0]
        
        if(!$user){ //empty($user) es lo mismo
            return response('Error token no valido');
        }else{
            //funciono :D
              $user->email_verified_at=now();
              $user->verification_token='';
              $user->save();

           //no sirve // User::updated([
            //     'email_verified_at'=>now(),
            //     'verification_token'=>''
            // ]);

            //no funciono
            // $user->update([
            //     'email_verified_at'=>now(),
            //     'verification_token'=>''
            // ]);


        }


        //funnciona pero puede ser mejor
        //dd($user[0]->email);
        // if(empty($user) ){
        //     return back()->with('mensaje','Error el token no es valido');
        // }else{
        //     //modificar usuario a confirmado
        //     $user[0]->email_verified_at=now();
        //     $user[0]->verification_token='';
        //     $user[0]->save();
        // }


        return view('auth.verify-email');
    }


}
