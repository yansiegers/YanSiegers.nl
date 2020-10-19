@php
    $page_title = 'CMS'
@endphp

@extends('layouts.default', [
  'title' => $page_title
])

@section('content')
  <h1 class="text-xl font-bold">{{ $page_title }}</h1>

  I am the CMS page
@stop