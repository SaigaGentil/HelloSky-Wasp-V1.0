@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100" alt="">
            </div>
            <div class="col-9 pt-5">

                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-3">
                        <div class="h4">
                            {{ $user->name }}
                        </div>
                        <!--<follow-button user-id="{{ $user->id }}"></follow-button>-->
                    </div>
                    <!--
                                                    @can('update', $user->profile)
                                                                                        <a href="/p/create">Add New Post</a>
                                                    @endcan
                                                    -->
                </div>
                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan
                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                    <div class="pr-5"><strong>5</strong> checks</div>
                    <div class="pr-5"><strong>1</strong> failed checks</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url ?? 'No Url Set' }}</a></div>
            </div>
        </div>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Configured Checks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Hosts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Privacy</a>
            </li>
        </ul>
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
