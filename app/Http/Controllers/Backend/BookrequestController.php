<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bookrequest;

class BookrequestController extends Controller
{
    public function bookrequest()
    {
        return view('admin.pages.bookrequest');
    }
    public function submitbookrequest(Request $request)
    {
        dd($request->all()); 
       Request::create ([
           'bookname'=>$request->booname,
           'bookid'=>$request->bookid,
           'authorname'=>$request->authorname,
       ]);
       return redirect()->back();
    }
    

}