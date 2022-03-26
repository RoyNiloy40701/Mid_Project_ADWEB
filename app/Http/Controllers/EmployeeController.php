<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function list(){
        $employees=Employee::all();
        return view('employee.list')->with ('employees',$employees);  
       
    }
    public function add(){
        return view('employee.add');
    }
    
    public function details(Request $req){
      
        $em = Employee::where('EID',decrypt($req->id))->first();
        return view('employee.details')->with('em',$em);
    }


 
    public function employeeAddSubmit(Request $req){
        
        $this->validate($req ,
        [
            'ename'=>'required' ,
            'eemail'=>'required ',
            'ephone'=>'required',
            'epassword'=>'required',
            'esalary'=>'required',
            'eschedule'=>'required',
            'eimage'=>'required',
            'eaddress'=>'required'
        ],
         [
                'ename.required'=>'Please provide employee name',
                'eemail.required'=>'Please provide email ',
                'ephone.required'=>'Please provide phone no',
                'epassword.required'=>'Please provide password',
                'esalary.required'=>'Please provide salary',
                'eschedule.required'=>'Please provide work schedule',
                'eimage.required'=>'Please provide employee image',
                'eaddress.required'=>'Please provide address',

                // 'uname.max'=>'Username should not exceed 15 characters',
                // 'uname.min'=>'Username should contain at least 5 characters',
                // 'name.max'=>'Username should not exceed 15 characters',
                // 'name.min'=>'Username should contain at least 5 characters',
    
         ]
         );
        
         //end validation
        $em=new Employee();
        $em->ENAME = $req->ename;
        $em->EEMAIL= $req->eemail ;
        $em->EPASSWORD = md5($req->epassword);
        $em->EPHONE = $req->ephone;
        $em->ESALARY = $req->esalary;
        $em->EADDRESS = $req->eaddress;
        $em->ESCHEDULE = $req->eschedule;
        if($req->hasfile('eimage')){
            $file=$req->file('eimage');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'. $extension;
            $file->move('uploads/employees/',$filename);
            $em->EPICTURE = $filename;

        }
        $em->save();

        return redirect()->route('employee.list');

    }


    public function edit(Request $req){
        $em = Employee::where('EID',decrypt($req->id))->first();
        
        return view('employee.edit')->with('em',$em);
    }


    public function employeeEditSubmit(Request $req){
        
        $em = Employee::where('EID',decrypt($req->id))->first();
        $em->ENAME = $req->ename;
        $em->EEMAIL= $req->eemail ;
        $em->EPASSWORD = md5($req->epassword);
        $em->EPHONE = $req->ephone;
        $em->ESALARY = $req->esalary;
        $em->EADDRESS = $req->eaddress;
        $em->ESCHEDULE = $req->eschedule;
        if($req->hasfile('eimage')){
            $file=$req->file('eimage');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'. $extension;
            $file->move('uploads/employees/',$filename);
            $em->EPICTURE = $filename;

        }
        $em->save();
       
        return redirect()->route('employee.list');

 

    }

    public function delete(Request $req){
        $em = Employee::where('EID',decrypt($req->id))->delete();
          return redirect()->route('employee.list');

    }

  
    }
