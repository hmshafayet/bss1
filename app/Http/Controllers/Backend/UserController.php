<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function login()
    {
    return view('admin.pages.login');
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
