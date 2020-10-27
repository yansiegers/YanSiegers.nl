<nav>  
  <ul class="p-10">
    <li class="inline-block"><a class="yan-btn btn-primary mr-10 uppercase bg-black text-white px-3 py-2 font-bold border-black" href="{{ route('home') }}">Home</a></li>
    <li class="inline-block"><a class="yan-btn btn-primary mr-10 uppercase bg-black text-white px-3 py-2 font-bold border-black" href="{{ route('contact') }}">Contact</a></li>
    <li class="inline-block"><a class="yan-btn btn-primary mr-10 uppercase bg-black text-white px-3 py-2 font-bold border-black" href="{{ action('App\Http\Controllers\ProjectController@index') }}">Projects</a></li>
    <li class="inline-block"><a class="yan-btn btn-primary mr-10 uppercase bg-black text-white px-3 py-2 font-bold border-black" href="{{ action('App\Http\Controllers\PostController@index') }}">Blog</a></li>
    <li class="inline-block"><a class="yan-btn btn-primary mr-10 uppercase bg-black text-white px-3 py-2 font-bold border-black" href="{{ route('examples') }}">Examples</a></li>
    <li class="inline-block"><a class="yan-btn btn-primary mr-10 uppercase bg-black text-white px-3 py-2 font-bold border-black" href="{{ route('cms') }}">CMS</a></li>
  </ul>
</nav>

