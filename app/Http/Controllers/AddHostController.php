<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddHostController extends Controller
{
    // Protect route to only authenticated users
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('uni.add_host');
    }
}
