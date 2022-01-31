<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class AddstudentController extends Controller
 {
//     public function addstudent()
//     {
//         return view('admin.pages.addstudent');
//     }
    
    // public function submitstudent(Request $request)
    // {
    //     $studentimage=null;
    //     if($request->hasFile('image'))
    //     {
            
    //         $studentimage=date('Ymdhms').'.'.$request->file('image')->getClientOriginalExtension();
    //         $request->file('image')->storeAs('/uploads/student/',$studentimage);
    //     }

    //     // dd($request->all()); 
    // Student::create([   
    //     'image'=>$studentimage,
    //     'name'=>$request->name,
    //     'student_id'=>$request->studentid,
    //     'email'=>$request->email,
    //     'blood_group'=>$request->bloodgroup,
    //     'password'=>$request->password,

    // ]);
    // return redirect()->back();

    // }
    // public function viewstudentreport(){
    //     $viewstudentreport=Student::all();
    //     // dd($viewbookreport);
    //     return view('admin.pages.studentreport',compact('viewstudentreport'));
    // }

    // public function studentdetails($id)
    // {
    //     $student=Student::find($id);
    //    // dd($student);
    //    return view ('admin.pages.studentdetails',compact('student'));

    // }
    // public function studentdelete($id)
    // {
    //     Student::find($id)->delete();
    //     return redirect ()->back()->with('success','Student Deleted Succesfully');
    //    // dd($student);

    // }
}