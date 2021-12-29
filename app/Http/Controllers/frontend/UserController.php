<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signupform(){
        return view ('website.pages.signup');
    }
    public function signupformpost(Request $request)
    {
       $request->validate([
        'name'=>'required',   
        'email'=>'required|email|unique:users,email',
        'password'=>'required|min:6',
        'mobile'=>'required'
       ]);
        //dd($request->all());
       User::create([
       'name'=>$request->name,
       'email'=>$request->email,
       'password'=>bcrypt($request->password),
       'role'=>'customer',
       'mobile'=>bcrypt($request->mobile),
       ]);
       return redirect()->back()->with('success','SignUp Successfull');
    }
    
    public function login()
    {
    return view('website.pages.login');
    }

    public function loginpost(Request $request)
    {
        // dd($request->all());
        $credentials=$request->except('_token');
        // $credentials['email']=$request->user_email;
        // $credentials['password']=$request->user_password;
    
// dd($credentials);
    if (Auth::attempt($credentials))
    {
       
    
        return redirect()->route('home');
        
       
    }
      
    return redirect()->back()->with('message','User not recognized');
    }
    
    public function logout()
    {
     Auth::logout();
     return redirect()->route('customer.login');
    }
    
    
}
