<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookreportController extends Controller
{
    public function bookreport()
    {
        $viewbookreport = Book::all();
        return view('admin.pages.bookreport',compact('viewbookreport'));
    }
}