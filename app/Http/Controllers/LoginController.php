<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {//terminar validação de usuário
        $email=$request->post('email');
        $pass=$request->post('password');
        if(isset($email,$pass)){
            return view('home');
        }else{
            return view('login');
        }
    }
}
