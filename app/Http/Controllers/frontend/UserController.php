<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function signupform(){
        return view ('website.pages.signup');
    }
    public function signupformpost(Request $request)
    {
       //dd($request->all());
       User::create([
       'name'=>$request->user_name,
       'email'=>$request->user_email,
       'password'=>$request->user_password,
       'role'=>'customer',
       'mobile'=>bcrypt($request->user_mobile),
       ]);
       return redirect()->back()->with('success','SignUp Successfull');
    }
}
