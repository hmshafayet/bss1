<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;


class AddbookController extends Controller
{
    public function addbook()
    {
        $categories=Category::all();
        
        return view('admin.pages.addbook',compact('categories'));
    }
    public function submitbook(Request $request)
    {
       //dd($request->all()); 
       Book::create([
           //bam dike likhty hoy db er field er name, r dan dike likhty hoy input field name//
           'book_name'=>$request->booktitle,
           'ssl_no'=>$request->bookid,
           'author_name'=>$request->authorname,
           'category'=>$request->category,
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

    public function bookdetails($id)
    {
        $book=Book::find($id);
       // dd($student);
       return view ('admin.pages.bookdetails',compact('book'));

    }
    public function bookdelete($id)
    {
        Book::find($id)->delete();
        return redirect ()->back()->with('success','Book Deleted Succesfully');
       // dd($book);

    }


}