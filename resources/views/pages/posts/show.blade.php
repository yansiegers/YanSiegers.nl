@extends('layouts.default', [
  'title' => $post->title
])

@section('content')
<h1 class="text-xl font-bold">{{ $post->title }}</h1>
@stop
