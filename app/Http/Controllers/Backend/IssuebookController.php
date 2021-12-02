<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Issue;

class IssuebookController extends Controller
{
    public function issuebook()
    {
        return view('admin.pages.issuebook');
    }
    public function submitissue(Request $request)
    {
      //dd($request->all());
        Issue::create ([
            'studentname'=>$request->studentname,
            'studentid'=>$request->studentid,
            'bookname'=>$request->bookname,
            'bookid'=>$request->bookid,
            'issuedate'=>$request->issuedate,
            'returndate'=>$request->returndate,


        ]);
        return redirect()->back();
    }
}