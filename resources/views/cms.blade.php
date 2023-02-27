@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Post List</h1>
      <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Add New Post</a>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($posts as $post)
          <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>
              <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Show</a>
              <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
              <form id="deletePostForm" action="{{ route('posts.destroy', $post->id) }}" method="post" class="d-inline">
                @csrf
                @method('DELETE')
                <button id="deletePostBtn" type="button" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection