@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row mb-3">
    <div class="col">
      <h1>{{ $post->title }}</h1>
    </div>
    <div class="col-auto">
      <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
      <form action="{{ route('posts.destroy', $post->id) }}" method="post" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
      </form>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">{{ $post->title }}</h5>
      <p class="card-text">{{ $post->content }}</p>
    </div>
  </div>
</div>
@endsection