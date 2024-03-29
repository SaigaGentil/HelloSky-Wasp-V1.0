<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        //$user = User::findOrFail($user);
        return view('profiles.index', \compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);

        return \view('profiles.edit', \compact('user'));
    }

    //Update user profile
    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = \request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        if (\request('image')) {
            $imagePath = request('image')->store('uploads', 'public');
            $image = Image::make(\public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();
            $imageArray = ['image' => $imagePath];
        }

        Auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return \redirect("/profile/{$user->id}");
        //\dd($data);
    }
}
