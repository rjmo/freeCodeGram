@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf 

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group ">
                    <div>
                        <h1>Add new post</h1>
                    </div>
                    <label for="caption" class="col-md-4 col-form-label ">Post caption</label>

                    <input name="caption" id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" caption="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                    <div class="form-group">


                        @error('caption')
                            <strong style="color: red;">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-8 offset-2">
                <div class="form-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="inputGroupFile01">Post image</label>

                        @error('image')
                            <strong style="color: red;">{{ $message }}</strong>
                        @enderror

                    </div>
                </div>
            </div>
            <div class="col-8 offset-2">
                <button class="btn btn-primary">Add new post</button>
            </div>

        </div>

    </form>
</div>
<!-- {{ session('status') }} -->
@endsection