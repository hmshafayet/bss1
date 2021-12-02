<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class AddbookController extends Controller
{
    public function addbook()
    {
        return view('admin.pages.addbook');
    }
    public function submitbook(Request $request)
    {
       //dd($request->all()); 
       Book::create([
           //bam dike likhty hoy db er field er name, r dan dike likhty hoy input field name//
           'book_name'=>$request->booktitle,
           'ssl_no'=>$request->bookid,
           'author_name'=>$request->authorname,
           'description'=>$request->bookdescription,
           'price'=>$request->bookid,
           'quantity'=>$request->number,
       ]);
       return redirect()->back();
    }
    public function viewbookreport(){
        $viewbookreport=Book::all();
        // dd($viewbookreport);
        return view('admin.pages.bookreport',compact('viewbookreport'));
    }

}