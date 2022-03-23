<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    //
    public function list(){
        $orders=Order::all();
        return view('order.list')->with ('orders',$orders);  
    }
    public function details(Request $req){
      
        $od = Order::where('OID',decrypt($req->id))->first();
        if($od){
            $od->customer = $od->customer; 
           
            return view('order.details')->with('od',$od);
       
              
        }
     
    }
}
