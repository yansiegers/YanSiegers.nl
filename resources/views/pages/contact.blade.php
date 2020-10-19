@php
    $page_title = 'Get in contact'
@endphp

@extends('layouts.default', [
  'title' => $page_title
])

@section('content')
  <h1 class="text-xl font-bold">{{ $page_title }}</h1>
  I am the contact page
@stop