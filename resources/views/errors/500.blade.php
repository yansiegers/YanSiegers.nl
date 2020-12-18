@php
    $page_title = 'Internal server error'
@endphp

@extends('layouts.default', [
    'title' => "500: " . $page_title
])

@section('content')

    <div class="bg-white">
        <section class="container mx-auto max-w-lg p-8 flex flex-col justify-center">
            <div class="h-8"></div>
        </section>
    </div>

    <div class="bg-black text-white">
        <section class="container mx-auto max-w-lg p-8 h-screen flex flex-col justify-center">
            <img src="/assets/errors/500 - black weird.png" alt="{{ "500: " . $page_title }}">
            <h2 class="mb-8">{{ $page_title }}</h2>
            <p class="text-center text-lg">Nice, you've discovered bug in my code! That's fine, I'm not perfect. Please report this error on GitHub, there is a button down below. Thank you in advance for the feedback!</p>
            <div class="flex flex-col lg:flex-row space-y-8 lg:space-y-0 justify-evenly mt-24">
                <a class="btn btn-white" href="https://github.com/yansiegers/YanSiegers.nl">This repository</a>
                <a class="btn btn-white" href="https://github.com/yansiegers/YanSiegers.nl/issues">Report bug</a>
            </div>
        </section>
    </div>

@stop
