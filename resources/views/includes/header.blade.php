<nav>
  <a id="logo" href="/">Home</a>
  <ul>
    <li><a href="{{ route('contact') }}">Contact</a></li>
    <li><a href="{{ action('App\Http\Controllers\ProjectController@index') }}">Projects</a></li>
    <li><a href="{{ action('App\Http\Controllers\PostController@index') }}">Blog</a></li>
    <li><a href="{{ route('examples') }}">Examples</a></li>
    <li><a href="{{ route('cms') }}">CMS</a></li>
  </ul>
</nav>

