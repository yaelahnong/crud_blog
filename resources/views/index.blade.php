@extends('layouts.app')

@section('content')
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1>Author</h1>
        <p>John is a passionate writer and content creator with [Number of Years] years of experience in the field. With a background in Computer Science, John has a keen eye for detail and a love of language that shines through in their writing.</p>
      </div>
      <div class="col-md-4">
        <h3>Author Info</h3>
        <p>Name: John Doe</p>
        <p>Email: john.doe@example.com</p>
        <p>Website: www.johndoe.com</p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>List Blog</h2>
        <hr>
        <ul class="list-group">
          @foreach ($blogs as $blog)
          <li class="list-group-item">
            <a href="#">{{ $blog->title }}</a>
            <span class="badge badge-secondary">{{ $blog->created_at->format('d M Y') }}</span>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection