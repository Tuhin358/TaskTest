<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index'])->name('login.index');

Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/show-dashboard',[LoginController::class,'show_dashboard'])->name('dashboard');

// Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/create',[CompaniesController::class,'create'])->name('create');
Route::post('/category-store',[CompaniesController::class,'store'])->name('category.store');
Route::get('/all-cat',[CompaniesController::class,'index'])->name('allcat');

Route::get('/cats-edit/{id}',[CompaniesController::class,'edit'])->name('category.edit');
Route::get('/cats-delete/{id}',[CompaniesController::class,'delete'])->name('categorydelete');
Route::post('/cats-update',[CompaniesController::class,'update'])->name('categoryupdate');



Route::get('/creates',[EmployeController::class,'create'])->name('em.create');
Route::post('/employe-store',[EmployeController::class,'store'])->name('employe.store');
Route::get('/all-cats',[EmployeController::class,'index'])->name('employe.allcat');

Route::get('/cat-edit/{id}',[EmployeController::class,'edit'])->name('employe.edit');
Route::get('/cat-delete/{id}',[EmployeController::class,'delete'])->name('employedelete');
Route::post('/cat-update',[EmployeController::class,'update'])->name('employeupdate');







