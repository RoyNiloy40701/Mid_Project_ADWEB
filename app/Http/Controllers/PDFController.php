<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Product;
use PDF;

class PDFController extends Controller
{
    //
  
      
    public function pdfEmpGenerate(){
        $employees=Employee::all();
        $pdf_view=PDF::loadview('pdf.PdfEmp',compact('employees'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf_view->download('employee.pdf');
        
       
    }
    public function pdfProductGenerate(){
        $products=Product::all();
        $pdf_view=PDF::loadview('pdf.PdfProduct',compact('products'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf_view->download('product.pdf');
        
       
    }
}
