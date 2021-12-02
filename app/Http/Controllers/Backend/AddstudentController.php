<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class AddstudentController extends Controller
{
    public function addstudent()
    {
        return view('admin.pages.addstudent');
    }
    public function submitstudent(Request $request)
    {
        // dd($request->all()); 
    Student::create([   
        'name'=>$request->name,
        'student_id'=>$request->studentid,
        'email'=>$request->email,
        'blood_group'=>$request->bloodgroup,
        'password'=>$request->password,

    ]);
    return redirect()->back();
    }
}