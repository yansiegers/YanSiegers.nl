<nav>  
  <ul>
    <li class="inline-block"><a href="{{ route('home') }}">Home</a></li>
    <li class="inline-block"><a href="{{ route('contact') }}">Contact</a></li>
    <li class="inline-block"><a href="{{ action('App\Http\Controllers\ProjectController@index') }}">Projects</a></li>
    <li class="inline-block"><a href="{{ action('App\Http\Controllers\PostController@index') }}">Blog</a></li>
    <li class="inline-block"><a href="{{ route('examples') }}">Examples</a></li>
    <li class="inline-block"><a href="{{ route('cms') }}">CMS</a></li>
  </ul>
</nav>

