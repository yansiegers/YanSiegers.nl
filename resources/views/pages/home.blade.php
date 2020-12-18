@extends('layouts.default')

@section('content')
    <div class="bg-white">
        <section class="container mx-auto max-w-lg lg:max-w-4xl p-8 h-screen grid lg:grid-cols-2 lg:gap-x-8 content-center">
            <img class="filter lg:row-span-3" src="/assets/images/profile.jpg" alt="Yan Siegers">
            <h2 class="text-6xl text-black mb-8">Hi, I'm Yan</h2>
            <p class="text-black text-center text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </p>
        </section>
    </div>

    <div class="filter h-1/2 bg-one bg-fixed bg-cover bg-center" style="background-image: url('/assets/images/achmeatoren.jpg')"></div>

    <div class="bg-black">
        <section class="container mx-auto max-w-lg p-8 h-screen flex flex-col justify-center">
            <h2 class="text-6xl text-white mb-8">About me</h2>
            <p class="text-white text-center text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <div class="flex flex-col lg:flex-row space-y-8 lg:space-y-0 justify-evenly mt-24">
                <a class="btn btn-white" href="{{ action('App\Http\Controllers\PostController@index') }}">See my blog</a>
                <a class="btn btn-white" href="{{ route('home') }}">See my résumé</a>
            </div>
        </section>
    </div>

    <div class="filter h-1/2 bg-one bg-fixed bg-cover bg-center" style="background-image: url('/assets/images/treinstation.jpg')"></div>

    <div class="bg-white">
        <section class="container mx-auto max-w-lg p-8 h-screen flex flex-col justify-center">
            <h2 class="text-6xl text-black mb-8">Projects</h2>
            <p class="text-black text-center text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <div class="flex flex-col lg:flex-row space-y-8 lg:space-y-0 justify-evenly mt-24">
                <a class="btn btn-black" href="{{ route('examples') }}">See examples</a>
                <a class="btn btn-black" href="{{ action('App\Http\Controllers\ProjectController@index') }}">See all</a>
            </div>
        </section>
    </div>

    <div class="filter h-1/2 bg-one bg-fixed bg-cover bg-center" style="background-image: url('/assets/images/treinstation2.jpg')"></div>

    <div class="bg-black">
        <section class="container mx-auto max-w-lg p-8 h-screen flex flex-col justify-center">
            <h2 class="text-6xl text-white mb-8">Get in contact</h2>
            <p class="text-white text-center text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <div class="flex flex-col lg:flex-row space-y-8 lg:space-y-0 justify-evenly mt-24">
                <a class="btn btn-white" href="https://www.linkedin.com/in/yansiegers/">My LinkedIn</a>
                <a class="btn btn-white" href="mailto:yan@yansiegers.nl">Send me an e-mail</a>
            </div>
        </section>
    </div>

@stop
