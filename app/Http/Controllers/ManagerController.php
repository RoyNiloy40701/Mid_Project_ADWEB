<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager;

class ManagerController extends Controller
{
    //
    public function manager(){
        return view('manager.manager');
    } 
    public function myProfile(){
        $name = Session()->get('mid');
          
       $man = Manager::where('MID',$name)->first();
    
        return view('manager.managerProfile')->with('man',$man);
       
     
    }

    public function managerProfileEditSubmit(Request $req){
        $man = Manager::where('MID',decrypt($req->id))->first();
        $man->MNAME = $req->ename;
        $man->MEMAIL= $req->eemail ;
        $man->MPASSWORD = md5($req->epassword);
        $man->MPHONE = $req->ephone;
        $man->MADDRESS = $req->eaddress;
      
        if($req->hasfile('eimage')){
            $file=$req->file('eimage');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'. $extension;
            $file->move('uploads/managers/',$filename);
            $man->MPICTURE = $filename;

        }
        $man->save();
     

        return redirect()->route('myProfile.view');
    

    }


    public function managerProfileEdit(Request $req){
        $man = Manager::where('MID',decrypt($req->id))->first();
        
        return view('manager.managerProfileEdit')->with('man',$man);
    }
   
}
