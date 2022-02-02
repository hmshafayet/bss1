<?php

namespace App\Http\Controllers\Backend;

use App\Models\Book;
use App\Models\Borrow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class AdminController extends Controller
{
    public function admin()
    {
        $book=Book::all()->count();
        $approve=Borrow::where('status','Approved')->count();
        $return=Borrow::where('status','return')->count();
        $cancel=Borrow::where('status','Canceled')->count();
        $student=User::where('role','customer')->count();
        $pending=Borrow::where('status','pending')->count();
        
       
        return view('admin.pages.home', compact('book','approve','return','cancel','student','pending'));
    }
}