<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\Backend\LogoutController;
use App\Http\Controllers\Backend\AddbookController;
use App\Http\Controllers\Backend\IssuebookController;
use App\Http\Controllers\Backend\AddstudentController;
use App\Http\Controllers\Backend\BookreportController;
use App\Http\Controllers\Backend\AddcategoryController;
use App\Http\Controllers\Backend\BookrequestController;
use App\Http\Controllers\Backend\IssuereportController;
use App\Http\Controllers\frontend\BorrowbookController;
use App\Http\Controllers\Backend\StudentreportController;
use App\Http\Controllers\Backend\UserController as BackendUser;
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
Route::get('/borrowbook',[BorrowbookController::class,'borrowbook'])->name('borrowbook');

Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/signup',[UserController::class,'signupform'])->name('user.signup');
Route::post('/signup/store',[UserController::class,'signupformpost'])->name('user.signup.store');


Route::get('/login',[UserController::class,'login'])->name('customer.login');
Route::post('/login/post',[UserController::class,'loginpost'])->name('customer.login.post');
Route::get('/viewprofile',[UserController::class,'viewprofile'])->name('view.profile');
Route::get('/cancel/{id}',[UserController::class,'cancel'])->name('cancel');
Route::get('/requestdetails/{id}',[UserController::class,'requestdetails'])->name('request.details');

Route::group(['middleware'=>'web_auth'],function (){
    Route::get('/add-to-cart/{id}',[BorrowbookController::class,'addtocart'])->name('cart.add');
    Route::get('/get-cart',[BorrowbookController::class,'getcart'])->name('cart.get');
    Route::get('/clear-cart',[BorrowbookController::class,'clearcart'])->name('cart.clear');
    Route::post('/confirm-book',[BorrowbookController::class,'confirmbook'])->name('confirm.book');
   

    // Route::get('/confirm-book',[BorrowbookController::class,'confirmbook'])->name('confirm.book');

});

Route::group(['prefix'=>'customer','middleware'=>'auth'],function(){

    Route::get('/logout',[UserController::class,'logout'])->name('customer.logout');

});



Route::get('/', function () {

    $books=Book::all();
    
    return view('website.pages.home',compact('books'));
});

// Route::group(['prefix'=>'website'],function(){
// });


// Route::get('/', function () {
//     return view('admin.pages.home');
// });

Route::get('admin/login',[BackendUser::class,'login'])->name('admin.login');
Route::post('admin/login/post',[BackendUser::class,'loginpost'])->name('admin.login.post');


Route::group(['prefix'=>'admin','middleware'=>['auth','role']],function(){

Route::get('/',[AdminController::class,'admin'])->name('admin');
Route::get('/logout',[BackendUser::class,'logout'])->name('logout');
//book
Route::get('/addbook',[AddbookController::class,'addbook'])->name('addbook');
Route::post('/submit/book',[AddbookController::class,'submitbook'])->name('submitbook');
Route::get('/viewbook',[AddbookController::class,'viewbookreport'])->name('viewbookreport');
Route::get('/bookreport',[BookreportController::class,'bookreport'])->name('bookreport');
Route::get('/book/details/{id}',[AddbookController::class,'bookdetails'])->name('bookdetails');
Route::get('/book/delete/{id}',[AddbookController::class,'bookdelete'])->name('bookdelete');
Route::get('/book/edit/{id}',[AddbookController::class,'bookedit'])->name('bookedit');
Route::put('/book/update/{id}',[AddbookController::class,'bookupdate'])->name('bookupdate');
//
Route::get('/bookrequest',[BookrequestController::class,'bookrequest'])->name('bookrequest');
Route::get('/approve/{id}',[BookrequestController::class,'approve'])->name('approve');
Route::get('/boookrequestdetails/{id}',[BookrequestController::class,'bookrequestdetails'])->name('bookrequestdetails');
// Route::get('/viewbookrequest/{id}',[BookrequestController::class,'viewbookrequest'])->name('viewbookrequest');
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


//category
Route::get('/addcategory',[AddcategoryController::class,'addcategory'])->name('addcategory');
Route::post('/submit/category',[AddcategoryController::class,'submitcategory'])->name('submitcategory');
Route::get('/category/delete/{category_id}',[AddcategoryController::class,'categorydelete'])->name('category.delete');

Route::get('/customers',[BackendUser::class,'customerlist'])->name('customer.list');
Route::get('/users',[BackendUser::class,'userlist'])->name('user.list');

});