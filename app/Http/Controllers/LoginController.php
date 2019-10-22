<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
     public function index2(){
        return view('login');
    }

    public function index3(){
        return view('dashboard');
    }
}
