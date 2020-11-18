@extends('layouts.home')

@section('content')
  {{-- <h1 class="text-xl font-bold">Hello world!</h1> --}}
  {{-- <img src="/assets/logos/logo-white.png" alt="404"> --}}

  {{-- <ul class="bg-white p-10"> --}}
    {{-- <li class="mb-5"><input class="btn btn-primary   uppercase bg-black text-white px-3 py-2 font-bold border-black border-4" type="button" value="button"></li>
    <li class="mb-5"><input class="btn btn-secondary uppercase bg-white text-black px-3 py-2 font-bold border-black border-4" type="button" value="button"></li>
    <li class="mb-5"><input class="btn btn-disabled  uppercase bg-white text-black px-3 py-2 font-bold border-black border-4 border-dashed" type="button" value="button"></li> --}}
    {{-- <li class="mb-5"><input type="button" class="yan-btn bg-black text-white" value="Button"></li>
    <li class="mb-5"><input type="button" class="yan-btn bg-black text-white" value="Button"></li>
    <li class="mb-5"><input type="button" class="yan-btn bg-black text-white" value="Button"></li> --}}
  {{-- </ul> --}}

  {{-- <ul class="bg-black p-10"> --}}
    {{-- <li class="mb-5"><input class="btn btn-primary   uppercase bg-white text-black px-3 py-2 font-bold border-white border-4" type="button" value="button"></li>
    <li class="mb-5"><input class="btn btn-secondary uppercase bg-black text-white px-3 py-2 font-bold border-white border-4" type="button" value="button"></li>
    <li class="mb-5"><input class="btn btn-disabled  uppercase bg-black text-white px-3 py-2 font-bold border-white border-4 border-dashed" type="button" value="button"></li> --}}
    {{-- <li class="mb-5"><input type="button" class="yan-btn bg-white text-black" value="Button"></li>
    <li class="mb-5"><input type="button" class="yan-btn bg-white text-black" value="Button"></li>
    <li class="mb-5"><input type="button" class="yan-btn bg-white text-black" value="Button"></li> --}}
  {{-- </ul> --}}

  {{-- <div class="grid grid-rows-3 grid-flow-col gap-4">
    <div class="row-span-3 ..."></div>
    <div class="row-span-1 col-span-2 ..."></div>
    <div class="row-span-2 col-span-2 ..."></div>
  </div> --}}

  {{-- <div class="grid grid-cols-4 gap-10">
    <div class="card col-span-2 row-span-2 bg-black text-white pt-4 px-8 pb-8">
      <h2 class="text-xl pb-4">Lorem ipsum</h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi eos provident vitae accusantium soluta quae doloribus assumenda sunt optio, pariatur impedit eligendi laudantium placeat ex blanditiis ea! Omnis, aliquam commodi!</p>
      <input type="button" class="yan-btn bg-white text-black border-white border-4" value="Button">      
    </div>
    <div class="card col-span-2 row-span-2 bg-white text-black border-black border-4 pt-4 px-8 pb-8">
      <h2 class="text-xl pb-4">Lorem ipsum</h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi eos provident vitae accusantium soluta quae doloribus assumenda sunt optio, pariatur impedit eligendi laudantium placeat ex blanditiis ea! Omnis, aliquam commodi!</p>
      <input type="button" class="yan-btn bg-black text-white  border-black border-4" value="Button">      
    </div>
    <div class="card col-span-2 row-span-2 bg-white text-black border-black border-4 pt-4 px-8 pb-8">
      <h2 class="text-xl pb-4">Lorem ipsum</h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi eos provident vitae accusantium soluta quae doloribus assumenda sunt optio, pariatur impedit eligendi laudantium placeat ex blanditiis ea! Omnis, aliquam commodi!</p>
      <input type="button" class="yan-btn bg-black text-white border-black border-4" value="Button">      
    </div>
    <div class="card col-span-2 row-span-2 bg-black text-white pt-4 px-8 pb-8">
      <h2 class="text-xl pb-4">Lorem ipsum</h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi eos provident vitae accusantium soluta quae doloribus assumenda sunt optio, pariatur impedit eligendi laudantium placeat ex blanditiis ea! Omnis, aliquam commodi!</p>
      <input type="button" class="yan-btn bg-white text-black border-white border-4" value="Button">
    </div>

  </div> --}}

  {{--------------------------------------------}}

  <div class="bg-white">
    <div class="container mx-auto max-w-lg flex flex-col h-screen justify-center">

      <h2 class="text-6xl text-black mb-8">Hi, I'm Yan</h2>
      <p class="text-black text-center text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

    </div>
  </div>

  <div class="h-1/2 bg-one bg-fixed bg-cover bg-center" style="background-image: url('/assets/images/achmeatoren-bw.jpg')"></div>

  <div class="bg-black">
    <div class="container mx-auto max-w-lg flex flex-col h-screen justify-center">

      <h2 class="text-6xl text-white mb-8">About me</h2>
      <p class="text-white text-center text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      <div class="flex justify-evenly mt-24">
        {{-- <input type="button" class=" btn btn-white" value="See my blog">
        <input type="button" class=" btn btn-white" value="See my CV"> --}}

        <a class="btn btn-white" href="{{ action('App\Http\Controllers\PostController@index') }}">See my blog</a>
        <a class="btn btn-white" href="{{ route('home') }}">See my resumé</a>
      </div>

    </div>
  </div>

  <div class="h-1/2 bg-one bg-fixed bg-cover bg-center" style="background-image: url('/assets/images/treinstation-bw.jpg')"></div>

  <div class="bg-white">
    <div class="container mx-auto max-w-lg flex flex-col h-screen justify-center">

      <h2 class="text-6xl text-black mb-8">Projects</h2>
      <p class="text-black text-center text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      <div class="flex justify-evenly mt-24">
        {{-- <input type="button" class=" btn btn-black" value="See examples">
        <input type="button" class=" btn btn-black" value="See all"> --}}

        <a class="btn btn-black" href="{{ route('examples') }}">See examples</a>
        <a class="btn btn-black" href="{{ action('App\Http\Controllers\ProjectController@index') }}">See all</a>
      </div>

    </div>
  </div>

  <div class="h-1/2 bg-one bg-fixed bg-cover bg-center" style="background-image: url('/assets/images/treinstation2-bw.jpg')"></div>

  <div class="bg-black">
    <div class="container mx-auto max-w-lg flex flex-col h-screen justify-center">

      <h2 class="text-6xl text-white mb-8">Get in contact</h2>
      <p class="text-white text-center text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      <div class="flex justify-evenly mt-24">
        {{-- <input type="button" class=" btn btn-white" value="LinkedIn">
        <input type="button" class=" btn btn-white" value="Send an e-mail"> --}}

        <a class="btn btn-white" href="https://www.linkedin.com/in/yansiegers/">My LinkedIn</a>
        <a class="btn btn-white" href="mailto:yan@yansiegers.nl">Send me an e-mail</a>
      </div>

    </div>
  </div>

@stop