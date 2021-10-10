@extends('layouts.main')

@section('container')
  <h2>{{ $post->title }}</h2>
  <p>
    By: <a href=""  class="text-decoration-none">{{ $post->user->name }}</a> 
    in <a href="{{ URL::to('categories/' . $post->category->slug) }}" class="text-decoration-none">{{ $post->category->name }}</a>
  </p>
  <p>{!! $post->body !!}</p>
  <a href="{{ URL::to('blog') }}" class="d-block mt-3 text-decoration-none">Back to Post</a>
@endsection