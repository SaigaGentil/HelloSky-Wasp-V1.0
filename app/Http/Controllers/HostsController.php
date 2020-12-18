<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Host;

class HostsController extends Controller
{
    //
    public function index()
    {
        // return view('uni.index', [
        //     'user' => $user,
        // ]);
        // return \view('Uni.index');

        $data = Host::all();
        return view('Uni.index', [
            'hosts' => $data
        ]);
    }
}
