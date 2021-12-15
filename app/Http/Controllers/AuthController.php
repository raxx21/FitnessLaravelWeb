<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function welcome(){
        // echo($login);
        return view('welcome',['tag'=>'home']);
    }
}
