<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditHostController extends Controller
{
    // Protect route to only authenticated users
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        return view('uni.edit_host');
    }
}
