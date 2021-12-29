<?php

namespace App\Http\Controllers\frontend;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(){
        $books=Book::all();
    
        return view('website.pages.home',compact('books'));

    }
}
