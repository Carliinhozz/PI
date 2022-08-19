<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {//salvar no banco
     $name=$request->post('name');
     $email=$request->post('email');
     $pass=$request->post('password');   
     if(isset($pass,$email,$name)){
        return view('home');
     }else{
        return view('register');
     }
        # code...
    }
}
