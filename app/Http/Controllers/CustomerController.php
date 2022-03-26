<?php

namespace App\Http\Controllers;
use  App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function list(){
        $customers=Customer::all();
        return view('customer.list')->with ('customers',$customers);  
    }

      
    public function details(Request $req){
      
        $cus = Customer::where('CID',decrypt($req->id))->first();
        return view('customer.details')->with('cus',$cus);
    }

    public function delete(Request $req){
        $pd = Customer::where('CID',decrypt($req->id))->delete();
          return redirect()->route('customer.list');

    }
    public function orderDetails(Request $req){
      
        $orders = Customer::where('CID',decrypt($req->id))->first();
        if($orders){
            $orders->orderList = $orders->orderList; 
         
           
            return view('customer.customerOrder')->with('orders',$orders);
       
              
        }
     
    }
  
    public function registration(Request $req){

        $this->validate($req ,
            [
                'cusname'=>'required' ,
                'cusemail'=>'required ',
                'cuspass'=>'required',
                'cusaddress'=>'required',
                'cusphone'=>'required',
                'cusimage'=>'required'
            ],
             [
                    'cusname.required'=>'Please provide your name',
                    'cusemail.required'=>'Please provide your  email',
                    'cuspass.required'=>'Please provide password',
                    'cusaddress.required'=>'Please provide your address',
                    'cusphone.required'=>'Please provide your phone',
                    'cusimage.required'=>'Please provide your image',

                    // 'uname.max'=>'Username should not exceed 15 characters',
                    // 'uname.min'=>'Username should contain at least 5 characters',
                    // 'name.max'=>'Username should not exceed 15 characters',
                    // 'name.min'=>'Username should contain at least 5 characters',
        
             ]
             );
             //end validation
            $pd=new Customer();
            $pd->CNAME = $req->cusname;
            $pd->CEMAIL= $req->cusemail ;
            $pd->CPASSWORD = md5($req->cuspass);
            $pd->CADDRESS = $req->cusaddress;
            $pd->CPHONE = $req->cusphone;
            if($req->hasfile('cusimage')){
                $file=$req->file('cusimage');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'. $extension;
                $file->move('uploads/customers/',$filename);
                $pd->CPICTURE = $filename;

            }

            $pd->save();

            return redirect()->route('login');

     
    }
}
