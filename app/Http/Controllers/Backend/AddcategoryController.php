<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class AddcategoryController extends Controller
{
    public function addcategory()
    {
        return view('admin.pages.addcategory');
    }
    public function submitcategory(Request $request)
    {
         //dd($request->all()); 
       Category::create([
           'categoryname'=>$request->categoryname,
       ]);
       return redirect()->back();
    }
}