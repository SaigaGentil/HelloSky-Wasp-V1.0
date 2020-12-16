@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="https://scontent-waw1-1.cdninstagram.com/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_ohc=dzidqACw0CkAX_25YmO&tp=1&oh=7675a9539eff5ce9b4d6f930c8658d1a&oe=5FFCBD67"
                    class="rounded-circle" alt="">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <a href="/p/create">Add New Post</a>
                </div>
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url ?? 'No Url Set' }}</a></div>
            </div>
        </div>
        <div class="row pt-5">
            @foreach ($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
