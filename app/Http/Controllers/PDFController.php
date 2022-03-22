<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    //
    public function employeeList(){
        $employees=Employee::all();
        return view('pdf.PDFemployee')->with ('employees',$employees);  

    }
    public function pdfGenerate(){
        $employees=Employee::all();
        $pdf_view=PDF::loadview('pdf.pdf_convert',compact('employees'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf_view->download('employee.pdf');
        
       
    }
}
