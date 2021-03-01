@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-8">
    <img src="/storage/{{$post->image}}" class="w-100" alt="">

    </div>
</div>
</div>
<!-- {{ session('status') }} -->
@endsection