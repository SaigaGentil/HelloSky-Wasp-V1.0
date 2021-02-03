<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function showUsers()
    {
        return view('Admin.users');
    }

    public function showLoginHistory()
    {
        return view('Admin.login_history');
    }
}
