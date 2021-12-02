<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AddbookController;
use App\Http\Controllers\Backend\BookreportController;
use App\Http\Controllers\Backend\BookrequestController;
use App\Http\Controllers\Backend\AddstudentController;
use App\Http\Controllers\Backend\StudentreportController;
use App\Http\Controllers\Backend\IssuebookController;
use App\Http\Controllers\Backend\IssuereportController;
use App\Http\Controllers\Backend\LogoutController;
use App\Http\Controllers\Backend\AddcategoryController;
/*
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
    return view('admin.pages.home');
});

Route::get('/admin',[AdminController::class,'admin'])->name('admin');
//book
Route::get('/addbook',[AddbookController::class,'addbook'])->name('addbook');
Route::post('/submit/book',[AddbookController::class,'submitbook'])->name('submitbook');
Route::get('/viewbook',[AddbookController::class,'viewbookreport'])->name('viewbookreport');
Route::get('/bookreport',[BookreportController::class,'bookreport'])->name('bookreport');
//
Route::get('/bookrequest',[BookrequestController::class,'bookrequest'])->name('bookrequest');
//user book request
//Route::post('/submit/bookrequest',[BookrequestController::class,'submitbookrequest'])->name('submitbookrequest');
//student
Route::get('/addstudent',[AddstudentController::class,'addstudent'])->name('addstudent');
Route::post('/submit/student',[AddstudentController::class,'submitstudent'])->name('submitstudent');
Route::get('/studentreport',[StudentreportController::class,'studentreport'])->name('studentreport');
Route::get('/issuebook',[IssuebookController::class,'issuebook'])->name('issuebook');
Route::post('/submit/issue',[IssuebookController::class,'submitissue'])->name('submitissue');
Route::get('/issuereport',[IssuereportController::class,'issuereport'])->name('issuereport');
Route::get('/logout',[LogoutController::class,'logout'])->name('logout');
Route::get('/addcategory',[AddcategoryController::class,'addcategory'])->name('addcategory');
Route::post('/submit/category',[AddcategoryController::class,'submitcategory'])->name('submitcategory');