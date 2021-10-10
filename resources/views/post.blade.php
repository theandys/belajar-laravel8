@extends('layouts.main')

@section('container')
  <h2>{{ $post->title }}</h2>
  <p>
    By: <a href="{{ URL::to('/authors/' . $post->author->username) }}"  class="text-decoration-none">{{ $post->author->name }}</a> 
    in <a href="{{ URL::to('categories/' . $post->category->slug) }}" class="text-decoration-none">{{ $post->category->name }}</a>
  </p>
  <p>{!! $post->body !!}</p>
  <a href="{{ URL::to('blog') }}" class="d-block mt-3 text-decoration-none">Back to Post</a>
@endsection