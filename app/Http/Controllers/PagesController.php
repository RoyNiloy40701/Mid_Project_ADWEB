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
            $req->session()->put('mname', $empo->MNAME ,'mid',$empo->MID);
            // $req->session()->put('mname', $empo->MNAME);
            
            return redirect()->route('manager');
        }

    }


    public function logout(){
        session()->forget('mname');
        return view('home.login');
    }
    public function registration(){
        return view('home.registration');
      
    }

    public function myProfile(){
        $name = Session()->get('mname');
      
       // $empo = Manager::where('MNAME', $name)->first();
        

        return view('manager.myProfile');
       
     
    }
    public function myProfileEditSubmit(Request $request){
      

        return view('home.registration');

    }
}
