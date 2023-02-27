@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Edit Post</h1>
      <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea name="content" class="form-control" id="content">{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection