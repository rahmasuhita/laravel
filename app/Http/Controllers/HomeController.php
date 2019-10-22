<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(){
    	return view('login');
    }

    function pertama(){
    	return view('dashboard');
    }

    function kedua(){
    	return view('welcome');
    }

    function ketiga(){
    	return view('login');
    }
}
