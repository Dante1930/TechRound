
@extends('posts.layouts.head')
@section('title')
Create Post
@endsection
<div class="container">
<form method="POST" action="{{ route('posts.store') }}">
                        @csrf
  <fieldset>
    <legend>Tech Round</legend>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Create Post</label>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Post</label>
      <input type="text" name="post_title" class="form-control @error('post_title') is-invalid @enderror" id="exampleInputEmail1" value="{{ old('post_title') }}" aria-describedby="emailHelp" placeholder="Enter Post">
                                @error('post_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <textarea class="form-control @error('description') is-invalid @enderror" name="description" >{{ old('description') }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>