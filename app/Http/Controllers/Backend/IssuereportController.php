<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Issue;

class IssuereportController extends Controller
{
    public function issuereport()
    {
        $viewissuereports = Issue::all();
        // dd($reports);
        return view('admin.pages.issuereport',compact('viewissuereports'));
    }
}