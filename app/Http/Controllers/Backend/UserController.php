<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
    return view('admin.pages.login');
    }
    public function loginpost(Request $request)
    {
    $credentials=$request->except('_token');
    //  dd($credentials);

    if (Auth::attempt($credentials))
    {
        return redirect()->route(route:'admin');
    }
    return redirect()->back()->with('message','User not recognized');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function customerlist()
    { 
        $user=User::where('role','=','customer')->get();
     return view ('admin.pages.customer',compact('user'));
    }

    public function userlist()
    {
        $user=User::where('role','!=','customer')->get();
     return view ('admin.pages.user',compact('user'));
    }

}
