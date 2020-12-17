<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ComputerMeasurementsSystemsController extends Controller
{
    //
    //protected $guarded = [];
    public function index()
    {
        // return view('uni.index', [
        //     'user' => $user,
        // ]);
        return \view('Uni.index');
    }
}
