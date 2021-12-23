<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\Backend\UserController as BackendUser;
use App\Http\Controllers\Backend\LogoutController;
use App\Http\Controllers\Backend\AddbookController;
use App\Http\Controllers\Backend\IssuebookController;
use App\Http\Controllers\Backend\AddstudentController;
use App\Http\Controllers\Backend\BookreportController;
use App\Http\Controllers\Backend\AddcategoryController;
use App\Http\Controllers\Backend\BookrequestController;
use App\Http\Controllers\Backend\IssuereportController;
use App\Http\Controllers\Backend\StudentreportController;
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
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/signup',[UserController::class,'signupform'])->name('user.signup');
Route::post('/signup/store',[UserController::class,'signupformpost'])->name('user.signup.store');


Route::get('/website', function () {

    $books=Book::all();
    
    return view('website.pages.home',compact('books'));
});

// Route::group(['prefix'=>'website'],function(){
// });


Route::get('/', function () {
    return view('admin.pages.home');
});
     Route::group(['prefix'=>'admin'],function(){

Route::get('/admin',[AdminController::class,'admin'])->name('admin');
//book
Route::get('/addbook',[AddbookController::class,'addbook'])->name('addbook');
Route::post('/submit/book',[AddbookController::class,'submitbook'])->name('submitbook');
Route::get('/viewbook',[AddbookController::class,'viewbookreport'])->name('viewbookreport');
Route::get('/bookreport',[BookreportController::class,'bookreport'])->name('bookreport');
Route::get('/book/details/{id}',[AddbookController::class,'bookdetails'])->name('bookdetails');
Route::get('/book/delete/{id}',[AddbookController::class,'bookdelete'])->name('bookdelete');
//
Route::get('/bookrequest',[BookrequestController::class,'bookrequest'])->name('bookrequest');
//user book request
//Route::post('/submit/bookrequest',[BookrequestController::class,'submitbookrequest'])->name('submitbookrequest');
//student
Route::get('/addstudent',[AddstudentController::class,'addstudent'])->name('addstudent');
Route::post('/submit/student',[AddstudentController::class,'submitstudent'])->name('submitstudent');
Route::get('/viewstudent',[AddstudentController::class,'viewstudentreport'])->name('viewstudentreport');
Route::get('/studentreport',[StudentreportController::class,'studentreport'])->name('studentreport');
Route::get('/student/details/{id}',[AddstudentController::class,'studentdetails'])->name('studentdetails');
Route::get('/student/delete/{id}',[AddstudentController::class,'studentdelete'])->name('studentdelete');
//issuebook
Route::get('/issuebook',[IssuebookController::class,'issuebook'])->name('issuebook');
Route::post('/submit/issue',[IssuebookController::class,'submitissue'])->name('submitissue');
Route::get('/viewissue',[IssuebookController::class,'viewissuereport'])->name('viewissuereport');
Route::get('/issuereport',[IssuereportController::class,'issuereport'])->name('issuereport');

Route::get('/logout',[LogoutController::class,'logout'])->name('logout');

//category
Route::get('/addcategory',[AddcategoryController::class,'addcategory'])->name('addcategory');
Route::post('/submit/category',[AddcategoryController::class,'submitcategory'])->name('submitcategory');
Route::get('/category/delete/{category_id}',[AddcategoryController::class,'categorydelete'])->name('category.delete');

Route::get('/customers',[BackendUser::class,'customerlist'])->name('customer.list');
Route::get('/users',[BackendUser::class,'userlist'])->name('user.list');
});