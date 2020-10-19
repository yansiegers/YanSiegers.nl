@php
    $page_title = 'Blog'
@endphp

@extends('layouts.default', [
  'title' => $page_title
])

@section('content')
  <h1 class="text-xl font-bold">{{ $page_title }}</h1>

  <ol class="list-disc list-inside">        
    @foreach ($posts as $post)
    <li>
      <a href="{{ action('App\Http\Controllers\PostController@show', [$post->id]) }}">
        {{ $post->title }}
      </a>
    </li>
    @endforeach
  </ol>
@stop
