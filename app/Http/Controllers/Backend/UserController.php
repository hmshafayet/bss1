<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function customerlist()
    {
     return view ('admin.pages.customer');
    }

    public function userlist()
    {
     return view ('admin.pages.user');
    }

}
