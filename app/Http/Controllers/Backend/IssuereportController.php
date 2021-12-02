<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IssuereportController extends Controller
{
    public function issuereport()
    {
        return view('admin.pages.issuereport');
    }
}