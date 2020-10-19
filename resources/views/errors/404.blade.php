@php
    $page_title = '404'
@endphp

@extends('layouts.default', [
  'title' => $page_title
])

@section('content')
  {{-- <h1 class="text-xl font-bold">{{ $page_title }}</h1> --}}

  <img src="/assets/404 - white weird.png" alt="404">

  <p>Oops, page not found.</p>
@stop
