@php
    $page_title = '500'
@endphp

@extends('layouts.default', [
  'title' => $page_title
])

@section('content')
  {{-- <h1 class="text-xl font-bold">{{ $page_title }}</h1> --}}

  <img src="/assets/errors/500 - white weird.png" alt="500">

  <p>Oops, internal server error.</p>
@stop
