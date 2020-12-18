@extends('layouts.mobile')

@section('content')

  <div class="bg-white">
    {{-- <div class="w-1/2 sm:w-auto md:w-full lg:w-32 xl:w-3/4 ...">
      Responsive Element
    </div> --}}
    {{-- <div class="container mx-auto w-3/4 h-3/4 py-8"> --}}
    {{-- <div class="container mx-auto w-3/4 h-3/4 flex flex-col justify-around place-items-center"> --}}
    {{-- <div class="container mx-auto w-3/4 py-8 flex flex-col justify-around place-items-center" style="min-height: 75vh"> --}}
    {{-- <div class="container mx-auto w-3/4 py-8" style="min-height: 75vh">
      <img class="mb-8" src="/assets/images/profile-bw.jpg" alt="Yan Siegers">
      <h1 class="mb-8">Yan Siegers</h1>
      <p class="mb-8 text-center">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, 
        omnis rerum. Facilis?
      </p>
      <div class="flex flex-col place-items-center">
        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
      </div>
    </div> --}}

    <div class="container mx-auto grid">
      <img class="mb-8" src="/assets/images/profile-bw.jpg" alt="Yan Siegers">
      <h1 class="mb-8">Yan Siegers</h1>
      <p class="mb-8 text-center">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, 
        omnis rerum. Facilis?
      </p>
      <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
      </svg>
    </div>


  </div>






  {{-- <div class="bg-white">
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
      <div class="flex justify-evenly mt-24"> --}}
        {{-- <input type="button" class=" btn btn-white" value="See my blog">
        <input type="button" class=" btn btn-white" value="See my CV"> --}}

        {{-- <a class="btn btn-white" href="{{ action('App\Http\Controllers\PostController@index') }}">See my blog</a>
        <a class="btn btn-white" href="{{ route('home') }}">See my CV</a>
      </div>

    </div>
  </div>

  <div class="h-1/2 bg-one bg-fixed bg-cover bg-center" style="background-image: url('/assets/images/treinstation-bw.jpg')"></div>

  <div class="bg-white">
    <div class="container mx-auto max-w-lg flex flex-col h-screen justify-center">

      <h2 class="text-6xl text-black mb-8">Projects</h2>
      <p class="text-black text-center text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      <div class="flex justify-evenly mt-24"> --}}
        {{-- <input type="button" class=" btn btn-black" value="See examples">
        <input type="button" class=" btn btn-black" value="See all"> --}}

        {{-- <a class="btn btn-black" href="{{ route('examples') }}">See examples</a>
        <a class="btn btn-black" href="{{ action('App\Http\Controllers\ProjectController@index') }}">See all</a>
      </div>

    </div>
  </div>

  <div class="h-1/2 bg-one bg-fixed bg-cover bg-center" style="background-image: url('/assets/images/treinstation2-bw.jpg')"></div>

  <div class="bg-black">
    <div class="container mx-auto max-w-lg flex flex-col h-screen justify-center">

      <h2 class="text-6xl text-white mb-8">Get in contact</h2>
      <p class="text-white text-center text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      <div class="flex justify-evenly mt-24"> --}}
        {{-- <input type="button" class=" btn btn-white" value="LinkedIn">
        <input type="button" class=" btn btn-white" value="Send an e-mail"> --}}

        {{-- <a class="btn btn-white" href="https://www.linkedin.com/in/yansiegers/">My LinkedIn</a>
        <a class="btn btn-white" href="mailto:yan@yansiegers.nl">Send me an e-mail</a>
      </div>

    </div>
  </div> --}}

@stop