<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookreportController extends Controller
{
    public function bookreport()
    { 
        $key=null;
        if(request()->search){
            $key=request()->search;
            $viewbookreport = Book::with('categories')
                ->where('book_name','LIKE','%'.$key.'%')
                ->orWhere('author_name','LIKE','%'.$key.'%')
                ->get();
            return view('admin.pages.bookreport',compact('viewbookreport','key'));
        }
        $viewbookreport = Book::with('categories')->get();
        // dd($viewbookreport);
        return view('admin.pages.bookreport',compact('viewbookreport','key'));
    }
}