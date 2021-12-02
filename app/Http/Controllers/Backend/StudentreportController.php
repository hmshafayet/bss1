<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentreportController extends Controller
{
    public function studentreport()
    {
        return view('admin.pages.studentreport');
}
}