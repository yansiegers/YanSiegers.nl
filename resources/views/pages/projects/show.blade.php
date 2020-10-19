@extends('layouts.default', [
  'title' => $project->title
])

@section('content')
  <h1 class="text-xl font-bold">Project: {{ $project->title }}</h1>
@stop