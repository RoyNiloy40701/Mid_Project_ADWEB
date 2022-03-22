<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function list(){
        $products=Product::all();
        return view('product.list')->with ('products',$products);  
    }

    public function add(){
        return view('product.add');
    }

    public function productAddSubmit(Request $req){

        $this->validate($req ,
            [
                'pname'=>'required' ,
                'pshop'=>'required ',
                'pdescription'=>'required',
                'pbprice'=>'required',
                'pstock'=>'required',
                'pimage'=>'required'
            ],
             [
                    'pname.required'=>'Please provide Product name',
                    'pshop.required'=>'Please provide Shop  name',
                    'pdescription.required'=>'Please provide Product Description',
                    'pbprice.required'=>'Please provide Basic Price',
                    'pstock.required'=>'Please provide Product Stock',
                    'pimage.required'=>'Please provide Product image',

                    // 'uname.max'=>'Username should not exceed 15 characters',
                    // 'uname.min'=>'Username should contain at least 5 characters',
                    // 'name.max'=>'Username should not exceed 15 characters',
                    // 'name.min'=>'Username should contain at least 5 characters',
        
             ]
             );
             //end validation
            $pd=new Product();
            $pd->PNAME = $req->pname;
            $pd->PSHOP= $req->pshop ;
            $pd->PDESCRIPTION = $req->pdescription;
            $pd->PBPRICE = $req->pbprice;
            $pd->PSTOCK = $req->pstock;
            if($req->hasfile('pimage')){
                $file=$req->file('pimage');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'. $extension;
                $file->move('uploads/products/',$filename);
                $pd->PPICTURE = $filename;

            }

            $pd->save();

            return redirect()->route('product.list');

     
    }

    public function details(Request $req){
        $pd = Product::where('PID',decrypt($req->id))->first();
        return view('product.details')->with('pd',$pd);
   
    }

    public function edit(Request $req){
        $pd = Product::where('PID',decrypt($req->id))->first();
        return view('product.edit')->with('pd',$pd);
    }


    public function productEditSubmit(Request $req){
       
       
            $pd = Product::where('PID',decrypt($req->id))->first();
           
       
            $pd->PNAME = $req->pname;
            $pd->PSHOP= $req->pshop ;
            $pd->PDESCRIPTION = $req->pdescription;
            $pd->PBPRICE =$req->pbprice;
            $pd->PSTOCK = $req->pstock;
            
            if($req->hasfile('pimage')){
                $file=$req->file('pimage');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'. $extension;
                $file->move('uploads/products/',$filename);
                $pd->PPICTURE = $filename;

            }
            $pd->update();
            return redirect()->route('product.list');

     
    }
    public function delete(Request $req){
        $pd = Product::where('PID',decrypt($req->id))->delete();
          return redirect()->route('product.list');

    }
  
}
