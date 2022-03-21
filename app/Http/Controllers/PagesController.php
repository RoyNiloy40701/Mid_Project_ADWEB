<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function login(){
        return view('home.login');
      
    }
    public function registration(){
        return view('home.registration');
      
    }
}
