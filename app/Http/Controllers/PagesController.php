<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager;

class PagesController extends Controller
{
    //
    public function login(){
        return view('home.login');
      
    }
    public function loginSubmit(Request $req){
        $this->validate($req ,
        [
          
            'cusemail'=>'required ',
            'cuspass'=>'required'
            
        ],
         [
                'cusemail.required'=>'Please provide your  email',
                'cuspass.required'=>'Please provide password',
                

                // 'uname.max'=>'Username should not exceed 15 characters',
                // 'uname.min'=>'Username should contain at least 5 characters',
                // 'name.max'=>'Username should not exceed 15 characters',
                // 'name.min'=>'Username should contain at least 5 characters',
    
         ]
         );
       
        $empo = Manager::where('MEMAIL', $req->cusemail)->first();
       
        if($empo){
            $req->session()->put('user', $empo->MNAME);
            
            return redirect()->route('employee.list');
        }

    }
    public function logout(){
        session()->forget('user');
    }
    public function registration(){
        return view('home.registration');
      
    }
}
