@extends('layouts.main')

@section('container')
  <h1 class="mb-5">Post Category : {{ $category }}</h1>

  @foreach ($posts as $post)
    <article class="mb-5">
      <h2>
        <a href="{{ URL::to('posts/' . $post->slug) }}" class="text-decoration-none">{{ $post->title }}</a>
      </h2>
      <p>By: {{ $post->user->name }}</p>
      <p>{{ Str::limit($post->body, 200) }}</p>
    </article>
  @endforeach  
@endsection