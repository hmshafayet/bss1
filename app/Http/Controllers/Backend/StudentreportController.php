<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentreportController extends Controller
{
    public function studentreport()
    {
        $reports = Student::all();
        // dd($reports);
        return view('admin.pages.studentreport',compact('reports'));
    }
}