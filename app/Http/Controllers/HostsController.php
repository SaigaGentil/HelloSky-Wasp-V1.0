<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Host;
use App\Models\User;

class HostsController extends Controller
{
    // Protect route to only authenticated users
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function edit(Host $check)
    {
        // $this->authorize('update', $host);
        // $data = Host::all();
        return view('Uni.edit_host', \compact('check'));
        //\dd($check);
    }

    public function create()
    {
        return view('uni.add_host');
    }

    public function update(Host $check)
    {
        $data = \request()->validate([
            'check_name' => 'required',
            'address' => 'required',
            'port' => 'required',
        ]);
        // \dd($data);

        $check->update($data);

        return \redirect('/uws62020/cms/hosts')->with('status', 'Success, check updated!');
    }

    public function store()
    {
        $data = \request()->validate([
            'check_name' => 'required',
            'address' => 'required',
            'port' => 'required',
        ]);

        \auth()->user()->hosts()->create([
            'check_name' => $data['check_name'],
            'address' => $data['address'],
            'port' => $data['port'],
        ]);

        return \redirect('/uws62020/cms/hosts');
    }

    // public static pingHost
}
