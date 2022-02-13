<?php

namespace App\Http\Controllers\Backend;

use App\Models\Borrow;
use App\Models\Borrowdetail;
use App\Models\Bookrequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookrequestController extends Controller
{
    public function bookrequest()

    {
        $borrow=Borrow::with('user')->get();
        // dd($borrow);
        return view('admin.pages.bookrequest',compact('borrow') );
    }
    public function submitbookrequest(Request $request)
    {
        // dd($request->all()); 
       Request::create ([
           'bookname'=>$request->booname,
           'bookid'=>$request->bookid,
           'authorname'=>$request->authorname,
       ]);
       return redirect()->back();
    }
    
    public function approve($id)
   {
      $data=Borrow::find($id);
      $data->update(['status'=>'Approved']);
      return redirect ()->back();
   }
   public function receive($id)
   {
    $data=Borrow::find($id);
    $data->update(['status'=>'Received']);
    return redirect ()->back();
   }
   public function bookrequestdetails($id)
   {
    $bookrequest=Borrowdetail::with('book')->where('borrow_id',$id)->get();
    
    return view ('admin.pages.bookrequestdetails',compact('bookrequest'));

   }
}