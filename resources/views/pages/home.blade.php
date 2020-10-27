@extends('layouts.default')

@section('content')
  <h1 class="text-xl font-bold">Hello world!</h1>
  <img src="/assets/logos/logo-white.png" alt="404">

  <ul class="bg-white p-10">
    {{-- <li class="mb-5"><input class="btn btn-primary   uppercase bg-black text-white px-3 py-2 font-bold border-black border-4" type="button" value="button"></li>
    <li class="mb-5"><input class="btn btn-secondary uppercase bg-white text-black px-3 py-2 font-bold border-black border-4" type="button" value="button"></li>
    <li class="mb-5"><input class="btn btn-disabled  uppercase bg-white text-black px-3 py-2 font-bold border-black border-4 border-dashed" type="button" value="button"></li> --}}
    <li class="mb-5"><input type="button" class="yan-btn bg-black text-white" value="Button"></li>
    <li class="mb-5"><input type="button" class="yan-btn bg-black text-white" value="Button"></li>
    <li class="mb-5"><input type="button" class="yan-btn bg-black text-white" value="Button"></li>
  </ul>

  <ul class="bg-black p-10">
    {{-- <li class="mb-5"><input class="btn btn-primary   uppercase bg-white text-black px-3 py-2 font-bold border-white border-4" type="button" value="button"></li>
    <li class="mb-5"><input class="btn btn-secondary uppercase bg-black text-white px-3 py-2 font-bold border-white border-4" type="button" value="button"></li>
    <li class="mb-5"><input class="btn btn-disabled  uppercase bg-black text-white px-3 py-2 font-bold border-white border-4 border-dashed" type="button" value="button"></li> --}}
    <li class="mb-5"><input type="button" class="yan-btn bg-white text-black" value="Button"></li>
    <li class="mb-5"><input type="button" class="yan-btn bg-white text-black" value="Button"></li>
    <li class="mb-5"><input type="button" class="yan-btn bg-white text-black" value="Button"></li>
  </ul>

  <div class="grid grid-rows-3 grid-flow-col gap-4">
    <div class="row-span-3 ..."></div>
    <div class="row-span-1 col-span-2 ..."></div>
    <div class="row-span-2 col-span-2 ..."></div>
  </div>

  <div class="grid grid-cols-4 gap-10">
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

    <style>
      .card {

      }
    </style>
  </div>
@stop