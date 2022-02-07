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
        $bookimage=null;
        if($request->hasFile('image')){
            
            $bookimage=date('Ymdhms').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads/book/',$bookimage);

        }
    //    dd($request->all()); 
       Book::create([
           //bam dike likhty hoy db er field er name, r dan dike likhty hoy input field name//
           'book_name'=>$request->booktitle,
           'ssl_no'=>$request->bookid,
           'author_name'=>$request->authorname,
           'image'=>$bookimage,
           'category'=>$request->category,
           'description'=>$request->bookdescription,
           'quantity'=>$request->number,
       ]);
       return redirect()->back();
    }
    
    public function viewbookreport(){
        $viewbookreport=Book::all();
    //    dd($viewbookreport);
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
        try
        {
            $book =Book::find($id)->delete();

            return redirect ()->back()->with('success','Book Deleted Succesfully');
          
          } catch (\Exception $e) {
            return redirect ()->back()->with('success','You can not delete book as book has borrow.');
        
          }
    //     Book::find($id)->delete();
    //     return redirect ()->back()->with('success','Book Deleted Succesfully');
    //    // dd($book);

    }

    public function bookedit($id)
    {
        $book=Book::find($id);
        
        $categories=Category::all();
        return view ('admin.pages.bookedit',compact('categories','book'));
    }
   public function bookupdate(Request $request, $id)
   {
    $book=Book::find($id);
    // dd($request->all());
    
    $image_name=$book->image;
    //              step 1: check image exist in this request.
            if($request->hasFile('image'))
            {
                // step 2: generate file name
                $image_name=date('Ymdhis') .'.'. $request->file('image')->getClientOriginalExtension();
    
                //step 3 : store into project directory
    
                $request->file('image')->storeAs('/uploads/book',$image_name);
    
            }
    

    $book=Book::find($id);
    $book->update([
           'book_name'=>$request->booktitle,
           'ssl_no'=>$request->bookid,
           'author_name'=>$request->authorname,
           'image'=>$image_name,
           'category'=>$request->category,
           'description'=>$request->bookdescription,
           'price'=>$request->bookid,
           'quantity'=>$request->number,

    ]);
    return redirect ()->route('bookreport')->with('message','Book List Updated');
   }
}