@extends('layouts.main')

@section('container')
  <h1 class="mb-5">Categories</h1>

  @foreach ($categories as $category)
    <ul>
      <li><a href="{{ URL::to('categories/' . $category->slug) }}" class="text-decoration-none">{{ $category->name }}</a></li>
    </ul>
    </article>
  @endforeach  
@endsection