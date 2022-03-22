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

Route::get('/login',[PagesController::class,'login'])->name('login');
Route::post('/login',[PagesController::class,'loginSubmit'])->name('login');
Route::get('/logout',[PagesController::class,'logout'])->name('logout');

Route::get('/registration',[PagesController::class,'registration'])->name('registration');
Route::get('/manager',[ManagerController::class,'manager'])->name('manager');

// employee route 
Route::get('/employee/list',[EmployeeController::class,'list'])->name('employee.list')->middleware('validManager');
Route::get('/employee/add',[EmployeeController::class,'add'])->name('employee.add');
Route::get('/employee/details',[EmployeeController::class,'details'])->name('employee.details');
Route::get('/employee/edit/{id}',[EmployeeController::class,'edit'])->name('employee.edit');

// employee route  post
Route::post('/employee/add',[EmployeeController::class,'employeeAddSubmit'])->name('employee.add');
Route::post('/employee/edit/{id}',[EmployeeController::class,'employeeEditSubmit'])->name('employee.update');
Route::get('/employee/delete/{id}',[EmployeeController::class,'delete'])->name('employee.delete');


// product route
Route::get('/product/list',[ProductController::class,'list'])->name('product.list');
Route::get('/product/add',[ProductController::class,'add'])->name('product.add');
Route::get('/product/details',[ProductController::class,'details'])->name('product.details');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');

//product route post
Route::post('/product/add',[ProductController::class,'productAddSubmit'])->name('product.add');
Route::post('/product/edit',[ProductController::class,'productEditSubmit'])->name('product.update');
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');


// category route
Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');
Route::get('/category/add',[CategoryController::class,'add'])->name('category.add');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');

//category route post
Route::post('/category/add',[CategoryController::class,'categoryAddSubmit'])->name('category.add');
Route::post('/category/edit/{id}',[CategoryController::class,'categoryEditSubmit'])->name('category.update');
Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

//custromer route
Route::post('/customer/reg',[CustomerController::class,'registration'])->name('customer.reg');
Route::get('/customer/list',[CustomerController::class,'list'])->name('customer.list');
Route::get('/customer/details',[CustomerController::class,'details'])->name('customer.details');
Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');

//order route
Route::get('/order/list',[OrderController::class,'list'])->name('order.list');
Route::get('/order/details',[OrderController::class,'details'])->name('order.details');
Route::get('/order/delete/{id}',[OrderController::class,'delete'])->name('order.delete');


//routes for pdf 
Route::get('/pdf/employee/convert/',[PDFController::class,'pdfGenerate'])->name('employee.pdf');


