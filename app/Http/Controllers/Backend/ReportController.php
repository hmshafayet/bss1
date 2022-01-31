<?php

namespace App\Http\Controllers\Backend;

use App\Models\Borrow;
use App\Models\Borrowdetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function report(){
        $viewreport =Borrowdetail::all();
        return view('admin.pages.report',compact('viewreport'));
    }
    public function searchreport(Request $request)
    {

        $viewreport=Borrowdetail::whereBetween('created_at',[$request->from,$request->to])->get();
        // $viewreport=Borrow::whereBetween('created_at',[$request->from,$request->to])->get();

;
        return view('admin.pages.report',compact('viewreport'));

    }
}
