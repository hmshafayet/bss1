<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BorrowbookController extends Controller
{
public function borrowbook()
{
    return view('website.pages.borrowbook');
}
}
