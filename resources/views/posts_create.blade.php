@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Add New Post</h1>

      <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea name="content" class="form-control" id="content" placeholder="Enter content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection