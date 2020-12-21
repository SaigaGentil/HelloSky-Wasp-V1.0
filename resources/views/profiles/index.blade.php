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
                    <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> blog articles</div>
                    <div class="pr-5"><strong>{{ $user->hosts->count() }}</strong> projects</div>
                    <div class="pr-5"><strong>0</strong> achievements</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url ?? 'No Url Set' }}</a></div>
            </div>
        </div>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Modules</a>
            </li>
            @can('update', $user->profile)

                <li class="nav-item">
                    <a class="nav-link" href="#">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Achievements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">HelloSky Group</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
            @endcan

        </ul>

        <div class="row">
            <div class="col-sm-4 pt-3">
                <div class="card shadow">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <h5 class="card-title">Semester 1 - 2018</h5>
                        {{-- <p class="card-text">This is a longer card with supporting text
                            below as a natural lead-in to
                            additional
                            content. This content is a little bit longer.</p> --}}
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="#" class="btn btn-primary stretched-link">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 pt-3">
                <div class="card shadow">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <h5 class="card-title">Semester 2 - 2018</h5>
                        {{-- <p class="card-text">This is a longer card with supporting text
                            below as a natural lead-in to
                            additional
                            content. This content is a little bit longer.</p> --}}
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="#" class="btn btn-primary stretched-link">Explore</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 pt-3">
                <div class="card shadow">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <h5 class="card-title">Semester 3 - 2019</h5>
                        {{-- <p class="card-text">This is a longer card with supporting text
                            below as a natural lead-in to
                            additional
                            content. This content is a little bit longer.</p> --}}
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="#" class="btn btn-primary stretched-link">Explore</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 pt-3">
                <div class="card shadow">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <h5 class="card-title">Semester 4 - 2019</h5>
                        {{-- <p class="card-text">This is a longer card with supporting text
                            below as a natural lead-in to
                            additional
                            content. This content is a little bit longer.</p> --}}
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="#" class="btn btn-primary stretched-link">Explore</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 pt-3">
                <div class="card shadow">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <h5 class="card-title">Semester 5 - 2020</h5>
                        {{-- <p class="card-text">This is a longer card with supporting text
                            below as a natural lead-in to
                            additional
                            content. This content is a little bit longer.</p> --}}
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="#" class="btn btn-primary stretched-link">Explore</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 pt-3">
                <div class="card shadow">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <h5 class="card-title">Semester 6 - 2020</h5>
                        {{-- <p class="card-text">This is a longer card with supporting text
                            below as a natural lead-in to
                            additional
                            content. This content is a little bit longer.</p> --}}
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="/uws62020/cms/hosts" class="btn btn-primary stretched-link">Explore</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 pt-3">
                <div class="card shadow">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <h5 class="card-title">Semester 7 - 2021</h5>
                        {{-- <p class="card-text">This is a longer card with supporting text
                            below as a natural lead-in to
                            additional
                            content. This content is a little bit longer.</p> --}}
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="#" class="btn btn-primary stretched-link">Explore</a>
                    </div>
                </div>
            </div>

            @can('update', $user->profile)
                <div class="col-sm-4 pt-3">
                    <div class="card shadow">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <div class="card-body">
                            <h5 class="card-title">Final Engineering Project</h5>
                            {{-- <p class="card-text">This is a longer card with supporting text
                                below as a natural lead-in to
                                additional
                                content. This content is a little bit longer.</p> --}}
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <a href="#" class="btn btn-primary stretched-link">Explore</a>
                        </div>
                    </div>
                </div>
            @endcan

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
