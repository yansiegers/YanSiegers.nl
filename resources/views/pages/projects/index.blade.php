@php
    $page_title = 'Projects'
@endphp

@extends('layouts.default', [
  'title' => $page_title
])

@section('content')
  <h1 class="text-xl font-bold">{{ $page_title }}</h1>

  <ol class="list-disc list-inside">
    @foreach ($projects as $project)
    <li>
      <a href="{{ action('App\Http\Controllers\ProjectController@show', [$project->id]) }}">
        {{ $project->title }}
      </a>
    </li>
    @endforeach
  </ol>
@stop    
      