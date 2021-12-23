<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $books=Book::all();
    
        return view('website.pages.home',compact('books'));

    }
}
