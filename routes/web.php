<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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
Route::get('/admin',[AdminController::class,'admin']);

// employee route 
Route::get('/employee/list',[EmployeeController::class,'list'])->name('employee.list');
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

//produc route post
Route::post('/product/add',[ProductController::class,'productAddSubmit'])->name('product.add');
Route::post('/product/edit/{id}',[ProductController::class,'productEditSubmit'])->name('product.update');
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');


// category route
Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');
Route::get('/category/add',[CategoryController::class,'add'])->name('category.add');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');

//category route post
Route::post('/category/add',[CategoryController::class,'categoryAddSubmit'])->name('category.add');
Route::post('/category/edit/{id}',[CategoryController::class,'categoryEditSubmit'])->name('category.update');
Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
