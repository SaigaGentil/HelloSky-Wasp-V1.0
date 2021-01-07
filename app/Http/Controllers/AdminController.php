<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function showUsers()
    {
        return view('admin.users');
    }

    public function showLoginHistory()
    {
        return view('admin.login_history');
    }
}
