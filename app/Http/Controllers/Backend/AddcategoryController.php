<?php

namespace App\Http\Controllers\Backend;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddcategoryController extends Controller
{
    public function addcategory()
    {
        $addcategory=Category::all();
        return view('admin.pages.addcategory',compact('addcategory'));
    }
    public function submitcategory(Request $request)
    {
         //dd($request->all()); 
       Category::create([
           'categoryname'=>$request->categoryname,
       ]);
       return redirect()->back();
    }
    public function categorydelete($category_id)
    {
       // dd($category_id);
        Category::find($category_id)->delete();
        return redirect ()->back()-> with('success', "Category Deleted Succesfully");
        // dd($category);

    }
}