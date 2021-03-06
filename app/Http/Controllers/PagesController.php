<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager;
Use Alert;


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
        $empo = Manager::where('MEMAIL',$req->cusemail)
        ->where('MPASSWORD',md5($req->cuspass))
        ->first();
     
       
    
        if($empo){
           // $req->session()->put('mid',$empo->MID,'mname',$empo->MNAME,);
             $req->session()->put('mname', $empo->MNAME);
             $req->session()->put('mid', $empo->MID);
             Alert::success('Login Successfully', 'Welcome to your dashboard');
            return redirect()->route('manager');
        }
        Alert::error('Login Failed', 'Check email or password');
        return redirect()->route('login');

          
        

    }


    public function logout(){
        session()->forget('mname');
        return view('home.login');
    }
    public function registration(){
        return view('home.registration');
      
    }

  
   
   
}
