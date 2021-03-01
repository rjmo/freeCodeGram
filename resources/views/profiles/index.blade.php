@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" style="height: 150px;" src="/svg/16304616191553750378.svg" alt="">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-md-between align-items-baseline">
                <h1> {{$user -> userName}}</h1>
                <a href="/p/create">Add new post</a>
                <!-- <div class="p-2">
                    <a href="#" class="badge badge-primary">Follow</a>
                </div> -->
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>{{ $user->posts->count()}}</strong> posts</div>
                <div class="pr-4"><strong>12k</strong> followers</div>
                <div class="pr-4"><strong>45</strong> following</div>
            </div>
            <div class="pt-3 font-weight-bold">
               {{ $user->profile->title}}
            </div>
            <div>
            {{ $user->profile->description}}
            </div>
            <div>
                <a href="">{{ $user->profile->url}}</a>
            </div>
        </div>
    </div>
    <div class="row pt-5">

    @foreach($user->posts as $post)
        <div class="col-4 mb-4">
        <a href="/p/{{$post->id}}">
            <img src="/storage/{{$post->image}}" class="w-100">
        </a>
        </div>
    @endforeach
    </div>
</div>
<!-- {{ session('status') }} -->
@endsection