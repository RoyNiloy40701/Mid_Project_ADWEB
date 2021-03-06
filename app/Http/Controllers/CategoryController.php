<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
Use Alert;

class CategoryController extends Controller
{
    //
    public function list(){
        $categorys=Category::all();
        return view('category.list')->with ('categorys',$categorys);  
       
    }
    public function add(){
        return view('category.add');
    }

    public function categoryAddSubmit(Request $req){
        
        $this->validate($req ,
        [
            'cname'=>'required' 
            
        ],
         [
                'cname.required'=>'Please provide category name',
                

                // 'uname.max'=>'Username should not exceed 15 characters',
                // 'uname.min'=>'Username should contain at least 5 characters',
                // 'name.max'=>'Username should not exceed 15 characters',
                // 'name.min'=>'Username should contain at least 5 characters',
    
         ]
         );
        
         //end validation
        $ca=new Category();
        $ca->CATEGORYNAME = $req->cname;
       
        $ca->save();
        Alert::success('Added', 'Category add successfully');
        return redirect()->route('category.list');

 

    }

    public function edit(Request $req){
        $ca = Category::where('CATEGORYID',decrypt($req->id))->first();
        return view('category.edit')->with('ca',$ca);
    }


    public function categoryEditSubmit(Request $req){
        
       
      //end validation
        $ca = Category::where('CATEGORYID',decrypt($req->id))->first();
        $ca->CATEGORYNAME = $req->cname;
        $ca->save();
        Alert::success('Updated', 'Category update successfully');
        return redirect()->route('category.list');

 

    }
    public function details(Request $req){
        $category = Category::where('CATEGORYID',decrypt($req->id))->first();
        if($category){
            
         $category->products = $category->products;   
         
       
        return view('category.details')->with('category',$category);
        }
       

       
   
    }

    
    public function delete(Request $req){
        $em = Category::where('CATEGORYID',decrypt($req->id))->delete();
         Alert::success('Deleted', 'Category delete successfully');
          return redirect()->route('category.list');

    }
}
