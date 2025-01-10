<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordResetController extends Controller
{
    //

    public function index(){

        return view('auth.passwordReset');
    }


    public function store(Request $request){
        $this->validate($request,[
            'email'=>'required|email|max:30',
        ]);
    }
}
