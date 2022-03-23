<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PDFController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//login route
Route::get('/login',[PagesController::class,'login'])->name('login');
Route::post('/login',[PagesController::class,'loginSubmit'])->name('login');
Route::get('/logout',[PagesController::class,'logout'])->name('logout');

Route::get('/registration',[PagesController::class,'registration'])->name('registration');
Route::get('/manager',[ManagerController::class,'manager'])->name('manager')->middleware('validManager');

// employee route 
Route::get('/employee/list',[EmployeeController::class,'list'])->name('employee.list')->middleware('validManager');
Route::get('/employee/add',[EmployeeController::class,'add'])->name('employee.add')->middleware('validManager');
Route::get('/employee/details',[EmployeeController::class,'details'])->name('employee.details')->middleware('validManager');
Route::get('/employee/edit/{id}',[EmployeeController::class,'edit'])->name('employee.edit')->middleware('validManager');

// employee route  post
Route::post('/employee/add',[EmployeeController::class,'employeeAddSubmit'])->name('employee.add')->middleware('validManager');
Route::post('/employee/edit/{id}',[EmployeeController::class,'employeeEditSubmit'])->name('employee.update')->middleware('validManager');
Route::get('/employee/delete/{id}',[EmployeeController::class,'delete'])->name('employee.delete')->middleware('validManager');


// product route
Route::get('/product/list',[ProductController::class,'list'])->name('product.list')->middleware('validManager');
Route::get('/product/add',[ProductController::class,'add'])->name('product.add')->middleware('validManager');
Route::get('/product/details/{id}',[ProductController::class,'details'])->name('product.details')->middleware('validManager');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit')->middleware('validManager');


//product route post
Route::post('/product/add',[ProductController::class,'productAddSubmit'])->name('product.add')->middleware('validManager');
Route::post('/product/edit',[ProductController::class,'productEditSubmit'])->name('product.update')->middleware('validManager');
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete')->middleware('validManager');


// category route
Route::get('/category/list',[CategoryController::class,'list'])->name('category.list')->middleware('validManager');
Route::get('/category/add',[CategoryController::class,'add'])->name('category.add')->middleware('validManager');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit')->middleware('validManager');

//category route post
Route::post('/category/add',[CategoryController::class,'categoryAddSubmit'])->name('category.add')->middleware('validManager');
Route::post('/category/edit/{id}',[CategoryController::class,'categoryEditSubmit'])->name('category.update')->middleware('validManager');
Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete')->middleware('validManager');
Route::get('/category/details/{id}',[CategoryController::class,'details'])->name('category.details')->middleware('validManager');

//custromer route
Route::post('/customer/reg',[CustomerController::class,'registration'])->name('customer.reg')->middleware('validManager');
Route::get('/customer/list',[CustomerController::class,'list'])->name('customer.list')->middleware('validManager');
Route::get('/customer/details/{id}',[CustomerController::class,'details'])->name('customer.details')->middleware('validManager');
Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete')->middleware('validManager');

//order route
Route::get('/order/list',[OrderController::class,'list'])->name('order.list')->middleware('validManager');
Route::get('/order/details/{id}',[OrderController::class,'details'])->name('order.details')->middleware('validManager');
Route::get('/order/delete/{id}',[OrderController::class,'delete'])->name('order.delete')->middleware('validManager');


//routes for pdf 
Route::get('/pdf/employee/convert/',[PDFController::class,'pdfEmpGenerate'])->name('employee.pdf')->middleware('validManager');
Route::get('/pdf/product/convert/',[PDFController::class,'pdfProductGenerate'])->name('product.pdf')->middleware('validManager');
Route::get('/pdf/orderdetails/convert/{id}',[PDFController::class,'pdfOrderGenerate'])->name('orderDetails.pdf')->middleware('validManager');


//manager profile

Route::get('/myProfile/',[PagesController::class,'myProfile'])->name('myProfile.view')->middleware('validManager');
// Route::post('/myProfile',[PagesController::class,'myProfileEditSubmit'])->name('myProfile')->middleware('validManager');