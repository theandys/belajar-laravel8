@extends('layouts.main')

@section('container')
  <h1 class="mb-5">Halaman Blog Posts</h1>

  @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
      <h2>
        <a href="{{ URL::to('posts/' . $post->slug) }}" class="text-decoration-none">{{ $post->title }}</a>
      </h2>
      <p>
        By: <a href="" class="text-decoration-none">{{ $post->user->name }}</a> 
        in <a href="{{ URL::to('categories/' . $post->category->slug) }}" class="text-decoration-none">{{ $post->category->name }}</a>
      </p>
      <p>{{ Str::limit($post->body, 200) }}</p>
      <a href="{{ URL::to('posts/' . $post->slug) }}" class="text-decoration-none">Read more</a>
    </article>
  @endforeach  
@endsection