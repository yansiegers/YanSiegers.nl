@php
    $page_title = 'Page not found'
@endphp

@extends('layouts.default', [
    'title' => "404: " . $page_title
])

@section('content')

    <div class="bg-white">
        <section class="container mx-auto max-w-lg p-8 flex flex-col justify-center">
            <div class="h-8"></div>
        </section>
    </div>

    <div class="bg-black text-white">
        <section class="container mx-auto max-w-lg p-8 h-screen flex flex-col justify-center">
            <img src="/assets/errors/404 - black weird.png" alt="{{ "404: " . $page_title }}">
            <h2 class="mb-8">{{ $page_title }}</h2>
            <p class="text-center text-lg">Nice, you've discovered a link that's not working. Please notify me about this. Or you've just mistyped a link in de browser. Well done, but who types links anyway?</p>
            <div class="flex flex-col lg:flex-row space-y-8 lg:space-y-0 justify-evenly mt-24">
                <a class="btn btn-white" href="{{ route('home') }}">Go home</a>
                <a class="btn btn-white" href="https://github.com/yansiegers/YanSiegers.nl/issues">Report bug</a>
            </div>
        </section>
    </div>

@stop
